<?php
/**
*Plugin Name: My Post Type
*/

class My_Post_Type{

  function __construct(){
    add_action('init',array($this,'post_type'),10);

  }

  function post_type(){
  register_post_type(
    'sample_post_type',array(
      'public'        => true,
      'hierarchical'  => false,
      'has_archive'   => true,
      'labels' =>array(
        'name' => 'sample',
        'add_new_item' => 'add new item',
        'edit_item' => 'edit item' 
      ),
      'supports' => array(
        'title',
        'editor',
        'custom-fields',
      ),      
     )
    );
  
  }
}

new My_Post_Type();
?>
