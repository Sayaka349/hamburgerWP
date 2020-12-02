<?php get_header(); ?>  <!-- header.phpを読み込む -->
            
            <div class="p-archive-bg">
                <div class="p-archive-top">
                        <h2 class="p-archive-top__title">Menu:
                            <span class="p-archive-top__menu">
                                <?php $category = get_the_category(); 
                                    echo $category[2]->cat_name;
                                ?> <!--3番目のカテゴリー名のみリンクなしで表示-->
                            </span>
                        </h2>
                </div>
            </div>

            <div class="c-contents-archive">

                <h3>小見出しが入ります</h3>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

                <?php get_template_part( 'loop' ); ?>

                <?php wp_pagenavi(); ?>

            </div>


        </main>

        <div class="c-filter"></div>

        <?php get_sidebar(); ?> <!--siderbar.phpを読み込む-->

    </div>

<?php get_footer(); ?> <!-- footer.phpを読み込む -->
