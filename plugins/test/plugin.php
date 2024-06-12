<?php

/**
 * Plugin name: 
 * Description: 
 * 
 * 
 **/

set_value([

	'plugin_route'	=>'my-plugin',
	'table'			=>'my_table',

]);

add_action('view',function(){
    $vars = get_value();
    $ses = new \Core\Session;
    var_dump($ses->is_admin());

    require plugin_path('views/view.php');

});

add_action('view',function(){
    $vars = get_value();
    $req = new \Core\Request;
    if($req->posted()) {
        require plugin_path('controllers/controller.php');
    }
});
add_filter('before_check_admin',function($data){
    $data['is_admin'] = true;
    return $data;
});
/** set user permissions for this plugin **/
add_filter('permissions',function($permissions){

	$permissions[] = 'my_permission';

	return $permissions;
});


/** run this after a form submit **/
add_action('controller',function(){

	$vars = get_value();

	require plugin_path('controllers/controller.php');
});




/** for manipulating data after a query operation **/


