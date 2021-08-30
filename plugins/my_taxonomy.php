<?php
/**
* Plugin Name:My Taxonomy
*/

class My_Taxonomy{

  function __construct(){
    add_action('init',array($this,'my_init'),10);
  }

  function my_init(){
    register_taxonomy(
      'sample_taxonomy','sample_post_type',array(
        'public'            => true,
        'hierarchical'      => true,
        'show_admin_column' => true,
        'labels' => array(
          'name'         => 'sample taxonomy',
          'add_new_item' => 'add new item',
          'edit_item'    => 'edit item',
        ),
      )
    );
  }
}

new My_Taxonomy();
?>
