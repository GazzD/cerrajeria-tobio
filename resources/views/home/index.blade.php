@extends('layouts.master')

@section('content')

<!-- About Section -->
<div id="about" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Empresa</h2>
                <h3 class="title-description">Learn About our Team &amp; Culture.</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- People -->
    <div class="row">
    	
        <!-- Start Profile -->
    	<div class="span12 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">CTO/Founder</span>
                </div>
                <img src="{!! asset('img/profile/profile-01.jpg') !!}" alt="John Doe">
            </div>
            <h3 class="profile-name">Cerrajería Tobio</h3>
            <p class="profile-description">Fundada hace más de 40 años, <strong>Cerrajería Tobío</strong> nace de la tradición del hierro forjado.<br>
              <br>
La incorporación de nuevas técnicas y avances en la producción de pequeñas estructuras metálicas, puertas, balcones, escaleras, pasamanos, etc. nos han permitido, en <strong>Cerrajería Tobío</strong>, abarcar todo tipo de trabajos, ampliando nuestra oferta mediante la incorporación del acero inoxidable y el aluminio soldado.<br>
<br>
Nuestro compromiso es ofrecer a nuestros clientes la máxima calidad  y  confianza en cada uno de los trabajos, aportando <strong>soluciones a su medida</strong></p>
            	
            <div class="social">
            	<ul class="social-icons">
                	<li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-dribbble"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Profile -->
    </div>
    <!-- End People -->
</div>
</div>
<!-- End About Section -->

<!-- Our Work Section -->
<div id="work" class="page-alternate">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Productos</h2>
                    <h3 class="title-description">Mira nuestros trabajos que tenemos disponibles <a href="#">Dribbble</a>.</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
        <!-- Portfolio Projects -->
        <div class="row">
        	<div class="span3">
            	<!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                    	<li class="type-work">Tipos de trabajos</li>
<!--                         <li><a href="#filter" data-option-value="*" class="selected">Todos</a></li> -->
                        <li><a href="#filter" data-option-value=".closes" class="selected">Cierres</a></li>
                        <li><a href="#filter" data-option-value=".portals">Portales</a></li>
                        <li><a href="#filter" data-option-value=".front-doors">Puertas de entrada</a></li>
                        <li><a href="#filter" data-option-value=".banister">Pasamanos</a></li>
                        <li><a href="#filter" data-option-value=".balconies">Balcones</a></li>
                        <li><a href="#filter" data-option-value=".section-doors">Puertas seccionales</a></li>
                        <li><a href="#filter" data-option-value=".automatism">Automatismos</a></li>
                        <li><a href="#filter" data-option-value=".others">Varios</a></li>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>
            
            <div class="span9">
            	<div class="row">
                	<section id="projects">
                    	<ul id="thumbs">
                        
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 closes">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/cierres1.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/cierres1_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 closes">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/cierres2.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/cierres2_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 closes">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/cierres3.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/cierres3_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 closes">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/cierres4.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/cierres4_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 closes">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/cierres5.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/cierres5_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 closes">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/cierres6.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/cierres6_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 closes">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/cierres7.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/cierres7_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/portales_1.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/portales_1_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/portales_2.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/portales_2_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/portales_3.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/portales_3_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/portales_4.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/portales_4_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/portales_5.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/portales_5_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/portales_6.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/portales_6_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/portales_7.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/portales_7_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/portales_8.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/portales_8_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/portales_9.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/portales_9_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/portales_10.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/portales_10_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/portales_11.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/portales_11_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/portales_12.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/portales_12_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="{!! asset('img/productos/portales_13.jpg') !!}">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{!! asset('img/productos/portales_13_th.jpg') !!}" alt="Cierres 1.">
                            </li>
                        	<!-- End Item Project -->
                        </ul>
                    </section>
                    
            	</div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- Contact Section -->
<div id="contact" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Contacto</h2>
                <h3 class="title-description">¡Pida presupuesto sin compromiso!</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- Contact Form -->
    <div class="row">
    	<div class="span9">
        
        	<form id="contact-form" class="contact-form" action="#">
            	<p class="contact-name">
            		<input id="contact_name" type="text" placeholder="Nombre" value="" name="name" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Correo electr&oacute;nico" value="" name="email" />
                </p>
                <p class="contact-message">
                	<textarea id="contact_message" placeholder="Mensaje" name="message" rows="15" cols="40"></textarea>
                </p>
                <p class="contact-submit">
                	<a id="contact-submit" class="submit" href="#">Contáctanos</a>
                </p>
                
                <div id="response">
                
                </div>
            </form>
         
        </div>
        
        <div class="span3">
        	<div class="contact-details">
        		<h3>Dirección de contacto</h3>
                <ul>
                    <li><a href="mailto:info@cerrajeriatobio.com">info@cerrajeriatobio.com</a></li>
                    <li>Tel&eacute;fono 375-2525</li>
                    <li>M&oacute;vil 666 407 735 </li>
                    <li>
                    	O Vao 45 | Ctra. Vilagarcía, Poio 
                        <br>
                         36163 Pontevedra.
                        <br>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->



<!-- Twitter Feed -->
<div id="twitter-feed" class="page-alternate">
	<div class="container">
    	<div class="row">
            <div class="span12">
               Hola
                <div id="ticker" class="query"> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Twitter Feed -->

@endsection