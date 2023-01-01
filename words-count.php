<?php 
    /*
        Plugin Name: Words Count Analytics
        Description: Words Count Analytics Plugin
        Version: 1.0
        Author: Nafis Mahmud Ayon
        Author URI: https://nafisbd.com
    */

    add_filter('the_content', 'addToEndOfPost');

    function addToEndOfPost($content) {
        if (is_single() && is_main_query()) {
            return $content . '<p>Hello to this plugin</p>';
        }

        return $content;
    }

    class WordsCountAnalyticsPlugin {

        function __construct() {
            add_action('admin_menu', array($this, 'adminPage'));
        }

        function adminPage() {
            add_options_page('Words Count Analytics', 'Words Count', 'manage_options', 'words-count-setting', array($this, 'ourHTML'));
        }
    
        function ourHTML() { ?>
        <h1>Hello World!</h1>
        <?php }
    }
    
    $wordsCountAnalyticsPlugin = new WordsCountAnalyticsPlugin();
    

    

?>