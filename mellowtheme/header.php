<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mellowlee</title>

    <?php wp_head(); ?>


</head>

<body <?php body_class('test'); ?>>

    <header>
        <div class="container">

            <nav class="navbar navbar-expand-lg">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col">
                        <h1 class="header-logo">mellowlee</h1>
                    </div>
                    <div class="col">
                        <?php wp_nav_menu(
                            array(
                                'theme-location' => 'top-menu',
                                'menu_class' => 'top-bar'
                            )
                        ); ?>
                    </div>
                </div>

            </nav>

        </div>
    </header>