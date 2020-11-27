<?php get_header(); ?>  <!-- header.phpを読み込む -->
            
            <div class="p-archive-bg">
                <div class="p-archive-top">
                        <h2 class="p-archive-top__title">Search:<span class="p-archive-top__menu">チーズバーガー</span></h2>
                </div>
            </div>

            <div class="c-contents-archive">

                <h3>小見出しが入ります</h3>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

                <?php get_template_part( 'loop' ); ?>

                <div class="c-menu-card">
                    <div class="c-menu-card__picture"></div>
                    <section class="c-menu-card__about">
                        <div>
                            <h2 class="c-menu-card__about-title">見出しが入ります</h2>
                            <article>
                                <h3>小見出しが入ります</h3>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </article>
                        </div>
                        <button class="c-menu-card__button"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
                    </section>
                </div>
                <div class="c-menu-card">
                    <div class="c-menu-card__picture"></div>
                    <section class="c-menu-card__about">
                        <h2 class="c-menu-card__about-title">見出しが入ります</h2>
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
                        <h2 class="c-menu-card__about-title">見出しが入ります</h2>
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
                        <h2 class="c-menu-card__about-title">見出しが入ります</h2>
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
                        <h2 class="c-menu-card__about-title">見出しが入ります</h2>
                        <article>
                            <h3>小見出しが入ります</h3>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </article>
                        <button class="c-menu-card__button"><a href="single.html">詳しく見る</a></button>
                    </section>
                </div>

                <div class="p-pagenavi">
                    <span class="p-pagenavi__pages">page 1/10</span>
                    <a class="p-pagenavi__postslink" rel="prev" href="#">≪<span class="p-pagenavi__pre">前へ</span></a>
                    <a class="c-pagenavi current" title="Page 1" href="#">1</a>
                    <a class="c-pagenavi larger" title="Page 2" href="#">2</a>
                    <a class="c-pagenavi larger" title="Page 3" href="#">3</a>
                    <a class="c-pagenavi larger" title="Page 4" href="#">4</a>
                    <a class="c-pagenavi larger" title="Page 5" href="#">5</a>
                    <a class="c-pagenavi larger" title="Page 6" href="#">6</a>
                    <a class="c-pagenavi larger" title="Page 7" href="#">7</a>
                    <a class="c-pagenavi larger" title="Page 8" href="#">8</a>
                    <a class="c-pagenavi larger" title="Page 9" href="#">9</a>
                    <a class="p-pagenavi__postslink" rel="next" href="#"><span class="p-pagenavi__pre">次へ</span>≫</a>
                </div>

            </div>


        </main>

        <div class="c-filter"></div>

        <?php get_sidebar(); ?> <!--siderbar.phpを読み込む-->

    </div>

<?php get_footer(); ?> <!-- footer.phpを読み込む -->
