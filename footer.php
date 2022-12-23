 <?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyright']
 ?>


 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo $options['copyright']; ?></p>
                </div>
            </div>
        </div>
    </footer>

        
<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow-animate.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib.js"></script>
    <script type="text/javascript">
        $(document).on('ready', function () {




            wow = new WOW({
                animateClass: 'animated',
                offset: 100,
                callback: function (box) {
                    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
            });

            wow.init();


        });
    </script>

</body>
</html>