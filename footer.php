<style>
    .footer {
        width: 100%;
        margin: 0 auto;
        padding: 40px 0;
   }
    .footer li {
        display: inline;
        margin-right: 20px;
    }
    @media screen and (max-width:1025px) {
        .footer li {
            display:none;
        }
        .footer {
        width: 100%;
        margin: 0 auto;
        padding: 30px 0;
   }
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
       font-weight:bold;
   }
   .copyright-text {
       font-size: 10px;
       padding-top: 20px;
   }
</style>
    <footer class="footer bg-yel">
        <div class="container flex">
            <a href="<?php echo home_url( '/' ); ?>" class="logo">TECH-TECH KOCHI</a>
            <!-- ナビメニューを表示 -->
            <?php wp_nav_menu(
                array(
                    'menu'  => 'pc_menu',
                    'menu_class' => 'nav navbar-nav fs-14px menu-ul',
                )
            ); ?>
            
        </div>
        <p class="copyright-text container">Copyright © 2021 TECH-TECH KOCHI All Rights Reserved.</p>
        
    </footer>
    <?php wp_footer() ?>
</body>
</html>
