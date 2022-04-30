<section class="contact">

            <div class="container">
            <h1 class="title">Contato</h1>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <i class="bi-phone"></i>
                    <p>Telefone</p>
                    <a href="tel:<?php returnThemeObject('telefone_contato'); ?>"><?php returnThemeObject('telefone_contato'); ?></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <i class="bi-envelope"></i>
                    <p>E-mail</p>
                    <a href="mailto:<?php returnThemeObject('email_contato'); ?>"><?php returnThemeObject('email_contato'); ?></a>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <i class="bi-pin-map"></i>
                    <p>Local</p>
                    <a href="https://maps.google.com/maps/<?php returnThemeObject('endereco_contato'); ?>" target=_blank><?php returnThemeObject('endereco_contato'); ?></a>
                </div>
            </div>

            </div>

            <?php returnThemeObject('iframe_maps'); ?>

        </section>
    </main>
    
    <footer>
        <div class="container">
           IBEF-ES 2022, Todos os direitos reservados.
        </div>
    </footer>
<?php wp_footer(); ?>
<?php get_footer(); ?>
</body>
</html>