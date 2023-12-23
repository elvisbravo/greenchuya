<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- main slider start -->
<section class="main-slider five">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="banner-style">
                    
                    <h1 class="banner-title"><span>Contáctanos</span></h1>
                    <p style="font-size: 24px;"><span style="color: #00ff39;">Green</span> <span>Chuya</span> Limpieza que protege.
                    </p>
                    <p style="font-size: 24px;">#Seguro</p>
                    <p style="font-size: 24px;">#Saludable</p>
                    <p style="font-size: 24px;">#Confiable</p>
                    <p style="font-size: 24px;">#Responsable socialmente</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="slider_banner-image">
                    <img src="public/web/images/background/banner_contacto.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="slider_banner-four">
        <img src="public/web/images/main-slider/bg-slider-shape-2.png" alt="">
    </div>
</section>
<!-- main slider end -->

<!-- our team today section -->
<section class="team-member three" style="margin-top:68px; margin-bottom:152px">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-5 col-md-6 col-sm-12 left-column" style="padding-right: 0px;">
                
                <h2>Póngase en contacto con Green Chuya</h2>
                <p class="font-size: 24px">Si tienes alguna pregunta, inquietud o simplemente deseas comunicarte con nosotros, no dudes en hacerlo a través de este formulario. Completa los campos a continuación y nos pondremos en contacto contigo a la mayor brevedad posible.
                </p>
                <div class="image-box">
                    <img src="public/web/images/gallery/contact-banner-img.png" alt="">
                </div>
            </div>
            <div class="offset-lg-1 col-lg-6 col-md-12 col-sm-12 from-column">
                <div class="touch-items contact">
                    <div class="touch-items_contents">
                        <div class="contact-form">
                            <form method="post" id="contact-form">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Nombre:</label>
                                        <input type="text" name="form_name" value="" placeholder="Nombre" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email:</label>
                                        <input type="text" name="email" value="" placeholder="correo electrónico" required>
                                    </div>
                                </div>
                                <div class="row clearfix">
                    
                                    <div class="form-group col-md-12">
                                        <label>Mensaje :</label>
                                        <textarea name="form_message" placeholder="Escribe un mensaje"></textarea>
                                    </div>
                                    <div id="alerta_envio" class="form-group">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait...">Enviar Mensaje</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our team today section end-->

<!-- Get In Touch section start -->
<section class="location-section">
    <div class="map-inner_two">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d651.9687345933552!2d-76.38135441341029!3d-6.492300233957837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ba0bd8d38f5855%3A0xca4fb923b6e04262!2sGreen%20Chuya!5e0!3m2!1ses-419!2spe!4v1697038322211!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- Get In Touch section end -->

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="public/js/contact.js?t=<?php echo time(); ?>"></script>
<?= $this->endSection() ?>