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

    define('DEFAULT_LANGUAGE_PAGE_STATEMENT', '');
    define('DEFAULT_PUBLISHER_PAGE_STATEMENT', '');
    define('DEFAULT_TITLE_PAGE_STATEMENT', '');
    define('DEFAULT_CREATOR_PAGE_STATEMENT', '');
    define('DEFAULT_CONTRIBUTOR_PAGE_STATEMENT', '');
    define('DEFAULT_DESCRIPTION_PAGE_STATEMENT', '');
    define('DEFAULT_TYPE_PAGE_STATEMENT', '');
    define('DEFAULT_FORMAT_PAGE_STATEMENT', '');
    define('DEFAULT_IDENTIFIER_PAGE_STATEMENT', '');
    define('DEFAULT_COVERAGE_PAGE_STATEMENT', '');
    define('DEFAULT_SUBJECT_PAGE_STATEMENT', '');
    define('DEFAULT_DATE_PAGE_STATEMENT', '');
    define('DEFAULT_SOURCE_PAGE_STATEMENT', '');
    define('DEFAULT_RELATION_PAGE_STATEMENT', '');
    define('DEFAULT_RIGHTS_PAGE_STATEMENT', '');
 
    class DefaultDCPlugin extends Omeka_Plugin_AbstractPlugin
    {
    
    // Define Hooks
	    
    protected $_hooks = array(
        'install',
        'uninstall',
	'admin_footer',
	'define_routes',
	'config',
        'config_form',
	'admin_head'
	);
	    
    // protected $_filters = array('admin_navigation_main');
	
    public function hookInstall()
    {
        set_option('default_language_page_statement', DEFAULT_LANGUAGE_PAGE_STATEMENT);
        set_option('default_publisher_page_statement', DEFAULT_PUBLISHER_PAGE_STATEMENT);
        set_option('default_title_page_statement', DEFAULT_TITLE_PAGE_STATEMENT);
        set_option('default_creator_page_statement', DEFAULT_CREATOR_PAGE_STATEMENT);
        set_option('default_contributor_page_statement', DEFAULT_CONTRIBUTOR_PAGE_STATEMENT);
        set_option('default_description_page_statement', DEFAULT_DESCRIPTION_PAGE_STATEMENT);
        set_option('default_type_page_statement', DEFAULT_TYPE_PAGE_STATEMENT);
        set_option('default_format_page_statement', DEFAULT_FORMAT_PAGE_STATEMENT);
        set_option('default_identifier_page_statement', DEFAULT_IDENTIFIER_PAGE_STATEMENT);
        set_option('default_coverage_page_statement', DEFAULT_COVERAGE_PAGE_STATEMENT);
        set_option('default_subject_page_statement', DEFAULT_SUBJECT_PAGE_STATEMENT);
        set_option('default_date_page_statement', DEFAULT_DATE_PAGE_STATEMENT);
        set_option('default_source_page_statement', DEFAULT_SOURCE_PAGE_STATEMENT);
        set_option('default_relation_page_statement', DEFAULT_RELATION_PAGE_STATEMENT);
        set_option('default_rights_page_statement', DEFAULT_RIGHTS_PAGE_STATEMENT);
    }
    
    public function hookUninstall()
    {
        delete_option('default_language_page_statement');
        delete_option('default_publisher_page_statement');
        delete_option('default_title_page_statement');
        delete_option('default_creator_page_statement');
        delete_option('default_contributor_page_statement');
        delete_option('default_description_page_statement');
        delete_option('default_type_page_statement');
        delete_option('default_format_page_statement');
        delete_option('default_identifier_page_statement');
        delete_option('default_coverage_page_statement');
        delete_option('default_subject_page_statement');
        delete_option('default_date_page_statement');
        delete_option('default_source_page_statement');
        delete_option('default_relation_page_statement');
        delete_option('default_rights_page_statement');
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
        set_option('default_language_page_statement',$post['language_page_statement']);
        set_option('default_publisher_page_statement',$post['publisher_page_statement']);
        set_option('default_title_page_statement',$post['title_page_statement']);
        set_option('default_creator_page_statement',$post['creator_page_statement']);
        set_option('default_contributor_page_statement',$post['contributor_page_statement']);
        set_option('default_description_page_statement',$post['description_page_statement']);
        set_option('default_type_page_statement',$post['type_page_statement']);
        set_option('default_format_page_statement',$post['format_page_statement']);
        set_option('default_identifier_page_statement',$post['identifier_page_statement']);
        set_option('default_coverage_page_statement',$post['coverage_page_statement']);
        set_option('default_subject_page_statement',$post['subject_page_statement']);
        set_option('default_date_page_statement',$post['date_page_statement']);
        set_option('default_source_page_statement',$post['source_page_statement']);
        set_option('default_relation_page_statement',$post['relation_page_statement']);
        set_option('default_rights_page_statement',$post['rights_page_statement']);
    }
    
    public function hookAdminFooter(){
	$request = Zend_Controller_Front::getInstance()->getRequest();
        $controller = $request->getControllerName();
        $action = $request->getActionName();
	if (($controller == 'items' && ($action == 'edit' || $action == 'add'))) {	
    
	?>
    <script>
        var dcInput44 = document.getElementById("Elements-44-0-text");
        var dcInput50 = document.getElementById("Elements-50-0-text");
        var dcInput40 = document.getElementById("Elements-40-0-text");
        var dcInput48 = document.getElementById("Elements-48-0-text");
        var dcInput38 = document.getElementById("Elements-38-0-text");
        var dcInput46 = document.getElementById("Elements-46-0-text");
        var dcInput47 = document.getElementById("Elements-47-0-text");
        var dcInput42 = document.getElementById("Elements-42-0-text");
        var dcInput43 = document.getElementById("Elements-43-0-text");
        var dcInput51 = document.getElementById("Elements-51-0-text");
        var dcInput45 = document.getElementById("Elements-45-0-text");
        var dcInput37 = document.getElementById("Elements-37-0-text");
        var dcInput39 = document.getElementById("Elements-39-0-text");
        var dcInput41 = document.getElementById("Elements-41-0-text");
        var dcInput49 = document.getElementById("Elements-49-0-text");
		
		if (dcInput44 && dcInput44.value) {
            console.log("Dublin Core Language field has a value!");
	    } else {
			<?php $dclanguage = get_option('default_language_page_statement');
			if($this->isHTML($dclanguage)) {
				$dclanguage = addslashes(get_option('default_language_page_statement')); 
				$dclanguage = trim(preg_replace('/\s\s+/', '', $dclanguage));	
			}?>
	        var dclanguage = "<?php echo $dclanguage; // HTML ?>";
	        if (!dclanguage) { console.log("Dublin Core Language field has no default!"); 
	        } else if (dclanguage) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dclanguage)) : ?> //check the box if it is html
					document.getElementById("Elements-44-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-44-0-text").value = "<?php echo $dclanguage ?>";
                });
				}
			} 
		
	    if (dcInput50 && dcInput50.value) {
            console.log("Dublin Core Title has a value!");
            } else {
			<?php $dctitle = get_option('default_title_page_statement');
			if($this->isHTML($dctitle)) {
				$dctitle = addslashes(get_option('default_title_page_statement')); 
				$dctitle = trim(preg_replace('/\s\s+/', '', $dctitle));	
			}?>
            var dctitle = "<?php echo $dctitle; // HTML ?>";
	        if (!dctitle) { console.log("Dublin Core Title field has no default!"); 
	        } else if (dctitle) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dctitle)) : ?> //check the box if it is html
					document.getElementById("Elements-50-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-50-0-text").value = "<?php echo $dctitle; // HTML ?>";
                });
				}
            }
			
	    if (dcInput40 && dcInput40.value) {
            console.log("Dublin Core Date has a value!");
            } else {
			<?php $dcdate = get_option('default_date_page_statement');
			if($this->isHTML($dcdate)) {
				$dcdate = addslashes(get_option('default_date_page_statement')); 
				$dcdate = trim(preg_replace('/\s\s+/', '', $dcdate));	
			}?>
            var dcdate = "<?php echo $dcdate; // HTML ?>";
	        if (!dcdate) { console.log("Dublin Core Date field has no default!"); 
	        } else if (dcdate) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dcdate)) : ?> //check the box if it is html
					document.getElementById("Elements-40-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-40-0-text").value = "<?php echo $dcdate; // HTML ?>";
                });
				}
            }
		
	    if (dcInput48 && dcInput48.value) {
            console.log("Dublin Core Source has a value!");
            } else {
			<?php $dcsource = get_option('default_source_page_statement');
			if($this->isHTML($dcsource)) {
				$dcsource = addslashes(get_option('default_source_page_statement')); 
				$dcsource = trim(preg_replace('/\s\s+/', '', $dcsource));	
			}?>
            var dcsource = "<?php echo $dcsource; // HTML ?>";
	        if (!dcsource) { console.log("Dublin Core Source field has no default!"); 
	        } else if (dcsource) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dcsource)) : ?> //check the box if it is html
					document.getElementById("Elements-48-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-48-0-text").value = "<?php echo $dcsource; // HTML ?>";
                });
				}
            }
	
        if (dcInput38 && dcInput38.value) {
            console.log("Dublin Core Coverage has a value!");
            } else {
			<?php $dccoverage = get_option('default_coverage_page_statement');
			if($this->isHTML($dccoverage)) {
				$dccoverage = addslashes(get_option('default_coverage_page_statement')); 
				$dccoverage = trim(preg_replace('/\s\s+/', '', $dccoverage));	
			}?>
            var dccoverage = "<?php echo $dccoverage; // HTML ?>";
	        if (!dccoverage) { console.log("Dublin Core Coverage field has no default!"); 
	        } else if (dccoverage) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dccoverage)) : ?> //check the box if it is html
					document.getElementById("Elements-38-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-38-0-text").value = "<?php echo $dccoverage; // HTML ?>";
                });
				}
            }
	
        if (dcInput46 && dcInput46.value) {
            console.log("Dublin Core Relation has a value!");
            } else {
			<?php $dcrelation = get_option('default_relation_page_statement');
			if($this->isHTML($dcrelation)) {
				$dcrelation = addslashes(get_option('default_relation_page_statement')); 
				$dcrelation = trim(preg_replace('/\s\s+/', '', $dcrelation));	
			}?>
            var dcrelation = "<?php echo $dcrelation; // HTML ?>";
	        if (!dcrelation) { console.log("Dublin Core Relation field has no default!"); 
	        } else if (dcrelation) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dcrelation)) : ?> //check the box if it is html
					document.getElementById("Elements-46-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-46-0-text").value = "<?php echo $dcrelation; // HTML ?>";
                });
				}
            }
	
	    if (dcInput47 && dcInput47.value) {
            console.log("Dublin Core Rights has a value!");
	    } else {
			<?php $dcrights = get_option('default_rights_page_statement');
			if($this->isHTML($dcrights)) {
				$dcrights = addslashes(get_option('default_rights_page_statement')); 
				$dcrights = trim(preg_replace('/\s\s+/', '', $dcrights));	
			}?>
            var dcrights = "<?php echo $dcrights; ?>";
	        if (!dcrights) { console.log("Dublin Core Rights field has no default!"); 
	        } else if (dcrights) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dcrights)) : ?> //check the box if it is html
					document.getElementById("Elements-47-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-47-0-text").value = "<?php echo $dcrights; // HTML ?>";
                });
            }
	    }
	
        if (dcInput42 && dcInput42.value) {
            console.log("Dublin Core Format has a value!");
            } else {
			<?php $dcformat = get_option('default_format_page_statement');
			if($this->isHTML($dcformat)) {
				$dcformat = addslashes(get_option('default_format_page_statement')); 
				$dcformat = trim(preg_replace('/\s\s+/', '', $dcformat));	
			}?>
            var dcformat = "<?php echo $dcformat; // HTML ?>";
	        if (!dcformat) { console.log("Dublin Core Format field has no default!"); 
	        } else if (dcformat) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dcformat)) : ?> //check the box if it is html
					document.getElementById("Elements-42-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-42-0-text").value = "<?php echo $dcformat; // HTML ?>";
                });
				}
            }
	    
	    if (dcInput43 && dcInput43.value) {
            console.log("Dublin Core Identifier has a value!");
            } else {
			<?php $dcidentifier = get_option('default_identifier_page_statement');
			if($this->isHTML($dcidentifier)) {
				$dcidentifier = addslashes(get_option('default_identifier_page_statement')); 
				$dcidentifier = trim(preg_replace('/\s\s+/', '', $dcidentifier));	
			}?>
            var dcidentifier = "<?php echo $dcidentifier; // HTML ?>";
	        if (!dcidentifier) { console.log("Dublin Core Identifier field has no default!"); 
	        } else if (dcidentifier) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dcidentifier)) : ?> //check the box if it is html
					document.getElementById("Elements-43-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-43-0-text").value = "<?php echo $dcidentifier; // HTML ?>";
                });
				}
            }
	
        if (dcInput51 && dcInput51.value) {
            console.log("Dublin Core Type has a value!");
            } else {
			<?php $dctype = get_option('default_type_page_statement');
			if($this->isHTML($dctype)) {
				$dctype = addslashes(get_option('default_type_page_statement')); 
				$dctype = trim(preg_replace('/\s\s+/', '', $dctype));	
			}?>
            var dctype = "<?php echo $dctype; // HTML ?>";
	        if (!dctype) { console.log("Dublin Core Type field has no default!"); 
	        } else if (dctype) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dctype)) : ?> //check the box if it is html
					document.getElementById("Elements-51-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-51-0-text").value = "<?php echo $dctype; // HTML ?>";
                });
				}
			}
	
        if (dcInput45 && dcInput45.value) {
            console.log("Dublin Core Publisher has a value!");
            } else {
			<?php $dcpublisher = get_option('default_publisher_page_statement');
			if($this->isHTML($dcpublisher)) {
				$dcpublisher = addslashes(get_option('default_publisher_page_statement')); 
				$dcpublisher = trim(preg_replace('/\s\s+/', '', $dcpublisher));	
			}?>
            var dcpublisher = "<?php echo $dcpublisher; // HTML ?>";
	        if (!dcpublisher) { console.log("Dublin Core Publisher field has no default!"); 
	        } else if (dcpublisher) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dcpublisher)) : ?> //check the box if it is html
					document.getElementById("Elements-45-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-45-0-text").value = "<?php echo $dcpublisher; // HTML ?>";
                });
				}
            }
	
        if (dcInput37 && dcInput37.value) {
            console.log("Dublin Core Contributor has a value!");
            } else {
			<?php $dccontributor = get_option('default_contributor_page_statement');
			if($this->isHTML($dccontributor)) {
				$dccontributor = addslashes(get_option('default_contributor_page_statement')); 
				$dccontributor = trim(preg_replace('/\s\s+/', '', $dccontributor));	
			}?>
            var dccontributor = "<?php echo $dccontributor; // HTML ?>";
	        if (!dccontributor) { console.log("Dublin Core Contributor field has no default!"); 
	        } else if (dccontributor) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dccontributor)) : ?> //check the box if it is html
					document.getElementById("Elements-37-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-37-0-text").value = "<?php echo $dccontributor; // HTML ?>";
                });
				}
            }
	
        if (dcInput39 && dcInput39.value) {
            console.log("Dublin Core Creator has a value!");
            } else {
			<?php $dccreator = get_option('default_creator_page_statement');
			if($this->isHTML($dccreator)) {
				$dccreator = addslashes(get_option('default_creator_page_statement')); 
				$dccreator = trim(preg_replace('/\s\s+/', '', $dccreator));	
			}?>
            var dccreator = "<?php echo $dccreator; // HTML ?>";
	        if (!dccreator) { console.log("Dublin Core Creator field has no default!"); 
	        } else if (dccreator) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dccreator)) : ?> //check the box if it is html
					document.getElementById("Elements-39-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-39-0-text").value = "<?php echo $dccreator; // HTML ?>";
                });
				}
            }
	
        if (dcInput41 && dcInput41.value) {
            console.log("Dublin Core Description has a value!");
            } else {
			<?php $dcdescription = get_option('default_description_page_statement');
			if($this->isHTML($dcdescription)) {
				$dcdescription = addslashes(get_option('default_description_page_statement')); 
				$dcdescription = trim(preg_replace('/\s\s+/', '', $dcdescription));	
			}?>
            var dcdescription = "<?php echo $dcdescription; // HTML ?>";
	        if (!dcdescription) { console.log("Dublin Core Description field has no default!"); 
	        } else if (dcdescription) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dcdescription)) : ?> //check the box if it is html
					document.getElementById("Elements-41-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-41-0-text").value = "<?php echo $dcdescription; // HTML ?>";
                });
				}
            }
	
        if (dcInput49 && dcInput49.value) {
            console.log("Dublin Core Subject has a value!");
            } else {
			<?php $dcsubject = get_option('default_subject_page_statement');
			if($this->isHTML($dcsubject)) {
				$dcsubject = addslashes(get_option('default_subject_page_statement')); 
				$dcsubject = trim(preg_replace('/\s\s+/', '', $dcsubject));	
			}?>
            var dcsubject = "<?php echo $dcsubject; // HTML ?>";
	        if (!dcsubject) { console.log("Dublin Core Subject field has no default!"); 
	        } else if (dcsubject) {
                window.addEventListener('load', function() {
				<?php if($this->isHTML($dcsubject)) : ?> //check the box if it is html
					document.getElementById("Elements-49-0-html").checked = true;
					Omeka.Elements.enableWysiwyg(document);
				<?php endif;?>
                document.getElementById("Elements-49-0-text").value = "<?php echo $dcsubject; // HTML ?>";
                });
				}
            }
	
        </script>
        <?php
	}
    }
	public function hookAdminHead($args)
    {
		queue_js_file('vendor/tinymce/tinymce.min');
    }
	/**
     * @param string $string
     * @return boolean
     */
	protected function isHTML($string) 
	{
		if($string != strip_tags($string)) {
			return true;
		} else {
			return false;
		}
	}
	 /**
     * Add the Default DC navigation link.
     
    public function filterAdminNavigationMain($nav)
    {
        $nav[] = array(
            'label' => __('Default DC'),
            'uri' => url('default-dc')
        );
        return $nav;
    }*/
}
