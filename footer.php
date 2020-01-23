<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package open-coding-school-theme
 */

?>

</div><!-- #content -->
<footer class="w-100 bg-white flex-shrink-0">
    <div class="w-100 py-2 bg-primary text-center min-h-auto h-auto xs:px-1 xs:mx-0">
        <div class="panel-body py-0 flex w-85 xs:w-90 mx-auto xs:px-1 text-white">
            <div class="text-left text-white my-2 mr-auto text-sm xs:text-xs">
                <p class="m-0 text-xs">© <?php echo date("Y"); ?> Exponent Africa.</p>
            </div>
            <div class="ml-auto my-2 text-right text-sm xs:text-xs">
                <p class="m-0 text-xs">Developed by <a href="https://octangrp.com/" target="_blank"><b>Octan Grp.</b></a>
                </p>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/app.js"></script>


</body>
</html>