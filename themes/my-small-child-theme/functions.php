<?php
function my_title(){
  bloginfo(`name`);
  if( ! is_front_page()){
   echo " ";
   wp_title();
  }
}
