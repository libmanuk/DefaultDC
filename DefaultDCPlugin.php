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
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
        if ((strpos($actual_link, '/items/edit/') !== false) | (strpos($actual_link, '/items/add') !== false)) {
    	?>
    	<script>
        var myInput = document.getElementById("Elements-44-0-text");
        if (myInput && myInput.value) {
            console.log("My input has a value!");
        } else  {
        window.addEventListener('load', function() {
        document.getElementById("Elements-44-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
        </script>
        <?php
        } elseif ((strpos($actual_link, '/items/edit/') == false) | (strpos($actual_link, '/items/add') == false)) {
        //do nothing
        }    
    }
}
