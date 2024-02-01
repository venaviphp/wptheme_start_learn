<?php
//Функция для подключения скриптов, первый параметр - префикс, далее путь
function venavifirst_scripts(){
    wp_enqueue_style('venavifirst-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('venavifirst-main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('vanavifirst-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
}

add_action('wp_enqueue_scripts', 'venavifirst_scripts');