<?php get_header(); ?>  <!-- header.phpを読み込む -->

    <div class="c-contents__error">
        <h2 class="c-contents__error-title">Error 404 <br> Not Found</h2>
        <p class="c-contents__error-message">お探しのページは見つかりませんでした。</p>
        <p class="c-contents__error-message"><a href="<?php echo home_url(); ?>">HOMEへ</a></p>
    </div>

        </main>

        <div class="c-filter"></div>

        <?php get_sidebar(); ?> <!--siderbar.phpを読み込む-->

    </div>

<?php get_footer(); ?> <!-- footer.phpを読み込む -->
