<?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>

            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="c-menu-card">

                <?php if ( has_post_thumbnail() ): ?> <!--アイキャッチ画像があれば表示-->
                <div class="c-menu-card__picture" ><?php the_post_thumbnail(); ?></div>
                <?php endif; ?>

                <section class="c-menu-card__about">
                    <div>
                        <h2 class="c-menu-card__about-title"><?php the_title(); ?></h2><!--タイトル表示-->
                        <p><?php the_tags( 'Tags: ' ); ?></p>
                        <article>
                            <p><?php the_excerpt(); ?></p> 
                        </article>
                    </div>
                    <button class="c-menu-card__button"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
                </section>
            </div>
        <?php endwhile;
else :
    ?><p>表示する記事がありません</p><?php
endif;

