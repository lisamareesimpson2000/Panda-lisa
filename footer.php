<?php 
/*wp_footer(); */?>


<div class="container">

<?php
if ( has_nav_menu( 'header_menu' ) ) {
    wp_nav_menu(array(
        'theme_location' => 'footer_menu',
        'container_class'=> 'my_footer_class'
     ));
} ?> 

    <?php 
    
    
    ?>


</div>
<?php wp_footer(); ?>
<!-- <p>This is from footer.php</p> -->
</body>
</html>