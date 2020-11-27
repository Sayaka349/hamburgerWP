<?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="c-menu-card">
                <div class="c-menu-card__picture" <?php the_post_thumbnail(); ?>></div>
                <section class="c-menu-card__about">
                    <div>
                        <h2 class="c-menu-card__about-title"><?php the_title(); ?></h2>
                        <article>
                            <h3>小見出しが入ります</h3>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </article>
                    </div>
                    <button class="c-menu-card__button"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
                </section>
            </div>
        <?php endwhile;
else :
    ?><p>表示する記事がありません</p><?php
endif;