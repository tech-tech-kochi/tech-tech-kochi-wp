
<footer class="bg-gry"></footer>

</body>

<style>
     li {
        display: inline;
        margin-right: 20px;
    }
    a {
        position: relative;
    }
    a::after {
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
    a:hover::after {
        transform: scale(1, 1);
    }
   .footer {
       padding: 10px;
   }
   /* .footer a{
       padding:10px;
   }
   .footer li{
       padding:10px;
   } */

</style>

<footer class="footer bg-gry flex">
<div class="container flex">

    <a href="<?php echo home_url( '/' ); ?>">TECH-TECH KOCHI</a>


    <!-- ナビメニューを表示 -->
    <?php wp_nav_menu(
        array(
            'menu'  => 'pc_menu',
            'menu_class' => 'nav navbar-nav',
        )
    ); ?>

</div>
</footer>
</html>
