<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> <!--言語設定を自動的に出力-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body  <?php body_class(); ?>>
    <div class="c-contents">

        <main>
            <header class="l-header">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header__title"><?php bloginfo( 'name' ); ?></a></h1>

                <?php get_search_form(); ?> <!--searchform.phpを読み込み-->

                <span class="l-header__menu-icon">Menu</span>
            </header>
