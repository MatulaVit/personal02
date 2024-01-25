
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
<div id= "page-home">
<?php
if (have_posts()):
    while(have_posts()):
        the_post();
?>
        <?php/* the_title();*/?>
        <?php the_content(); ?>
<?php
    endwhile;
endif;
?>
</div>

<section class=" bg-gray-100 py-10 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4">

                

                <div class="text-center">
                    <div class="flex justify-center mb-16">
                        <img src="http://localhost/wp05_tailwind_template/wp-content/uploads/2024/01/image021-2.png" alt="Image">
                    </div>

                    <h6 class="font-medium text-gray-600 text-lg md:text-2xl uppercase mb-8">Vít Matula</h6>

                    <h1 class="font-normal text-gray-900 text-4xl md:text-7xl leading-none mb-8">Junior Backend Developer</h1>

                    <p class="font-normal text-gray-600 text-md md:text-xl mb-16">Užívám si programování. Baví mě vytvářet stránky, které lidem zpříjemňují život.</p>

                    
                </div>

            </div>

        </section>

        </section>



        <section class="py-10 md:py-16 bg-gray-100">



            <div class="container max-w-screen-xl mx-auto px-4">



                <div class="text-center">

                    <h1 class="font-normal text-gray-300 text-3xl md:text-6xl lg:text-7xl mb-20 md:mb-32 lg:mb-48">

					Vzdělání je důležité, ale teprve <br> praxe dělá mistra!</h1>



                    <p class="font-medium text-gray-700 text-xs md:text-base">Mám hluboké znalosti tvorby webových stránek ve WordPressu, 

							což zahrnuje<br>schopnost vytvářet atraktivní a responzivní designy přizpůsobené<br>

							potřebám uživatelů. 

					</p>

                </div>



            </div>



        </section>
<?php
get_footer();


