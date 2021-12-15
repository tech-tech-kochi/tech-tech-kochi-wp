<style>
    .footer {
        width: 95%;
        margin: 0 auto;
        padding: 60px 0;
   }
    li {
        display: inline;
        margin-right: 20px;
    }
    .menu-item  {
        position: relative;
    }
    .menu-item ::after {
        position: absolute;
        bottom: -4px;
        left: 0;
        content: '';
        width: 100%;
        height: 1px;
        background: #333;
        transform: scale(0, 1);
        transform-origin: left top;
        transition: transform .3s;
    }
    .menu-item :hover::after {
        transform: scale(1, 1);
    }
   .logo {
       padding: 15px 30px 0 0;
   }
   .copyright-text {
       font-size: 10px;
       padding-top: 20px;
   }
</style>
    <footer class="footer bg-wht">
        <div class="flex">
            <a href="<?php echo home_url( '/' ); ?>" class="logo">TECH-TECH KOCHI</a>
            <!-- ナビメニューを表示 -->
            <?php wp_nav_menu(
                array(
                    'menu'  => 'pc_menu',
                    'menu_class' => 'nav navbar-nav fs-14px',
                )
            ); ?>
        </div>
        <p class="copyright-text">Copyright © 2021 TECH-TECH KOCHI All Rights Reserved.</p>
    </footer>
    <?php wp_footer() ?>
</body>
</html>
