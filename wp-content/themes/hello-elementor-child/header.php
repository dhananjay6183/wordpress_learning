<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="site-header">
            <h1><?php bloginfo( 'name' ); ?></h1>
            <p><?php bloginfo( 'description' ); ?></p>

            <!-- Navigation Bar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                            'add_li_class'  => 'nav-item',
                            'link_class'   => 'nav-link',
                        ) );
                        ?>

                        <!-- User Login/Register Icons -->
                        <ul class="navbar-nav ml-auto">
                            <?php if ( is_user_logged_in() ) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo wp_logout_url(); ?>">Logout</a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo wp_login_url(); ?>">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo wp_registration_url(); ?>">Register</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
