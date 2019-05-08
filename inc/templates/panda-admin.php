<h1>Panda Theme Options</h1>
<h3 class="title">Manage Options</h3>
<p>Customize Sidebar Options</p>

<!-- register_settings in function-admin.php -->
<!-- post won't show up everything on the url -->
<form method="post" action="">
    <?php settings_fields('panda-settings-group'); //line 33 in function-admin.php
    ?>

    <!-- do_settings_sections('$page'); -->
    <?php do_settings_sections('panda_page'); ?>
    <?php submit_button(); ?>
</form>