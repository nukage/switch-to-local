<?php
/**
 * Plugin Name: Switch Local/Staging
 * Description: A plugin to switch between local and staging URLs.
 * Version: 1.0
 * Author: Your Name
 */

// Step 1: Create the options page
function sls_add_admin_menu() {
    add_options_page('Switch Local/Staging', 'Switch Local/Staging', 'manage_options', 'switch_local_staging', 'sls_options_page');
}
add_action('admin_menu', 'sls_add_admin_menu');

function sls_options_page() {
    ?>
    <div class="wrap">
        <h1>Switch Local/Staging Settings</h1>
        <p>Enter the base URLs for your local and staging environments. Make sure to include the protocol (http:// or https://) and exclude any trailing slashes.</p>
        <form method="post" action="options.php">
            <?php
            settings_fields('sls_options_group');
            do_settings_sections('sls_options_group');
            $local_url = get_option('sls_local_url');
            $staging_url = get_option('sls_staging_url');
            ?>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="sls_local_url">Local URL:</label>
                    </th>
                    <td>
                        <input type="url" 
                               id="sls_local_url" 
                               name="sls_local_url" 
                               value="<?php echo esc_attr($local_url); ?>" 
                               class="regular-text"
                               placeholder="https://example.local"
                        />
                        <p class="description">Example: http://mysite.local or http://localhost/mysite</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="sls_staging_url">Staging URL:</label>
                    </th>
                    <td>
                        <input type="url" 
                               id="sls_staging_url" 
                               name="sls_staging_url" 
                               value="<?php echo esc_attr($staging_url); ?>" 
                               class="regular-text"
                               placeholder="https://staging.example.com"
                        />
                        <p class="description">Example: https://staging.mysite.com or https://mysite.staging.com</p>
                    </td>
                </tr>
            </table>
            <?php submit_button('Save Settings'); ?>
        </form>
    </div>
    <?php
}

// Step 2: Register settings
function sls_register_settings() {
    register_setting('sls_options_group', 'sls_local_url');
    register_setting('sls_options_group', 'sls_staging_url');
}
add_action('admin_init', 'sls_register_settings');

// Step 3: Add the button to the admin toolbar
function sls_admin_toolbar($admin_bar) {
    $local_url = get_option('sls_local_url');
    $staging_url = get_option('sls_staging_url');
    $current_url = home_url();

    if (strpos($current_url, $local_url) !== false) {
        $admin_bar->add_node(array(
            'id' => 'switch-to-staging',
            'title' => 'Switch to Staging',
            'href' => $staging_url . $_SERVER['REQUEST_URI'],
            'meta' => array('title' => 'Switch to Staging Site')
        ));
    } elseif (strpos($current_url, $staging_url) !== false) {
        $admin_bar->add_node(array(
            'id' => 'switch-to-local',
            'title' => 'Switch to Local',
            'href' => $local_url . $_SERVER['REQUEST_URI'],
            'meta' => array('title' => 'Switch to Local Site')
        ));
    }
}
add_action('admin_bar_menu', 'sls_admin_toolbar', 100);