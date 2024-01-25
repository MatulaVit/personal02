
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
<div id= "page-Zkusenosti">
<?php
if (have_posts()):
    while(have_posts()):
        the_post();
?>
        <?php/* the_title();*/?>
        <?php/* the_content(); */?>
<?php
    endwhile;
endif;
?>
</div>




<section class="bg-gray-100 py-10 md:py-16 ">



            <div class="container max-w-screen-xl mx-auto px-4">



                <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Zkušenosti</h1>



                <p class="font-normal text-gray-500 text-xs md:text-base mb-20">Moje pracovní zkušenosti.</p>



                <div class="flex flex-col lg:flex-row justify-between">

                    <div class="space-y-8 md:space-y-16 mb-16 md:mb-0">

                        <h6 class="font-medium text-gray-400 text-base uppercase">Společnost</h6>



                        <p class="font-semibold text-gray-600 text-xl">Teva Czech Industries s.r.o.<span class="font-normal text-gray-300">/ Opava-Komárov</span></p>



                        <p class="font-semibold text-gray-600 text-xl">BRANO a.s. <span class="font-normal text-gray-300">/ Hradec nad Moravicí</span></p>



                        <p class="font-semibold text-gray-600 text-xl">Okin BPS a.s <span class="font-normal text-gray-300">/ Ostrava</span></p>



                        <p class="font-semibold text-gray-600 text-xl">WP-Admin  <span class="font-normal text-gray-300">/ Opava</span></p>



                        

                    </div>



                    <div class="space-y-8 md:space-y-16 mb-16 md:mb-0">

                        <h6 class="font-medium text-gray-400 text-base uppercase">Pozice</h6>



                        <p class="font-normal text-gray-400 text-base">ServiceDesk_remote L1,L2</p>



                        <p class="font-normal text-gray-400 text-base">Systémový administrátor</p>



                        <p class="font-normal text-gray-400 text-base">RunMyProcess, JavaScript, Nette</p>



                        <p class="font-normal text-gray-400 text-base">Junior Front-End Developer, WordPress</p>



                        

                    </div>



                    <div class="space-y-8 md:space-y-16">

                        <h6 class="font-medium text-gray-400 text-base uppercase">Rok</h6>



                        <p class="font-normal text-gray-400 text-base">2022 - do dnes</p>



                        <p class="font-normal text-gray-400 text-base">2021 - 2022</p>



                        <p class="font-normal text-gray-400 text-base">2019 - 2020</p>



                        <p class="font-normal text-gray-400 text-base">2018 - 2019</p>



                        

                    </div>

                </div>

                

            </div>



        </section>
        <?php
get_footer();


