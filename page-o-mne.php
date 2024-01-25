
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
<div id= "page-o-mně">
<?php
if (have_posts()):
    while(have_posts()):
        the_post();
?>
        <?php/* the_title();*/?>
        <?php/* the_content();*/ ?>
<?php
    endwhile;
endif;
?>
</div>


<section class="py-10 md:py-16 bg-gray-100">



            <div class="container max-w-screen-xl mx-auto px-4">



                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="bg-gray-50 px-8 py-10 rounded-md">

                        <div class="w-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>

                        </div>



                        <h4 class="font-medium text-gray-700 text-lg mb-4">Zdokonalování</h4>



                        <p class="font-normal text-gray-500 text-md">S mými neustále se prohlubujícími schopnostmi v oblasti  tvorby  webových 

								stránek  ve WordPressu 

								přináším nejen technickou dokonalost, ale také schopnost efektivní 

								komunikace s klienty a plné pochopení jejich potřeb a požadavků.

						</p>

                    </div>

                    

                    <div class="bg-gray-50 px-8 py-10 rounded-md">

                        <div class="w-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codesandbox"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline><polyline points="7.5 19.79 7.5 14.6 3 12"></polyline><polyline points="21 12 16.5 14.6 16.5 19.79"></polyline><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>

                        </div>



                        <h4 class="font-medium text-gray-700 text-lg mb-4">Radost z práce</h4>



                        <p class="font-normal text-gray-500 text-md">I když programování v PHP provozuji jako můj koníček. V životně mě to naplňuje 

								a částečně si i tím čistím hlavu od hlavího pracovního vytížení. Předpokládám 

								a mám to i jako předsevzetí do nového roku, že se to stane mou prvotní náplní

								a budu v této práci fungovat na plný úvazek.</p>

                    </div>

                    

                    <div class="bg-gray-50 px-8 py-10 rounded-md">

                        <div class="w-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>

                        </div>



                        <h4 class="font-medium text-gray-700 text-lg mb-4">Má dosavadní činnost</h4>



                        <p class="font-normal text-gray-500 text-md">Prozatím jsem neměl příležitost se podílet na nějakém velkém projektu,

							spíše jsem pomáhal svým kamarádům a znamým na meších, pro ně osobních věcech,

							které nepovažuji za vhodné zde zveřejňovat. Ale i vytvoření, této mé osobní

							stránky, považuji za jistou drobnou prezentaci svých schopností a dovedností.</p>

                    </div>

                </div>



            </div>



        </section>

<?php
get_footer();


