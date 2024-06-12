<?php

namespace core;
var_dump(extension_loaded('gd'));
dd(get_loaded_extensions());
function check_extensions(){
$extesions =
    [

      'gd',
      'pdo_mysql'
    ];
    $not_loaded = [];
    foreach( $extesions as $ext){
        if(extension_loaded($ext))
            $not_loaded[] = $ext;
    }
    if(!empty($not_loaded))
    {
        dd("need load extension". implode(",",$not_loaded));
    }
}
check_extensions();