 <?php

/**
 * Plugin name: 
 * Description: 
 * 
 * 
 **/


/** displays the view file **/
add_filter('404_search_for_item',function($results){

    for ($i=0; $i<10; $i++) {
        $obj = (object)[];
        $obj->id = 1;
        $obj->title = "this is a post";
        $obj->date = date("Y-m-d");

        $results[] = $obj;
    }
    return $results;

});
 add_action('404_display_search_results',function($results){

     foreach ($results as $key => $row)
     {
         require plugin_path('views/view.php');
     }
 });





