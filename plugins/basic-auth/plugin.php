<?php

use \Core\Database;
show_plugins();

$image = new \Core\image;
copy('image.jpg','image_resized.jpg');
$image->getThumbnail('image.jpg',500,400);

echo mime_content_type('test.txt');
add_action('controller',function(){
    $db = new \Core\Database();
    $query = "SELECT * FROM users WHERE id = :id";
    $data = ['id' => 1];

    $result = $db->query($query, $data);
    dd($result["result"]);

});
add_action('after_view',function(){
    require plugin_path('includes\login.view.php');
    dd(hash('sha256',time().rand(0,99)));
});

add_action('controller',function(){
   $req = new \Core\Request;
   if($req->posted())
   {
       dd($req->post());
       var_dump(csrf_verify($req->post()));
   }
});

add_action('controller',function(){
   $db = new \Core\Database;
   $db->query("create database if not exists pluginphp_db");
    $db->query("use pluginphp_db");

    $db->query("create table if not exists users (id int primary key auto_increment, name varchar(100) null)");


});
