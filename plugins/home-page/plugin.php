<link rel="stylesheet" type="text/css" href="<?=  plugin_http_dir(). 'css\style.css' ?>">
<?php
require plugin_dir() . 'includes/view.php';
dd( plugin_dir());

echo get_plugin_dir(__FILE__);
echo "hello";
add_action('controller',function(){
    dd('this is controller hook');
    $arr = ['name'=>'johna','age'=>30];
    set_value($arr);
    dd($arr);
},9);

add_action('after_view',function(){
    echo "<center><div> Website copyright 2023</div>";
});