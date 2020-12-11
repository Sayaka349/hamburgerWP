<footer class="l-footer">
        <div> <!--footermenuの表示(コンテナとulにクラスを付与)-->
            <?php wp_nav_menu( array(
                'theme_location'=>'footer_nav',
                'menu' => 'footermenu',
                'container_class' => 'l-footer__container',
                'menu_class' => 'l-footer__menu',
                )); ?>
            <p>Copyright: RaiseTech</p>
        </div>
    </footer>

    <script src="js/jquery-3.5.1.min.js"></script>

    <?php wp_footer(); ?>

</body>
</html>