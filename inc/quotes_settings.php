<?php
/* =================================================
    ADMIN PAGE
==================================================== */
    // ===== ADD PAGE
    function setting_adminpage() {
        // PARENT 1/2
        add_menu_page('settings Theme options', 'Quotes Settings', 'manage_options', 'setting_parent_slug', 'setting_parent_page_function', 'dashicons-format-quote', 6);

        // PARENT 2/2:REPETITION
        // PAGE 01
        add_submenu_page('setting_parent_slug', 'settings Theme options', 'Page name 01', 'manage_options', 'setting_parent_slug', 'setting_parent_page_function');


        // Page action 01
        add_action( 'admin_init', 'setting_custom_settings' );
        }
    add_action( 'admin_menu', 'setting_adminpage' );
    // ===== ADD PAGE END
    // page 01 - function
    function setting_parent_page_function() {
        require_once(get_template_directory() . '/inc/settings.php');
        }

// ------------------------- //
    // Page action 01 - function
    function setting_custom_settings() {
        // Section 01
        add_settings_section('setting_general_section', 'Total No. of Quotes', 'setting_general_section_function', 'setting_parent_slug');
            // Register 01
            register_setting('setting_general_group', 'total_quotes');

            // Settings field 01
            add_settings_field('setting_emailid_id', 'Total Quotes', 'setting_emailid_field_function', 'setting_parent_slug', 'setting_general_section');
        }
    // Section 01 - function
    function setting_general_section_function() {
        // nothing here
        }
    // Settings field 01 - function
    function setting_emailid_field_function() {
        // Register 01 - group
        $totalquotes = esc_attr( get_option('total_quotes') );
        // HTML - Input field
        echo '<input type="text" name="total_quotes" value="'.$totalquotes.'" placeholder="Ex: 50 Quotes"/>
        <p class="description"> Total no of Quotes Posted </p>';
        }
// ------------------------- //
