
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umíme_Weby
 */

get_header();
?>
<div id= "page-test2">
<?php
if (have_posts()):
    while(have_posts()):
        the_post();
?>
        <?php the_title();?>
        <?php the_content(); ?>
<?php
    endwhile;
endif;
?>
</div>

<h1 class="text-red-500">Test2</h1>
<?php
get_footer();


