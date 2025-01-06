<?php include '../../public/config/static.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  Lang="en">
<head>
    <?php include 'src/meta.php' ?>
    <title><?php echo $thename ?> | dashboard</title>
</head>
<body>
   <?php include 'src/preloader.php' ?>
    <div class="overlay"></div>
    <?php include '../../public/styles/alert.php' ?>
   <?php include 'header.php' ?>
    <div class="absolute z-[-600] w-full h-full pt-[40px]">
        
        
        <?php include "sidebar.php" ?>
        <?php include "open-side.php" ?>
        <div class="w-[calc(100%-300px)] custom-screen-dh:left-1/2 custom-screen-dh:-translate-x-1/2 custom-screen-dh:w-[calc(100%-50px)] absolute z-[-1] right-0 top-[10%] overflow-auto">
            <div class=" w-[100%]" id="page_title"><h2 class="font-normal font-[body-font] text-[18px]"><i class="bi-speedometer2"></i> Student Dashboard Overview </h2> </div>

            <div id="page-content" class="h-full">
                <script>Getpages('change-password')</script>
            </div>
        </div>
       
    </div>

   <?php include "../../public/config/bottom-scripts.php" ?>
</body>
</html>