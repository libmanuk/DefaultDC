<?php
/**
 * DefaultDC
 * 
 * @copyright Copyright 2019 Eric C. Weig 
 * @license http://opensource.org/licenses/MIT MIT
 */
/**
 * The DefaultDC plugin.
 * 
 * @package Omeka\Plugins\DefaultDC
 */
 
    // Define Constants.
    define('DEFAULT_LANG_PAGE_STATEMENT', 'Eng');
 
    class DefaultDCPlugin extends Omeka_Plugin_AbstractPlugin
    {
    
    // Define Hooks
    protected $_hooks = array(
        'install',
        'uninstall',
	'admin_footer',
	'define_routes',
	'config',
        'config_form'
	);
	
    public function hookInstall()
    {
        set_option('default_lang_page_statement', DEFAULT_LANG_PAGE_STATEMENT);
    }
    
    public function hookUninstall()
    {
        delete_option('default_lang_page_statement');
    }
	
    function hookDefineRoutes($args)
    {
    $router = $args['router'];
    }
	
    public function hookConfigForm() 
    {
        include 'config_form.php';
    }
    
    public function hookConfig($args)
    {
        $post = $args['post'];
        set_option('default_lang_page_statement',$post['lang_page_statement']);
    }
    
    public function hookAdminFooter(){

    	<script>
	var state = document.getElementsByTagName("BODY")[0].getAttribute("class");
if ((state = "items") || (state = "items edit")) {
	
        var dcInput44 = document.getElementById("Elements-44-0-text");
        if (dcInput44 && dcInput44.value) {
            console.log("Dublin Core Language field has a value!");
        } else  {
        window.addEventListener('load', function() {
        document.getElementById("Elements-44-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
	
} 

        </script>

    }
}
