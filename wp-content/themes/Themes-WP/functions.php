<?php

add_action('wp_enqueue_scripts', 'twtema_add_script_cabecalho');

function twtema_add_script_cabecalho()
{
	wp_enqueue_style('style-twtema', get_stylesheet_directory_uri() . '/style.css');
}




add_action('init', 'wp_tema_init');

function wp_tema_init()
{
	# code...
	register_nav_menu('twmenu-principal', 'Menu Principal (cabeçalho');
}

add_theme_support('post-thumbnails');

add_image_size('wp-miniatura', 150,134, true);
add_image_size('slide-page',458,254, true);
add_image_size('image-home', 500,500, true);


add_theme_support('title-tag');
add_theme_support('custom-logo',[
	'height' => 50,
	'width' => 150,
	'flex-height' => true

]);



add_action( 'customize_register', 'twtema_decricoes_do_header' );

function twtema_decricoes_do_header($wp_customize) {
	// adiciona um painel
	$wp_customize->add_panel( 'twtema_descricoes', [
		'priority' => 500,
		'theme_supports' => '',
		'title' => 'Descrições do tema',
		'description' => 'Descrições usadas dentro do tema',
	]);

	// adiciona uma sesão
	$wp_customize->add_section( 'twtema_descricoes_header' , [
		'title' => 'Descrições do header',
		'panel' => 'twtema_descricoes',
		'priority' => 10
	]);

	// Adiciona setting
	$wp_customize->add_setting( 'twtema_descricoes-header-titulo', [
		'default' => 'Tema Treinaweb',
	]);

	// Adicionar control
	$wp_customize->add_control( 
		new WP_Customize_Control(
			$wp_customize,
			'twtema_descricoes_header_control',
			[
				'label' => 'Título do tema',
				'section' => 'twtema_descricoes_header',
				'settings' => 'twtema_descricoes-header-titulo',
				'type' => 'text'
			]
		)
	);
}


