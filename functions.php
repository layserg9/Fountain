<?php

if ( ! function_exists('fountain_setup')){
	function fountain_setup(){
		//добавляем динамический тайтл 
		add_theme_support('title-tag');
	}
	add_action ('after_setup_theme', 'fountain_setup');
}

/*
Подключаем стили и сскрипты
*/
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'fountain_scripts' );

function fountain_scripts() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );

	if( is_page('home') ){
		//Подключаем style.css
		wp_enqueue_style( 'fountain', get_template_directory_uri() . '/css/style.css', array ());
	
		}

	if( is_page('articles') ){
			//bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array ());
	//Подключаем style.css
   wp_enqueue_style( 'fountain', get_template_directory_uri() . '/css/style.css', array ());
				//articles
	wp_enqueue_style( 'articles', get_template_directory_uri() . '/css/articles.css', array ());
  	}

  if( is_page('city') ){
	//Подключаем style.css
   wp_enqueue_style( 'fountain', get_template_directory_uri() . '/css/style.css', array ());
	//walk
	wp_enqueue_style( 'walk', get_template_directory_uri() . '/css/walk.css', array ());
	//city
	/* wp_enqueue_style( 'city', get_template_directory_uri() . '/css/city.css', array ()); */
	}
	if( is_page('walk') ){
	//Подключаем style.css
	wp_enqueue_style( 'fountain', get_template_directory_uri() . '/css/style.css', array ());
	//walk
	wp_enqueue_style( 'walk', get_template_directory_uri() . '/css/walk.css', array ());
	}
	if( is_page('private') ){
	//Подключаем style.css
   wp_enqueue_style( 'fountain', get_template_directory_uri() . '/css/style.css', array ());
	//private
	wp_enqueue_style( 'private', get_template_directory_uri() . '/css/private.css', array ());
	}
	

   
   //Переподключаем jQuery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.3.min.js');
	wp_enqueue_script( 'jquery' );



	
   wp_enqueue_script( 'main', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
	wp_enqueue_script( 'spollers', get_template_directory_uri() . '/js/spollers.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap_bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true );
	
}
