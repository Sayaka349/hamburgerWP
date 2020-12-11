<aside class="l-sidebar">
            <h2 class="l-sidebar__menu"><a href="#" class="l-header__title">Menu</a></h2>
            <span class="l-sidebar__menu-icon"></span>

            <?php wp_nav_menu( array(
                'theme_location'=>'category_nav',
                'menu' => 'cateogrymenu',
                'container_class' => 'c-food-menu',
                'menu_class' => 'c-food-menu__category',
                )); ?>

        </aside>
