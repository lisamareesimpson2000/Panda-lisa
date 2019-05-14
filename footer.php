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

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCd8tqCdBxVYNB3t9EQK1r1HsNpn5dTMUo&callback=initMap"
    async defer></script> -->
</body>
</html>