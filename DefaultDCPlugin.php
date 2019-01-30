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
    define('DEFAULT_LANG_PAGE_STATEMENT', '');
    define('DEFAULT_PUBLISHER_PAGE_STATEMENT', '');
    define('DEFAULT_TITLE_PAGE_STATEMENT', '');
    define('DEFAULT_CREATOR_PAGE_STATEMENT', '');
    define('DEFAULT_CONTRIBUTOR_PAGE_STATEMENT', '');
    define('DEFAULT_DESCRIPTION_PAGE_STATEMENT', '');
    define('DEFAULT_TYPE_PAGE_STATEMENT', '');
    define('DEFAULT_FORMAT_PAGE_STATEMENT', '');
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
        'config_form'
	);
	
    public function hookInstall()<?php<?php<?php
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
    define('DEFAULT_LANG_PAGE_STATEMENT', '');
    define('DEFAULT_PUBLISHER_PAGE_STATEMENT', '');
    define('DEFAULT_TITLE_PAGE_STATEMENT', '');
    define('DEFAULT_CREATOR_PAGE_STATEMENT', '');
    define('DEFAULT_CONTRIBUTOR_PAGE_STATEMENT', '');
    define('DEFAULT_DESCRIPTION_PAGE_STATEMENT', '');
    define('DEFAULT_TYPE_PAGE_STATEMENT', '');
    define('DEFAULT_FORMAT_PAGE_STATEMENT', '');
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
        'config_form'
	);
	
    public function hookInstall()
    {
        set_option('default_lang_page_statement', DEFAULT_LANG_PAGE_STATEMENT);
        set_option('default_publisher_page_statement', DEFAULT_PUBLISHER_PAGE_STATEMENT);
        set_option('default_title_page_statement', DEFAULT_TITLE_PAGE_STATEMENT);
        set_option('default_creator_page_statement', DEFAULT_CREATOR_PAGE_STATEMENT);
        set_option('default_contributor_page_statement', DEFAULT_CONTRIBUTOR_PAGE_STATEMENT);
        set_option('default_description_page_statement', DEFAULT_DESCRIPTION_PAGE_STATEMENT);
        set_option('default_type_page_statement', DEFAULT_TYPE_PAGE_STATEMENT);
        set_option('default_format_page_statement', DEFAULT_FORMAT_PAGE_STATEMENT);
        set_option('default_coverage_page_statement', DEFAULT_COVERAGE_PAGE_STATEMENT);
        set_option('default_subject_page_statement', DEFAULT_SUBJECT_PAGE_STATEMENT);
        set_option('default_date_page_statement', DEFAULT_DATE_PAGE_STATEMENT);
        set_option('default_source_page_statement', DEFAULT_SOURCE_PAGE_STATEMENT);
        set_option('default_relation_page_statement', DEFAULT_RELATION_PAGE_STATEMENT);
        set_option('default_rights_page_statement', DEFAULT_RIGHTS_PAGE_STATEMENT);
    }
    
    public function hookUninstall()
    {
        delete_option('default_lang_page_statement');
        delete_option('default_publisher_page_statement');
        delete_option('default_title_page_statement');
        delete_option('default_creator_page_statement');
        delete_option('default_contributor_page_statement');
        delete_option('default_description_page_statement');
        delete_option('default_type_page_statement');
        delete_option('default_format_page_statement');
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
        set_option('default_lang_page_statement',$post['lang_page_statement']);
        set_option('default_publisher_page_statement',$post['publisher_page_statement']);
        set_option('default_title_page_statement',$post['title_page_statement']);
        set_option('default_creator_page_statement',$post['creator_page_statement']);
        set_option('default_contributor_page_statement',$post['contributor_page_statement']);
        set_option('default_description_page_statement',$post['description_page_statement']);
        set_option('default_type_page_statement',$post['type_page_statement']);
        set_option('default_format_page_statement',$post['format_page_statement']);
        set_option('default_coverage_page_statement',$post['coverage_page_statement']);
        set_option('default_subject_page_statement',$post['subject_page_statement']);
        set_option('default_date_page_statement',$post['date_page_statement']);
        set_option('default_source_page_statement',$post['source_page_statement']);
        set_option('default_relation_page_statement',$post['relation_page_statement']);
        set_option('default_rights_page_statement',$post['rights_page_statement']);
    }
    
    public function hookAdminFooter(){
    ?>
    <script>
	var state = document.getElementsByTagName("BODY")[0].getAttribute("class");
        if ((state == "items") || (state == "items edit")) {	
        var dcInput44 = document.getElementById("Elements-44-0-text");
        var dcInput50 = document.getElementById("Elements-50-0-text");
        var dcInput40 = document.getElementById("Elements-40-0-text");
        var dcInput48 = document.getElementById("Elements-48-0-text");
        var dcInput38 = document.getElementById("Elements-38-0-text");
        var dcInput46 = document.getElementById("Elements-46-0-text");
        var dcInput47 = document.getElementById("Elements-47-0-text");
        var dcInput42 = document.getElementById("Elements-42-0-text");
        var dcInput51 = document.getElementById("Elements-51-0-text");
        var dcInput45 = document.getElementById("Elements-45-0-text");
        var dcInput37 = document.getElementById("Elements-37-0-text");
        var dcInput39 = document.getElementById("Elements-39-0-text");
        var dcInput41 = document.getElementById("Elements-41-0-text");
        var dcInput49 = document.getElementById("Elements-49-0-text");

        if (dcInput44 && dcInput44.value) {
            console.log("Dublin Core Language field has a value!");
	    } else {
	        var dclanguage = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
	        if (!dclanguage) { console.log("Dublin Core Language field has no default!"); 
	        } else if (dclanguage) {
                window.addEventListener('load', function() {
                document.getElementById("Elements-44-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
                });
	        }
        } 
		
	    if (dcInput50 && dcInput50.value) {
            console.log("Dublin Core Title has a value!");
        } else {
            var dctitle = "<?php echo get_option('default_title_page_statement'); // HTML ?>";
	        if (!dctitle) { console.log("Dublin Core Title field has no default!"); 
	        } else if (dctitle) {
                window.addEventListener('load', function() {
                document.getElementById("Elements-50-0-text").value = "<?php echo get_option('default_title_page_statement'); // HTML ?>";
                });
            }
        }
	
	    if (dcInput40 && dcInput40.value) {
            console.log("Dublin Core Date has a value!");
	    } else {
            var dcdate = "<?php echo get_option('default_date_page_statement'); // HTML ?>";
	        if (!dcdate) { console.log("Dublin Core Date field has no default!"); 
	        } else if (dcdate) {
                window.addEventListener('load', function() {
                document.getElementById("Elements-40-0-text").value = "<?php echo get_option('default_date_page_statement'); // HTML ?>";
                });
            }
	    }
		
	    if (dcInput48 && dcInput48.value) {
            console.log("Dublin Core Source has a value!");
	    } else {
            var dcsource = "<?php echo get_option('default_source_page_statement'); // HTML ?>";
	        if (!dcsource) { console.log("Dublin Core Source field has no default!"); 
	        } else if (dcsource) {
                window.addEventListener('load', function() {
                document.getElementById("Elements-48-0-text").value = "<?php echo get_option('default_source_page_statement'); // HTML ?>";
                });
            }
	    }
	
        if (dcInput38 && dcInput38.value) {
            console.log("Dublin Core Coverage has a value!");
	    } else {
            var dccoverage = "<?php echo get_option('default_coverage_page_statement'); // HTML ?>";
	        if (!dccoverage) { console.log("Dublin Core Coverage field has no default!"); 
	        } else if (dccoverage) {
                window.addEventListener('load', function() {
                document.getElementById("Elements-38-0-text").value = "<?php echo get_option('default_coverage_page_statement'); // HTML ?>";
                });
            }
	    }
	
        if (dcInput46 && dcInput46.value) {
            console.log("Dublin Core Relation has a value!");
	    } else {
            var dcrelation = "<?php echo get_option('default_relation_page_statement'); // HTML ?>";
	        if (!dcrelation) { console.log("Dublin Core Relation field has no default!"); 
	        } else if (dcrelation) {
                window.addEventListener('load', function() {
                document.getElementById("Elements-46-0-text").value = "<?php echo get_option('default_relation_page_statement'); // HTML ?>";
                });
            }
	    }
	
	    if (dcInput47 && dcInput47.value) {
            console.log("Dublin Core Rights has a value!");
	    } else {
            var dcrights = "<?php echo get_option('default_rights_page_statement'); // HTML ?>";
	        if (!dcrights) { console.log("Dublin Core Rights field has no default!"); 
	        } else if (dcrights) {
                window.addEventListener('load', function() {
                document.getElementById("Elements-47-0-text").value = "<?php echo get_option('default_rights_page_statement'); // HTML ?>";
                });
            }
	    }
	
        if (dcInput42 && dcInput42.value) {
            console.log("Dublin Core Format has a value!");
	    } else {
            var dcformat = "<?php echo get_option('default_format_page_statement'); // HTML ?>";
	        if (!dcformat) { console.log("Dublin Core Format field has no default!"); 
	        } else if (dcformat) {
                window.addEventListener('load', function() {
                document.getElementById("Elements-42-0-text").value = "<?php echo get_option('default_format_page_statement'); // HTML ?>";
                });
            }
	    }
	
        if (dcInput51 && dcInput51.value) {
            console.log("Dublin Core Type has a value!");
	    } else {
            var dctype = "<?php echo get_option('default_type_page_statement'); // HTML ?>";
	        if (!dctype) { console.log("Dublin Core Type field has no default!"); 
	        } else if (dctype) {
                window.addEventListener('load', function() {
                document.getElementById("Elements-51-0-text").value = "<?php echo get_option('default_type_page_statement'); // HTML ?>";
                });
            }
	    }
	
        if (dcInput45 && dcInput45.value) {
            console.log("Dublin Core Publisher has a value!");
	    } else {
            var dcpublisher = "<?php echo get_option('default_publisher_page_statement'); // HTML ?>";
	        if (!dcpublisher) { console.log("Dublin Core Publisher field has no default!"); 
	        } else if (dcpublisher) {
                window.addEventListener('load', function() {
                document.getElementById("Elements-45-0-text").value = "<?php echo get_option('default_publisher_page_statement'); // HTML ?>";
                });
            }
	    }
	
        if (dcInput37 && dcInput37.value) {
            console.log("Dublin Core Contributor has a value!");
	    } else {
            var dccontributor = "<?php echo get_option('default_contributor_page_statement'); // HTML ?>";
	        if (!dccontributor) { console.log("Dublin Core Contributor field has no default!"); 
	        } else if (dccontributor) {
                window.addEventListener('load', function() {
                document.getElementById("Elements-37-0-text").value = "<?php echo get_option('default_contributor_page_statement'); // HTML ?>";
                });
            }
	    }
	
        if (dcInput39 && dcInput39.value) {
            console.log("Dublin Core Creator has a value!");
	    } else {
            var dccreator = "<?php echo get_option('default_creator_page_statement'); // HTML ?>";
	        if (!dccreator) { console.log("Dublin Core Creator field has no default!"); 
	        } else if (dccreator) {
                window.addEventListener('load', function() {
                document.getElementById("Elements-39-0-text").value = "<?php echo get_option('default_creator_page_statement'); // HTML ?>";
                });
            }
	    }
	
        if (dcInput41 && dcInput41.value) {
            console.log("Dublin Core Description has a value!");
	    } else {
            var dcdescription = "<?php echo get_option('default_description_page_statement'); // HTML ?>";
	        if (!dcdescription) { console.log("Dublin Core Description field has no default!"); 
	        } else if (dcdescription) {
                window.addEventListener('load', function() {
                document.getElementById("Elements-41-0-text").value = "<?php echo get_option('default_description_page_statement'); // HTML ?>";
                });
            }
	    }
	
        if (dcInput49 && dcInput49.value) {
            console.log("Dublin Core Subject has a value!");
	    } else {
            var dcsubject = "<?php echo get_option('default_subject_page_statement'); // HTML ?>";
	        if (!dcsubject) { console.log("Dublin Core Subject field has no default!"); 
	        } else if (dcsubject) {
                window.addEventListener('load', function() {
                document.getElementById("Elements-49-0-text").value = "<?php echo get_option('default_subject_page_statement'); // HTML ?>";
                });
            }
	    }
    
	} 
        </script>
        <?php
    }
}

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
    define('DEFAULT_LANG_PAGE_STATEMENT', '');
    define('DEFAULT_PUBLISHER_PAGE_STATEMENT', '');
    define('DEFAULT_TITLE_PAGE_STATEMENT', '');
    define('DEFAULT_CREATOR_PAGE_STATEMENT', '');
    define('DEFAULT_CONTRIBUTOR_PAGE_STATEMENT', '');
    define('DEFAULT_DESCRIPTION_PAGE_STATEMENT', '');
    define('DEFAULT_TYPE_PAGE_STATEMENT', '');
    define('DEFAULT_FORMAT_PAGE_STATEMENT', '');
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
        'config_form'
	);
	
    public function hookInstall()
    {
        set_option('default_lang_page_statement', DEFAULT_LANG_PAGE_STATEMENT);
        set_option('default_publisher_page_statement', DEFAULT_PUBLISHER_PAGE_STATEMENT);
        set_option('default_title_page_statement', DEFAULT_TITLE_PAGE_STATEMENT);
        set_option('default_creator_page_statement', DEFAULT_CREATOR_PAGE_STATEMENT);
        set_option('default_contributor_page_statement', DEFAULT_CONTRIBUTOR_PAGE_STATEMENT);
        set_option('default_description_page_statement', DEFAULT_DESCRIPTION_PAGE_STATEMENT);
        set_option('default_type_page_statement', DEFAULT_TYPE_PAGE_STATEMENT);
        set_option('default_format_page_statement', DEFAULT_FORMAT_PAGE_STATEMENT);
        set_option('default_coverage_page_statement', DEFAULT_COVERAGE_PAGE_STATEMENT);
        set_option('default_subject_page_statement', DEFAULT_SUBJECT_PAGE_STATEMENT);
        set_option('default_date_page_statement', DEFAULT_DATE_PAGE_STATEMENT);
        set_option('default_source_page_statement', DEFAULT_SOURCE_PAGE_STATEMENT);
        set_option('default_relation_page_statement', DEFAULT_RELATION_PAGE_STATEMENT);
        set_option('default_rights_page_statement', DEFAULT_RIGHTS_PAGE_STATEMENT);
    }
    
    public function hookUninstall()
    {
        delete_option('default_lang_page_statement');
        delete_option('default_publisher_page_statement');
        delete_option('default_title_page_statement');
        delete_option('default_creator_page_statement');
        delete_option('default_contributor_page_statement');
        delete_option('default_description_page_statement');
        delete_option('default_type_page_statement');
        delete_option('default_format_page_statement');
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
        set_option('default_lang_page_statement',$post['lang_page_statement']);
        set_option('default_publisher_page_statement',$post['publisher_page_statement']);
        set_option('default_title_page_statement',$post['title_page_statement']);
        set_option('default_creator_page_statement',$post['creator_page_statement']);
        set_option('default_contributor_page_statement',$post['contributor_page_statement']);
        set_option('default_description_page_statement',$post['description_page_statement']);
        set_option('default_type_page_statement',$post['type_page_statement']);
        set_option('default_format_page_statement',$post['format_page_statement']);
        set_option('default_coverage_page_statement',$post['coverage_page_statement']);
        set_option('default_subject_page_statement',$post['subject_page_statement']);
        set_option('default_date_page_statement',$post['date_page_statement']);
        set_option('default_source_page_statement',$post['source_page_statement']);
        set_option('default_relation_page_statement',$post['relation_page_statement']);
        set_option('default_rights_page_statement',$post['rights_page_statement']);
    }
    
    public function hookAdminFooter(){
    ?>
    <script>
	var state = document.getElementsByTagName("BODY")[0].getAttribute("class");
        if ((state == "items") || (state == "items edit")) {	
        var dcInput44 = document.getElementById("Elements-44-0-text");
        var dcInput50 = document.getElementById("Elements-50-0-text");
        var dcInput40 = document.getElementById("Elements-40-0-text");
        var dcInput48 = document.getElementById("Elements-48-0-text");
        var dcInput38 = document.getElementById("Elements-38-0-text");
        var dcInput46 = document.getElementById("Elements-46-0-text");
        var dcInput47 = document.getElementById("Elements-47-0-text");
        var dcInput42 = document.getElementById("Elements-42-0-text");
        var dcInput51 = document.getElementById("Elements-51-0-text");
        var dcInput45 = document.getElementById("Elements-45-0-text");
        var dcInput37 = document.getElementById("Elements-37-0-text");
        var dcInput39 = document.getElementById("Elements-39-0-text");
        var dcInput41 = document.getElementById("Elements-41-0-text");
        var dcInput49 = document.getElementById("Elements-49-0-text");

        if (dcInput44 && dcInput44.value) {
            console.log("Dublin Core Language field has a value!");
	} else {
	    var dclanguage = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
	    if (!dclanguage) { console.log("Dublin Core Language field has no default!"); } else if (dclanguage) {
        window.addEventListener('load', function() {
        document.getElementById("Elements-44-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
	    }
        
        } 
		
	if (dcInput50 && dcInput50.value) {
            console.log("Dublin Core Title has a value!");
        } else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-50-0-text").value = "<?php echo get_option('default_title_page_statement'); // HTML ?>";
        });
        }
	
	if (dcInput40 && dcInput40.value) {
            console.log("Dublin Core Date has a value!");
        } else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-40-0-text").value = "<?php echo get_option('default_date_page_statement'); // HTML ?>";
        });
        }
		
	if (dcInput48 && dcInput48.value) {
            console.log("Dublin Core Source has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-48-0-text").value = "<?php echo get_option('default_source_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput38 && dcInput38.value) {
            console.log("Dublin Core Coverage has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-38-0-text").value = "<?php echo get_option('default_coverage_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput46 && dcInput46.value) {
            console.log("Dublin Core Relation has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-46-0-text").value = "<?php echo get_option('default_relation_page_statement'); // HTML ?>";
        });
        }
        
	if (dcInput47 && dcInput47.value) {
            console.log("Dublin Core Rights has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-47-0-text").value = "<?php echo get_option('default_rights_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput42 && dcInput42.value) {
            console.log("Dublin Core Format has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-42-0-text").value = "<?php echo get_option('default_format_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput51 && dcInput51.value) {
            console.log("Dublin Core Type has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-51-0-text").value = "<?php echo get_option('default_type_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput45 && dcInput45.value) {
            console.log("Dublin Core Publisher has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-45-0-text").value = "<?php echo get_option('default_publisher_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput37 && dcInput37.value) {
            console.log("Dublin Core Contributor has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-37-0-text").value = "<?php echo get_option('default_contributor_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput39 && dcInput39.value) {
            console.log("Dublin Core Creator has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-39-0-text").value = "<?php echo get_option('default_creator_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput41 && dcInput41.value) {
            console.log("Dublin Core Description has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-41-0-text").value = "<?php echo get_option('default_description_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput49 && dcInput49.value) {
            console.log("Dublin Core Subject has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-49-0-text").value = "<?php echo get_option('default_subject_page_statement'); // HTML ?>";
        });
        }
		
    
	} 
        </script>
        <?php
    }
}

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
    define('DEFAULT_LANG_PAGE_STATEMENT', '');
    define('DEFAULT_PUBLISHER_PAGE_STATEMENT', '');
    define('DEFAULT_TITLE_PAGE_STATEMENT', '');
    define('DEFAULT_CREATOR_PAGE_STATEMENT', '');
    define('DEFAULT_CONTRIBUTOR_PAGE_STATEMENT', '');
    define('DEFAULT_DESCRIPTION_PAGE_STATEMENT', '');
    define('DEFAULT_TYPE_PAGE_STATEMENT', '');
    define('DEFAULT_FORMAT_PAGE_STATEMENT', '');
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
        'config_form'
	);
	
    public function hookInstall()
    {
        set_option('default_lang_page_statement', DEFAULT_LANG_PAGE_STATEMENT);
        set_option('default_publisher_page_statement', DEFAULT_PUBLISHER_PAGE_STATEMENT);
        set_option('default_title_page_statement', DEFAULT_TITLE_PAGE_STATEMENT);
        set_option('default_creator_page_statement', DEFAULT_CREATOR_PAGE_STATEMENT);
        set_option('default_contributor_page_statement', DEFAULT_CONTRIBUTOR_PAGE_STATEMENT);
        set_option('default_description_page_statement', DEFAULT_DESCRIPTION_PAGE_STATEMENT);
        set_option('default_type_page_statement', DEFAULT_TYPE_PAGE_STATEMENT);
        set_option('default_format_page_statement', DEFAULT_FORMAT_PAGE_STATEMENT);
        set_option('default_coverage_page_statement', DEFAULT_COVERAGE_PAGE_STATEMENT);
        set_option('default_subject_page_statement', DEFAULT_SUBJECT_PAGE_STATEMENT);
        set_option('default_date_page_statement', DEFAULT_DATE_PAGE_STATEMENT);
        set_option('default_source_page_statement', DEFAULT_SOURCE_PAGE_STATEMENT);
        set_option('default_relation_page_statement', DEFAULT_RELATION_PAGE_STATEMENT);
        set_option('default_rights_page_statement', DEFAULT_RIGHTS_PAGE_STATEMENT);
    }
    
    public function hookUninstall()
    {
        delete_option('default_lang_page_statement');
        delete_option('default_publisher_page_statement');
        delete_option('default_title_page_statement');
        delete_option('default_creator_page_statement');
        delete_option('default_contributor_page_statement');
        delete_option('default_description_page_statement');
        delete_option('default_type_page_statement');
        delete_option('default_format_page_statement');
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
        set_option('default_lang_page_statement',$post['lang_page_statement']);
        set_option('default_publisher_page_statement',$post['publisher_page_statement']);
        set_option('default_title_page_statement',$post['title_page_statement']);
        set_option('default_creator_page_statement',$post['creator_page_statement']);
        set_option('default_contributor_page_statement',$post['contributor_page_statement']);
        set_option('default_description_page_statement',$post['description_page_statement']);
        set_option('default_type_page_statement',$post['type_page_statement']);
        set_option('default_format_page_statement',$post['format_page_statement']);
        set_option('default_coverage_page_statement',$post['coverage_page_statement']);
        set_option('default_subject_page_statement',$post['subject_page_statement']);
        set_option('default_date_page_statement',$post['date_page_statement']);
        set_option('default_source_page_statement',$post['source_page_statement']);
        set_option('default_relation_page_statement',$post['relation_page_statement']);
        set_option('default_rights_page_statement',$post['rights_page_statement']);
    }
    
    public function hookAdminFooter(){
    ?>
    <script>
	var state = document.getElementsByTagName("BODY")[0].getAttribute("class");
        if ((state == "items") || (state == "items edit")) {	
        var dcInput44 = document.getElementById("Elements-44-0-text");
        var dcInput50 = document.getElementById("Elements-50-0-text");
        var dcInput40 = document.getElementById("Elements-40-0-text");
        var dcInput48 = document.getElementById("Elements-48-0-text");
        var dcInput38 = document.getElementById("Elements-38-0-text");
        var dcInput46 = document.getElementById("Elements-46-0-text");
        var dcInput47 = document.getElementById("Elements-47-0-text");
        var dcInput42 = document.getElementById("Elements-42-0-text");
        var dcInput51 = document.getElementById("Elements-51-0-text");
        var dcInput45 = document.getElementById("Elements-45-0-text");
        var dcInput37 = document.getElementById("Elements-37-0-text");
        var dcInput39 = document.getElementById("Elements-39-0-text");
        var dcInput41 = document.getElementById("Elements-41-0-text");
        var dcInput49 = document.getElementById("Elements-49-0-text");
        if (dcInput44 && dcInput44.value) {
            console.log("Dublin Core Language field has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-44-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
	if (dcInput50 && dcInput50.value) {
            console.log("Dublin Core Title has a value!");
        } else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-50-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
	
	if (dcInput40 && dcInput40.value) {
            console.log("Dublin Core Date has a value!");
        } else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-40-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
	if (dcInput48 && dcInput48.value) {
            console.log("Dublin Core Source has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-48-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput38 && dcInput38.value) {
            console.log("Dublin Core Coverage has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-38-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput46 && dcInput46.value) {
            console.log("Dublin Core Relation has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-46-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
        
	if (dcInput47 && dcInput47.value) {
            console.log("Dublin Core Rights has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-47-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput42 && dcInput42.value) {
            console.log("Dublin Core Format has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-42-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput51 && dcInput51.value) {
            console.log("Dublin Core Type has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-51-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput45 && dcInput45.value) {
            console.log("Dublin Core Publisher has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-45-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput37 && dcInput37.value) {
            console.log("Dublin Core Contributor has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-37-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput39 && dcInput39.value) {
            console.log("Dublin Core Creator has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-39-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput41 && dcInput41.value) {
            console.log("Dublin Core Description has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-41-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput49 && dcInput49.value) {
            console.log("Dublin Core Subject has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-49-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
    
	} 
        </script>
        <?php
    }
}

    {
        set_option('default_lang_page_statement', DEFAULT_LANG_PAGE_STATEMENT);
        set_option('default_publisher_page_statement', DEFAULT_PUBLISHER_PAGE_STATEMENT);
        set_option('default_title_page_statement', DEFAULT_TITLE_PAGE_STATEMENT);
        set_option('default_creator_page_statement', DEFAULT_CREATOR_PAGE_STATEMENT);
        set_option('default_contributor_page_statement', DEFAULT_CONTRIBUTOR_PAGE_STATEMENT);
        set_option('default_description_page_statement', DEFAULT_DESCRIPTION_PAGE_STATEMENT);
        set_option('default_type_page_statement', DEFAULT_TYPE_PAGE_STATEMENT);
        set_option('default_format_page_statement', DEFAULT_FORMAT_PAGE_STATEMENT);
        set_option('default_coverage_page_statement', DEFAULT_COVERAGE_PAGE_STATEMENT);
        set_option('default_subject_page_statement', DEFAULT_SUBJECT_PAGE_STATEMENT);
        set_option('default_date_page_statement', DEFAULT_DATE_PAGE_STATEMENT);
        set_option('default_source_page_statement', DEFAULT_SOURCE_PAGE_STATEMENT);
        set_option('default_relation_page_statement', DEFAULT_RELATION_PAGE_STATEMENT);
        set_option('default_rights_page_statement', DEFAULT_RIGHTS_PAGE_STATEMENT);
    }
    
    public function hookUninstall()
    {
        delete_option('default_lang_page_statement');
        delete_option('default_publisher_page_statement');
        delete_option('default_title_page_statement');
        delete_option('default_creator_page_statement');
        delete_option('default_contributor_page_statement');
        delete_option('default_description_page_statement');
        delete_option('default_type_page_statement');
        delete_option('default_format_page_statement');
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
        set_option('default_lang_page_statement',$post['lang_page_statement']);
        set_option('default_publisher_page_statement',$post['publisher_page_statement']);
        set_option('default_title_page_statement',$post['title_page_statement']);
        set_option('default_creator_page_statement',$post['creator_page_statement']);
        set_option('default_contributor_page_statement',$post['contributor_page_statement']);
        set_option('default_description_page_statement',$post['description_page_statement']);
        set_option('default_type_page_statement',$post['type_page_statement']);
        set_option('default_format_page_statement',$post['format_page_statement']);
        set_option('default_coverage_page_statement',$post['coverage_page_statement']);
        set_option('default_subject_page_statement',$post['subject_page_statement']);
        set_option('default_date_page_statement',$post['date_page_statement']);
        set_option('default_source_page_statement',$post['source_page_statement']);
        set_option('default_relation_page_statement',$post['relation_page_statement']);
        set_option('default_rights_page_statement',$post['rights_page_statement']);
    }
    
    public function hookAdminFooter(){
	?>
    	<script>
	var state = document.getElementsByTagName("BODY")[0].getAttribute("class");
        if ((state = "items") || (state = "items edit")) {	
        var dcInput44 = document.getElementById("Elements-44-0-text");
        var dcInput50 = document.getElementById("Elements-50-0-text");
        var dcInput44 = document.getElementById("Elements-40-0-text");
        var dcInput44 = document.getElementById("Elements-48-0-text");
        var dcInput44 = document.getElementById("Elements-38-0-text");
        var dcInput44 = document.getElementById("Elements-46-0-text");
        var dcInput44 = document.getElementById("Elements-47-0-text");
        var dcInput44 = document.getElementById("Elements-42-0-text");
        var dcInput44 = document.getElementById("Elements-51-0-text");
        var dcInput44 = document.getElementById("Elements-45-0-text");
        var dcInput44 = document.getElementById("Elements-37-0-text");
        var dcInput44 = document.getElementById("Elements-39-0-text");
        var dcInput44 = document.getElementById("Elements-41-0-text");
        var dcInput44 = document.getElementById("Elements-49-0-text");
        if (dcInput44 && dcInput44.value) {
            console.log("Dublin Core Language field has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-44-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
	if (dcInput50 && dcInput50.value) {
            console.log("Dublin Core Title has a value!");
        } else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-50-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
	
	if (dcInput40 && dcInput40.value) {
            console.log("Dublin Core Date has a value!");
        } else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-40-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
	if (dcInput48 && dcInput48.value) {
            console.log("Dublin Core Source has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-48-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput38 && dcInput38.value) {
            console.log("Dublin Core Coverage has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-38-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput46 && dcInput46.value) {
            console.log("Dublin Core Relation has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-46-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
        
	if (dcInput47 && dcInput47.value) {
            console.log("Dublin Core Rights has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-47-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput42 && dcInput42.value) {
            console.log("Dublin Core Format has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-42-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput51 && dcInput51.value) {
            console.log("Dublin Core Type has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-51-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput45 && dcInput45.value) {
            console.log("Dublin Core Publisher has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-45-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput37 && dcInput37.value) {
            console.log("Dublin Core Contributor has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-37-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput39 && dcInput39.value) {
            console.log("Dublin Core Creator has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-39-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput41 && dcInput41.value) {
            console.log("Dublin Core Description has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-41-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
        if (dcInput49 && dcInput49.value) {
            console.log("Dublin Core Subject has a value!");
	} else {
        window.addEventListener('load', function() {
        document.getElementById("Elements-49-0-text").value = "<?php echo get_option('default_lang_page_statement'); // HTML ?>";
        });
        }
		
    
	} 
        </script>
	<?php
    }
}
