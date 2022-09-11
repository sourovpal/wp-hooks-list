admin_enqueue_scripts
wp_enqueue_scripts
init
wp_head

add_action( 'admin_enqueue_scripts', 'safely_add_stylesheet_to_admin' );
function safely_add_stylesheet_to_admin() {
   wp_enqueue_style( 'prefix-style', plugins_url('hello-style.css', __FILE__) );
   wp_enqueue_script('boot_js', plugins_url('inc/bootstrap.js',__FILE__ ));
   wp_enqueue_script('ln_script', plugins_url('js/script.js', __FILE__), ['jquery'], false, true);
}





plugins_url( 'css/style.css', __FILE__ );






add_action("admin_menu", "addMenu");

 function addMenu(){

    add_menu_page(
        "New Menu", 
        "New Plugins", 
        1, 
        "new-menu", 
        "newMenu",
        "dashicons-controls-volumeon",
        5
    );



    add_submenu_page(
      "new-menu", 
      "New Menu 1", 
      "New Menu 1", 
      4, 
      "new-menu-1", 
      "newMenu_1"
   );

 }
