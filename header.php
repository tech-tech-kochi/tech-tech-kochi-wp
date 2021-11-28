<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
これはヘッダーです

    <!-- ナビメニューを表示 -->
    <?php wp_nav_menu(
        array(
            'menu'  => 'pc_menu',
            'menu_class' => 'nav navbar-nav',
        )
    ); ?>


</header>

