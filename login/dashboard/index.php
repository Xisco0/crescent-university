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
   
   <?php include 'header.php' ?>
    <div class="absolute z-[-600] w-full h-full ">
        
        <div class="w-full h-full pt-[60px] flex items-center gap-[20px]">
            <?php include "sidebar.php" ?>
            <div class="w-[calc(100%-280px)]">
                <div class=" w-[100%]" id="page_title"><h2 class="font-normal font-[body-font] text-[18px]"><i class="bi-speedometer2"></i> Student Dashboard Overview </h2> </div>

                <div id="page-content" class="h-full ">
                    <script>Getpages('dashboard')</script>
                </div>
            </div>
        </div>
    </div>
   <?php include "../../public/config/bottom-scripts.php" ?>
</body>
</html>