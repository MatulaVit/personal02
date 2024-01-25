<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_template_part('template-parts/components/_head') ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <!-- ::::::::::::container:::::::::::: -->

   <!-- <h1><?php/* bloginfo('name'); */?> </h1> -->
    
    
    <nav class="flex justify-end items-center p-4 pr-16 h-24  bg-gray-700">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'flex space-x-20 text-white',
                'container'      => false,
            ));
        ?>
        <a class="flex space-x-20 pl-20 text-white" href="https://www.linkedin.com/in/vít-matula-ing-a85668171/" 
            target="_blank">Moje CV</a>

    </nav>
    
    <hr>

    <div class="w-full">