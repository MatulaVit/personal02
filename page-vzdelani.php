<?php get_header(); ?>


<div id= "page-Vzdelani">
<?php
if (have_posts()):
    while(have_posts()):
        the_post();
?>
        <h2><?php/* the_title();*/?></h2>
        <div id="page-content"><?php/* the_content(); */?></div>
        
<?php
    endwhile;
endif;
?>
</div>

<section class="py-10 md:py-16 bg-gray-100">



            <div class="container max-w-screen-xl mx-auto px-4">



                <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Vzdělání</h1>



                <p class="font-normal text-gray-500 text-xs md:text-base mb-20">Níže je shrnutí míst, kde jsem studoval</p>



                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="bg-gray-50 px-8 py-10 rounded-md">

                        <h4 class="font-medium text-gray-700 text-lg mb-4">2021 – 2022</h4>



                        <p class="font-normal text-gray-500 text-md mb-4"><b>Udemy kurzy:</b><br> The Modern Python3 Bootcamp,<br> 

							The Complete Pandas Bootcamp 2022: Data Science with Python,<br> Python 

							Data Science with Pandas:Master 12 Advanced Projects,<br> Complete Python Bootcamp

						</p>



                       

                    </div>



                    <div class="bg-gray-50 px-8 py-10 rounded-md">

                        <h4 class="font-medium text-gray-700 text-lg mb-4">04/2021 – 10/2021</h4>



                        <p class="font-normal text-gray-500 text-md mb-4"><b>VŠB – TU Ostrava, rekvalifikační kurz Správa počítačových sítí

								-Windows Server:</b> DHCP, DNS, IIS, firewall, RRAS, Group Policy,      

								zálohování, EFS, IPSec, NPS, NAP, DFS, WSUS, BitLocker,

								programování v PowerShellu, Základy Python

								-Další technologie: správa MS SQL serveru, MS Azure, správa clusterů

								v Hyper-V, Docker, Citrix, správa MS Office365

								-Linux RHEL/CentOS 6 až 8: konfigurační soubory, balení souborů, 

								balíčky ( rpm, yum), LVM disky, Iptables, BIND, Postfix, Samba,NFS,

								DHCP, Apache, programování v BASH

								-Konfigurace sítí Cisco: Konfigurace router, switch, VLAN, NAT, OSPF,

								Wi-Fi, subnetting

						</p>



                        

                    </div>



                    <div class="bg-gray-50 px-8 py-10 rounded-md">

                        <h4 class="font-medium text-gray-700 text-lg mb-4">2019 – 2020</h4>



                        <p class="font-normal text-gray-500 text-md mb-4"><b>Udemy kurzy:</b><br> Object Oriented PHP & MVC,<br> Modern JavaScript From The Beginning,<br> Querying SQL,<br> 

								Microsoft Power BI Desktop,<br> Azure Databricks&Spark Core For Data Engineers

						</p>



                        

                    </div>



                    <div class="bg-gray-50 px-8 py-10 rounded-md">

                        <h4 class="font-medium text-gray-700 text-lg mb-4">06/2018 – 12/2018</h4>



                        <p class="font-normal text-gray-500 text-md mb-4"><b>VŠB-TU Ostrava, Počítačový rekvalifikační kurz programování v OOP:</b> Visual Basic,

								VB.Net, C#, .NET, Java, MS SQL+ Oracle, MS Acces, HTML + 

								CSS, JavaScript, PHP + MySQL, WordPress   

						</p>



                        

                    </div>



                    <div class="bg-gray-50 px-8 py-10 rounded-md">

                        <h4 class="font-medium text-gray-700 text-lg mb-4">09/1989 - 06/1994 </h4>



                        <p class="font-normal text-gray-500 text-md mb-4">VŠB-TU Ostrava, FMMI, Materiálové inženýrství,

								Diplom Ing. 

						</p>



                        

                    </div>



                    

                </div>



            </div>



        </section>
<?php
get_footer();