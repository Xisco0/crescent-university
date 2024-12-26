<?php include '../public/config/static.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  Lang="en">
<head>
    <?php include 'src/meta.php' ?>
    <title><?php echo $thename ?></title>
</head>
<body>
   <?php include 'src/preloader.php' ?>
   <?php include '../public/styles/alert.php' ?>
    <div class="overlay"></div>
    <div class="upperlay flex justify-center items-center">
        <div class="w-[85%] h-[85%] rounded-[5px] m-auto max-w-[1200px] flex items-center custom-screen:flex-col custom-screen:justify-center">
            <div class="w-[calc(100%-450px)] h-[90%] flex flex-col justify-center items-center" data-aos="fade-in" data-aos-duration="2200">
                
                <div class="m-auto flex flex-col justify-center items-center custom-screen:hidden" >
                    <img src="src/all-images/images/single_cre.fw.png" alt="logo" style="filter: drop-shadow(1px 0px 20px rgba(255, 255, 255, 1));">
                    <h2 class="font-[title-font] text-[var(--main-color)] text-[32px] text-center">WELCOME TO CRESCENT UNIVERSITY <br class="clear"> STUDENT PORTAL</h2>
                </div>
            </div>

            <div class="w-[480px] h-[550px] custom-screen-ml:py-[20px] custom-screen-ml:h-full bg-[var(--main-color)] rounded-[5px] shadow-lg custom-screen:w-full" data-aos="fade-in" data-aos-duration="2200">
                <div class="p-[10px]">
                    <?php include $page='login'?>
                    <?php include 'config/index-page.php' ?>
                </div>

               
            </div>

        </div>
    </div>
   <?php include "src/bottom-scripts.php"?>
</body>
</html>