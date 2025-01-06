<?php include '../../public/config/static.php'?>
<?php 
$action=$_POST['action'];
	switch ($action){	

	case 'get-form':
	    $page='reset_password';
		require_once ('index-page.php');
	break;
	
	case 'reset_successful':
	    $page='finish_reset_password';
		require_once ('index-page.php');
	break;

	case 'email_verification':
	    $page='finish-signup';
		require_once ('index-page.php');
	break;

	case 'email_success':
	    $page='registration-success';
		require_once ('index-page.php');
	break;

    }
?>