<footer class="footer" id="footer">
    <div class="container">
        <span class="text-muted">
            <p>Copyright &copy; 2020 Eilis Lee</p>
            <?php wp_nav_menu(
                array(
                    'theme-location' => 'footer-menu',
                    'menu_class' => 'footer-bar'
                )
            ); ?>
        </span>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>