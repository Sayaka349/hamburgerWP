<?php get_header(); ?>  <!-- header.phpを読み込む -->

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
            
            <div class="c-single-top aboutshop">
                    <h1 class="c-single-top__title aboutshop"><?php the_title(); ?></h1>
            </div>

            <div class="c-contents-single">

            <?php the_content(); ?>

            </div>

        </main>

        <div class="c-filter"></div>

    <?php endwhile; endif; ?>

        <?php get_sidebar(); ?> <!--siderbar.phpを読み込む-->

    </div>

<?php get_footer(); ?> <!-- footer.phpを読み込む -->
