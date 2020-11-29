<footer class="l-footer">
        <div> <!--footermenuの表示(コンテナとulにクラスを付与)-->
            <?php wp_nav_menu( array(
                'menu' => 'footermenu',
                'container_class' => 'l-footer__container',
                'menu_class' => 'l-footer__menu',
                )); ?>
            <p>Copyright: RaiseTech</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>

    <?php wp_footer(); ?>

</body>
</html>