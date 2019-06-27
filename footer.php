        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center text-md-left">
                        <a target="_blank" href="https://www.instagram.com/subatomic.rocks" rel="me"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="https://fb.com/subatomic.rocks" rel="me"><i class="fa fa-facebook-square"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/company/subatomic-rocks/" rel="me"><i class="fa fa-linkedin-square"></i></a>
                    </div>
                    <div class="col-md-4 text-center text-md-center">Made with <span class="heart"><i class="fa fa-heart"></i></span> in SP.</div>
                    <div class="col-md-4 text-center text-md-right">&copy; 2018 Subatomic</div>
                </div>
            </div>
        </footer>
    </main>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Scripts do site -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.mobile.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
    <script>
    // Inicia o WOW.js apenas quando começar a ter scroll na página, favorecendo o SEO
    $(window).on('scroll', () => {
        window.hasWowInit = (!window.hasWowInit && (new WOW().init()) || true);
    });
    </script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,500,700,900" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <?php wp_footer(); ?>
</body>
</html>