<?php
require 'stripe_config.php';
require 'stripe_conexion.php';
header('Content-Type: application/json');

$json = json_decode(file_get_contents('php://input'), true);
$amount = $json['amount'] ?? 1000;
$method = $json['method'] ?? 'card';
$installments_enabled = isset($json['installments']) && $json['installments'] === true;
$customer_data = $json['customer'];

// Verificar si el cliente ya existe
$stmt = $pdo->prepare("SELECT * FROM clientes WHERE email = ?");
$stmt->execute([$customer_data['email']]);
$cliente = $stmt->fetch();

// Si no existe, insertarlo
if (!$cliente) {
    $insert = $pdo->prepare("INSERT INTO clientes (nombre, email, telefono, direccion_line1, direccion_line2, ciudad, estado, codigo_postal, pais)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $insert->execute([
        $customer_data['nombre'],
        $customer_data['email'],
        $customer_data['telefono'],
        $customer_data['direccion']['line1'],
        $customer_data['direccion']['line2'],
        $customer_data['direccion']['ciudad'],
        $customer_data['direccion']['estado'],
        $customer_data['direccion']['codigo_postal'],
        $customer_data['direccion']['pais']
    ]);
}

// Crear cliente en Stripe
//\Stripe\Stripe::setApiKey('sk_test_51Rr5XCDPx1FQbvVSMmVPNEw10UpyPFcBfPgxak7jiEzJGTZmqWSISZAq4g7h0kPnWH488ssQD6oIQZaQu0qiZNad00518TQMNw');  //---- MODO PRUEBA
\Stripe\Stripe::setApiKey('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'); //---- MODO PRODUCTIVO

$stripeCustomer = \Stripe\Customer::create([
    'name' => $customer_data['nombre'],
    'email' => $customer_data['email'],
    'phone' => $customer_data['telefono'],
    'address' => [
        'line1' => $customer_data['direccion']['line1'],
        'line2' => $customer_data['direccion']['line2'],
        'city' => $customer_data['direccion']['ciudad'],
        'state' => $customer_data['direccion']['estado'],
        'postal_code' => $customer_data['direccion']['codigo_postal'],
        'country' => $customer_data['direccion']['pais']
    ]
]);

// Crear PaymentIntent
$paymentIntentData = [
    'amount' => $amount,
    'currency' => 'mxn',
    'payment_method_types' => [$method],
    'customer' => $stripeCustomer->id,
    'shipping' => [
        'name' => $customer_data['nombre'],
        'address' => [
            'line1' => $customer_data['direccion']['line1'],
            'line2' => $customer_data['direccion']['line2'],
            'city' => $customer_data['direccion']['ciudad'],
            'state' => $customer_data['direccion']['estado'],
            'postal_code' => $customer_data['direccion']['codigo_postal'],
            'country' => $customer_data['direccion']['pais']
        ]
    ]
];

if ($method === 'card' && $installments_enabled) {
    $paymentIntentData['payment_method_options'] = [
        'card' => ['installments' => ['enabled' => true]]
    ];
}

$intent = \Stripe\PaymentIntent::create($paymentIntentData);

// Insertar en pagos
$insertPago = $pdo->prepare("INSERT INTO pagos (email, monto, metodo_pago, msi_activado, stripe_payment_intent_id, estado)
    VALUES (?, ?, ?, ?, ?, ?)");
$insertPago->execute([
    $customer_data['email'],
    $amount,
    $method,
    $installments_enabled,
    $intent->id,
    'pending'
]);

echo json_encode(['clientSecret' => $intent->client_secret]);
