
<div class="wrap">

    <h1><?php esc_html_e( 'Grill How Theme Options', 'ls_grillhow' ); ?></h1>
    
    <h3>Manage Options</h3>
<form method="post" action="options.php">
    
    <?php settings_fields( 'theme_options' ); ?>
    
    <p>Customize the default Grill How Color Palette</p>
    <table class="form-table wpex-custom-admin-login-table">

        <tr valign="top">
                <th scope="row"><?php esc_html_e( 'Background Color', 'ls_grillhow' ); ?></th>
        </tr>
        <tr valign="top">
                <td><input type="color" value="#bada55" class="my-color-field" /></td>
                <td><input type="text" value="#bada55" class="my-color-field" /></td>
        </tr>
        
    </table>

    <?php submit_button(); ?>

</form>

</div>