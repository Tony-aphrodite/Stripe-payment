<?php
$archivo = basename($_SERVER['PHP_SELF']);
$sticky;
if($archivo=='configurador.php'){
    $sticky = ' sticky-nav ';
}
echo
'
<header class="fixed-top main-header header-white transparent with-side-panel-ico '.$sticky.'" id="waituk-main-header">
    <div id="nav-section">
        <div class="bottom-header container-fluid mega-menus" id="mega-menus">
            <nav class="navbar navbar-toggleable-lg no-border-radius no-margin mega-menu-multiple" id="navbar-inner-container">
                <form action="" id="top-search" class="no-margin top-search">
                    <div class="form-group no-margin">
                        <input class="form-control no-border" id="search_term" name="search_term" placeholder="Escribe y presiona enter" type="text">
                    </div>
                </form>
                <button type="button" class="navbar-toggler navbar-toggler-left" data-toggle="collapse" data-target="#mega-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto m-sm-auto" href="/"> <img src="img/logo_w.png" alt="Voltika"> <img src="img/logo_b.png" alt="Voltika"> </a>
                <div class="collapse navbar-collapse flex-row-reverse" id="mega-menu" >
                    <ul class="nav navbar-nav">
                        
                        <li class="dropdown dropdown-full-width-g" data-animation="fadeIn">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" data-title="Pages" style="font-weight: bold; font-size:1.1em;">Modelos </a>
                            <div class="dropdown-menu no-border-radius no-padding" data-adjust="2">
                                <div class="row row-autoheight no-gutters justify-content-center">
                                    <!--CIUDAD INTELIGENTE-->
                                    <div class="col-md-4 col-sm-12 col-autoheight clearfix" style="overflow:hidden">
                                        <div class="row" style="border-bottom:5px solid #8fc31f;">
                                                <div class="col-md-12 col-autoheight clearfix" >
                                                <img src="img/menu_ciudad.svg" style="width: 50%; max-width:200px;">
                                            </div>
                                        </div>
                                        <div class="row row-autoheight no-gutters justify-content-center">
                                            <div class="col-lg-6 col-6 col-autoheight clearfix" id="menu1">
                                                <div class="widget-default clearfix">
                                                    <div class="image-wrap mb-4 mt-2">
                                                        <h5><img src="img/menu_m03_tx.svg" style="width:50%"></h5>
                                                        <figure class="team-box">
                                                            <div class="img-block image-zoom">
                                                                <img src="img/menu/m03.png" alt="M03">
                                                            </div>
                                                        </figure>
                                                        <p style="text-decoration: line-through; margin-bottom:0px;">$<span class="_precio_m03_r"></span></p>
                                                        <h5><b>Desde $<span class="_precio_m03"></span></b></h5>
                                                        <p><img src="img/msi_credito_black.svg" style="width:100%; max-width:200px;"></p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <a href="m03" style="background-color: #8fc31f; border: 1px solid #8fc31f; color:#fff; border-radius:0px; padding:0 10px; width: 100%; text-align: center; font-size:0.7em; text-transform:none; margin-bottom:5px;">Conócela</a>
                                                            </div>
                                                            <div class="col-12">
                                                                <a href="configurador?m=m03" data-modelo="m03" style="border: 1px solid #8fc31f; color:#000; border-radius:0px; padding:0 10px; width: 100%; text-align: center; font-size:0.7em; text-transform:none; margin-bottom:5px;">Comprar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-6 col-autoheight clearfix" id="menu5">
                                                <div class="widget-default clearfix">
                                                    <div class="image-wrap mb-4 mt-2">
                                                        <h5><img src="img/menu_pesgo_tx.svg" style="width:50%"></h5>
                                                        <figure class="team-box">
                                                            <div class="img-block image-zoom">
                                                                <img src="img/menu/pesgo.png" alt="Pesgo Plus">
                                                            </div>
                                                        </figure>
                                                        <p style="text-decoration: line-through; margin-bottom:0px;">$<span class="_precio_pesgo_r"></span></p>
                                                        <h5><b>Desde $<span class="_precio_pesgo"></span></b></h5>
                                                        <p><img src="img/msi_credito_black.svg" style="width:100%; max-width:200px;"></p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <a href="pesgo" style="background-color: #8fc31f; border: 1px solid #8fc31f; color:#fff; border-radius:0px; padding:0 10px; width: 100%; text-align: center; font-size:0.7em; text-transform:none; margin-bottom:5px;">Conócela</a>
                                                            </div>
                                                            <div class="col-12">
                                                                <a href="configurador?m=pesgo" data-modelo="pesgo" style="border: 1px solid #8fc31f; color:#000; border-radius:0px; padding:0 10px; width: 100%; text-align: center; font-size:0.7em; text-transform:none; margin-bottom:5px;">Comprar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--MOVILIDAD PLUS-->
                                    <div class="col-md-4 col-autoheight clearfix"  style="overflow:hidden">
                                        <div class="row" style="border-bottom:5px solid #00a0e9;">
                                                <div class="col-md-12 col-autoheight clearfix" >
                                                <img src="img/menu_movilidad.svg" style="width: 50%; max-width:200px;">
                                            </div>
                                        </div>
                                        <div class="row row-autoheight no-gutters justify-content-center">
                                            <div class="col-lg-6 col-6 col-autoheight clearfix" id="menu2">
                                                <div class="widget-default clearfix">
                                                    <div class="image-wrap mb-4 mt-2">
                                                        <h5><img src="img/menu_m05_tx.svg" style="width:50%"></h5>
                                                        <figure class="team-box">
                                                            <div class="img-block image-zoom">
                                                                <img src="img/menu/m05.png" alt="M05">
                                                            </div>
                                                        </figure>
                                                        <p style="text-decoration: line-through; margin-bottom:0px;">$<span class="_precio_m05_r"></span></p>
                                                        <h5><b>Desde $<span class="_precio_m05"></span></b></h5>
                                                        <p><img src="img/msi_credito_black.svg" style="width:100%; max-width:200px;"></p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <a href="m05" style="background-color: #00a0e9; border: 1px solid #00a0e9; color:#fff; border-radius:0px; padding:0 10px; width: 100%; text-align: center; font-size:0.7em; text-transform:none; margin-bottom:5px;">Conócela</a>
                                                            </div>
                                                            <div class="col-12">
                                                                <a href="configurador?m=m05" data-modelo="m05" style="border: 1px solid #00a0e9; color:#000; border-radius:0px; padding:0 10px; width: 100%; text-align: center; font-size:0.7em; text-transform:none; margin-bottom:5px;">Comprar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-6 col-autoheight clearfix" id="menu4">
                                                <div class="widget-default clearfix">
                                                    <div class="image-wrap mb-4 mt-2">
                                                        <h5><img src="img/menu_mino_tx.svg" style="width:50%"></h5>
                                                        <figure class="team-box">
                                                            <div class="img-block image-zoom">
                                                                <img src="img/menu/mino.png" alt="Mino B">
                                                            </div>
                                                        </figure>
                                                        <p style="text-decoration: line-through; margin-bottom:0px;">$<span class="_precio_mino_r"></span></p>
                                                        <h5><b>Desde $<span class="_precio_mino"></span></b></h5>
                                                        <p><img src="img/msi_credito_black.svg" style="width:100%; max-width:200px;"></p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <a href="mino" style="background-color: #00a0e9; border: 1px solid #00a0e9; color:#fff; border-radius:0px; padding:0 10px; width: 100%; text-align: center; font-size:0.7em; text-transform:none; margin-bottom:5px;">Conócela</a>
                                                            </div>
                                                            <div class="col-12">
                                                                <a href="configurador?m=mino" data-modelo="mino" style="border: 1px solid #00a0e9; color:#000; border-radius:0px; padding:0 10px; width: 100%; text-align: center; font-size:0.7em; text-transform:none; margin-bottom:5px;">Comprar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--PREMIUM-->
                                    <div class="col-md-4 col-autoheight clearfix"  style="overflow:hidden">
                                        <div class="row" style="border-bottom:5px solid #e30613; margin:0;">
                                                <div class="col-md-12 col-autoheight clearfix" >
                                                <img src="img/menu_premium.svg" style="width: 50%; max-width:200px;">
                                            </div>
                                        </div>
                                        <div class="row row-autoheight no-gutters justify-content-left" style="margin:0;">
                                            <div class="col-lg-6 col-6 col-autoheight clearfix" id="menu3" >
                                                <div class="widget-default clearfix">
                                                    <div class="image-wrap mb-4 mt-2">
                                                        <h5><img src="img/menu_mc10_tx.svg" style="width:50%"></h5>
                                                        <figure class="team-box">
                                                            <div class="img-block image-zoom">
                                                                <img src="img/menu/mc10.png" alt="MC10">
                                                            </div>
                                                        </figure>
                                                        <p style="text-decoration: line-through; margin-bottom:0px;">$<span class="_precio_mc10_r"></span></p>
                                                        <h5><b>Desde $<span class="_precio_mc10"></span></b></h5>
                                                        <p><img src="img/msi_credito_black.svg" style="width:100%; max-width:200px;"></p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <a href="mc10" style="background-color: #e30613; border: 1px solid #e30613; color:#fff; border-radius:0px; padding:0 10px; width: 100%; text-align: center; font-size:0.7em; text-transform:none; margin-bottom:5px;">Conócela</a>
                                                            </div>
                                                            <div class="col-12">
                                                                <a href="configurador?m=mc10" data-modelo="mc10" style="border: 1px solid #e30613; color:#000; border-radius:0px; padding:0 10px; width: 100%; text-align: center; font-size:0.7em; text-transform:none; margin-bottom:5px;">Comprar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-6 col-autoheight clearfix" id="menu6" >
                                                <div class="widget-default clearfix">
                                                    <div class="image-wrap mb-4 mt-2">
                                                        <h5><img src="img/menu_ukko_tx.svg" style="width:50%"></h5>
                                                        <figure class="team-box">
                                                            <div class="img-block image-zoom">
                                                                <img src="img/menu/ukko.png" alt="UKKO">
                                                            </div>
                                                        </figure>
                                                        <p style="text-decoration: line-through; margin-bottom:0px;">$<span class="_precio_ukko_r"></span></p>
                                                        <h5><b>Desde $<span class="_precio_ukko"></span></b></h5>
                                                        <p><img src="img/msi_credito_black.svg" style="width:100%; max-width:200px;"></p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <a href="ukko" style="background-color: #e30613; border: 1px solid #e30613; color:#fff; border-radius:0px; padding:0 10px; width: 100%; text-align: center; font-size:0.7em; text-transform:none; margin-bottom:5px;">Conócela</a>
                                                            </div>
                                                            <!--<div class="col-12">
                                                                <a href="configurador?m=mc10" data-modelo="mc10" style="border: 1px solid #e30613; color:#000; border-radius:0px; padding:0 10px; width: 100%; text-align: center; font-size:0.7em; text-transform:none; margin-bottom:5px;">Comprar</a>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center m-0 p-0">
                                    <div class="col-12 text-center m-0 p-0">
                                        <a class="m-0 p-0" href="modelos" style="font-size:0.7em; opacity:0.6; cursor:pointer;">VER TODOS LOS MODELOS</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="store" style="font-weight: bold; font-size:1.1em;"> Store location </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#prueba" style="font-weight: bold; font-size:1.1em;"> Agenda tu prueba de manejo </a>
                        </li>
                        <li class="dropdown right-dropdown" data-animation="fadeIn">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="index.html" data-title="Asistencia" style="font-weight: bold; font-size:1.1em;"> Asistencia Voltika </a>
                            <ul class="dropdown-menu no-border-radius">
                                <li><a href="faq"> FAQ </a></li>
                                <li><a href="servicio"> Servicio y refacciones </a></li>
                                <li><a href="contacto"> Contáctanos </a></li>
                            </ul>
                        </li>
                        <li class="cart-list">
                            <a href="configurador" style="font-weight: bold; font-size:1.1em;"> Configura tu Voltika </a>
                        </li>
                        <!--<li class="dropdown cart-list margin-0-sm">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><span class="hidden-lg-up"> Carrito de compras </span><i class="custom-icon-cart m-marker"></i></a>
                            <div class="dropdown-menu-container">
                                <div class="dropdown-menu no-border-radius col-lg-1 col-md-4 col-sm-4">
                                    <h4> Carrito de compras </h4>
                                    <ul class="s-list no-padding">
                                        <li class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col">
                                                <div class="img">
                                                    <a href="#"><img src="img/img-02.jpg" alt="image description"></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col">
                                                <h6> <a href="#"><strong>Product 1 </strong></a><span class="text-muted float-right"> x 1 </span></h6>
                                                <h6> $199 </h6>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col">
                                                <div class="img">
                                                    <a href="#"><img src="img/img-02.jpg" alt="image description"></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col">
                                                <h6> <a href="#"><strong>Product 2 </strong></a><span class="text-muted float-right"> x 2 </span></h6>
                                                <h6> $199 </h6>
                                            </div>
                                        </li
                                        <li class="divider margin-bottom-1"></li>
                                        <li class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col">
                                                <h2> Total </h2>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col">
                                                <h2 class="text-right"> $0 </h2>
                                            </div>
                                        </li>
                                        <li><a href="#" class="btn btn-sm btn-block btn-secondary btn-mina btn-mina-rip-br"> Ver carrito </a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>>-->
                    </ul>
                </div>
                <div class="navbar-pos-search with-side-panel">
                    <a href="#" class="x-search x-search-trigger navbar-link"><i class="custom-icon-search"></i></a>
                    <a href="#" class="x-search icon-close-round navbar-link"><i class="icon-line-cross"></i></a>
                </div>
                <div class="nav-trigger navbar-pos-search overlay-trigger">
                    <a href="#" class="navbar-link"><i class="icon-sort-1"></i></a>
                </div>
            </nav>
        </div>
    </div>
</header>
';
?>