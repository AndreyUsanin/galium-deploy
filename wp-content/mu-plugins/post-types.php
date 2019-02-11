<?php

function theme_post_types(){
// Event post type

  register_post_type('event', array(
    'supports' => array('title', 'editor'),
    'public' => true,
    'rewrite' => array('slug' => 'docs'),
    'labels' => (array(
      'name' => 'Врачи',
      'add_new_item' => 'Добавить врача',
      'edit_item' => 'Редакстировать',
      'all_items' => 'Все врачи',
      'singular_name' => 'Врачи'
    ))
  ));


  // Programm post type

}

add_action('init', 'theme_post_types');

?>