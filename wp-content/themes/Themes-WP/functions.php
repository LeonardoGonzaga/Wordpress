<?php

add_action('wp_enqueue_scripts', 'twtema_add_script_cabecalho');

function twtema_add_script_cabecalho(){
	//Adicionar estilos
	wp_enqueue_style('bootstrap-twtema', get_stylesheet_directory_uri(). '/bootstrap/dist/css/bootstrap.css', array(), '1.0','all');
	wp_enqueue_style('style-twtema', get_stylesheet_directory_uri().'/style.css', array(), '1.0','all');
}



