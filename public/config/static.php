
<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);

    $thename='Crescent University'; 
    $page = basename($_SERVER['SCRIPT_NAME']);
    $website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $ip_address=$_SERVER['REMOTE_ADDR']; //ip used
    $sysname=gethostname();//computer used
    /////////////////////////////////////////////////////////////////
    $website_url='http://localhost/crescent_university.com';
    // $website_url='https://207d-102-89-47-118.ngrok-free.app/crescent_university.com';
    $latest_version= date('Ymdhis');
?>



<script>
var website_url='http://localhost/crescent_university.com';
// var website_url='https://207d-102-89-47-118.ngrok-free.app/crescent_university.com'
var admin_portal_dashboard = website_url+'/login/config/code';
var admin_portal = website_url+'/login/dashboard/config/code';
var dashboards= website_url +'/login/dashboard';
var apiKey='43411331-74e2-46fd-8cb5-9dc4742dd15c';
// var endPoint='https://207d-102-89-47-118.ngrok-free.app/crescent_university-api/api/user';
var endPoint='http://localhost/crescent_university-api/api/user';
</script> 