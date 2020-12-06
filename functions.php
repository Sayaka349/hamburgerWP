<?php

function hamburger_setup() {

	//テーマサポート
    add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' ); 
	
	//HTML5対応を有効化
	add_theme_support( 'html5', array( 'search-form','comment-form','comment-list','gallery','caption', ) ); 

	// ナビゲーションメニュー
	register_nav_menus( array(
	'footer_nav' => esc_html__( 'footer navigation', 'style' ),
	'category_nav' => esc_html__( 'category navigation', 'style' ), ) );

	// editor-style.cssを読み込み
	add_editor_style("editor-style.css");
	add_theme_support("editor-styles");

}
add_action( 'after_setup_theme', 'hamburger_setup' );

//タイトル出力
function hamburger_title( $title ) {
	if ( is_front_page() && is_home() ) { //トップページなら
		$title = get_bloginfo( 'name', 'display' );
	} elseif ( is_singular() ) { //シングルページなら
		$title = single_post_title( '', false );
	}
	return $title;
}
add_filter( 'pre_get_document_title', 'hamburger_title' );


function hamburger_scripts() {

	// フォントの読み込み
	wp_enqueue_style( 'myfonts','https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap',array(),null);
	wp_enqueue_style( 'myfonts',get_template_directory_uri() .'/fonts/mplus-1m-bold.ttf',array() );
	wp_enqueue_style( 'myfonts',get_template_directory_uri() .'/fonts/mplus-1m-regular.ttf',array() );
	// fontawesomeの読み込み
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', array() );

	//style.cssを読み込み
    wp_enqueue_style('hamburger-style',get_template_directory_uri() .'/css/style.css',array(), filemtime(get_theme_file_path( 'style.css' )) );

	//jqueryを読み込み
	wp_enqueue_script( 'script-name',get_template_directory_uri() . '/js/hamburger.js',array( 'jquery' ), true );

}
add_action( 'wp_enqueue_scripts', 'hamburger_scripts' );


function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
 
    //アーカイブページの時に表示件数を3件にセット
    if ( $query->is_archive() ) {
		$query->set( 'posts_per_page', '3' );
    }
    //検索ページの時に表示件数を5件にセット
    if ( $query->is_search() ) {
		$query->set( 'posts_per_page', '5' );
	}

    //カテゴリーページの時に表示件数を5件にセット
	if ( $query->is_category() ) {
		$query->set( 'posts_per_page', '5' );
	}
	
	//カテゴリーEatIn
	if ( $query->is_category_2() ) {
		$query->set( 'cat', '2' );
	  }

	//カテゴリーTakeOut
	if ( $query->is_category_3() ) {
		$query->set( 'cat', '3' );
	}

}
add_action( 'pre_get_posts', 'change_posts_per_page' );
