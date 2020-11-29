<?php get_header(); ?>  <!-- header.phpを読み込む -->
            
            <div class="p-archive-bg">
                <div class="p-archive-top">
                        <h2 class="p-archive-top__title">Menu:<span class="p-archive-top__menu">チーズバーガー</span></h2>
                </div>
            </div>

            <div class="c-contents-archive">

                <h3>小見出しが入ります</h3>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

                <div class="c-menu-card">
                    <div class="c-menu-card__picture"></div>
                    <section class="c-menu-card__about">
                        <div>
                            <h2 class="c-menu-card__about-title">チーズバーガー</h2>
                            <article>
                                <h3>小見出しが入ります</h3>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </article>
                        </div>
                        <button class="c-menu-card__button"><a href="single.html">詳しく見る</a></button>
                    </section>
                </div>
                <div class="c-menu-card">
                    <div class="c-menu-card__picture"></div>
                    <section class="c-menu-card__about">
                        <h2 class="c-menu-card__about-title">ダブルチーズバーガー</h2>
                        <article>
                            <h3>小見出しが入ります</h3>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </article>
                        <button class="c-menu-card__button"><a href="single.html">詳しく見る</a></button>
                    </section>
                </div>
                <div class="c-menu-card">
                    <div class="c-menu-card__picture"></div>
                    <section class="c-menu-card__about">
                        <h2 class="c-menu-card__about-title">スペシャルチーズバーガー</h2>
                        <article>
                            <h3>小見出しが入ります</h3>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </article>
                        <button class="c-menu-card__button"><a href="single.html">詳しく見る</a></button>
                    </section>
                </div>

                <?php wp_pagenavi(); ?>

            </div>


        </main>

        <div class="c-filter"></div>

        <?php get_sidebar(); ?> <!--siderbar.phpを読み込む-->

    </div>

<?php get_footer(); ?> <!-- footer.phpを読み込む -->
