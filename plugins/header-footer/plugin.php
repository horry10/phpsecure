<link rel="stylesheet" type="text/css" href="<?= get_plugin_dir(__FILE__) . 'css\style.css' ?>">
<img src="<?= get_plugin_dir(__FILE__) . 'images\image.jpg' ?>" style="width:200px">

<?php

$user = new \Model\User();
$ses = new Core\Session;

echo get_plugin_dir(__FILE__);
add_action('controller',function (){
    $arr = ['name'=>'johnaa','age'=>30];
    set_value($arr);});

add_action('view',function(){
    echo "<form method='post' style='width:400px;margin:auto;text-align:center;margin-top:50px'>
<h4>Login </h4>
<input placeholder='email' name='email'/><br>
<input placeholder='password' name='password' /><br>
<button>Login</button> 
</form>";
});

add_action('before_view',function(){
    echo "<center><div><a herf=''>Home</a> . About us . Contact us</div></center>";
    require plugin_path('include\header.view.php');
});

add_action('view',function (){
    $limit = 10;
    $pager = new \Core\Paper($limit);
    $offset = $pager->offset;
    $pager->display();
});

add_action('after_view',function(){
    require plugin_path('include\footer.view.php');
});

add_action('user_permissions',function ($permissions){
    $permissions[] = 'add_user';
    $permissions[] = 'add_user';
    $permissions[] = 'add_user';

    return $permissions;
});