<?php
/**
* Plugin Name: My Small Plugin
*/

class My_Small_Plugin{

 function __construct(){
  add_action('wp',array($this,'my_wp'),10);
 }

 function my_wp(){
 if(is_single(1)){
  add_filter('the_title',array($this,'my_title'),10);
  }
 }

 function my_title($title){
 $title ='- '.$title.' -';
 return $title;
 }

}

new My_Small_Plugin();

?>

