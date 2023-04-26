<?php
session_start();
global $baseurl;
global $server_type;
global $current_page_link;
$config         = array();
$config['Server_Name'] = strtoupper($_SERVER['SERVER_NAME']);


		
switch ($config['Server_Name']) {

    case "LOCALHOST":
        $baseurl = "http://localhost/cma-html/";
        $server_type = 'local';
		define("INSTALL_DIR", "/cma-html/");
		//$config['physical_path']		=	'E:/wamp64/www'. INSTALL_DIR;
		$config['virtual_path']			=	'http://'. $_SERVER['HTTP_HOST']. INSTALL_DIR;
		$config['Image_Url']			=	'http://'. $_SERVER['HTTP_HOST']. INSTALL_DIR."images/";

        break;

    case "FRONT-END.DEPLOYME.CO.ZA":
        $baseurl = "https://front-end.deployme.co.za/cma-html/";
        $server_type = 'local';
		define("INSTALL_DIR", "/cma-html/");
		//$config['physical_path']		=	'E:/wamp64/www'. INSTALL_DIR;
		$config['virtual_path']			=	'https://'. $_SERVER['HTTP_HOST']. INSTALL_DIR;
		$config['Image_Url']			=	'https://'. $_SERVER['HTTP_HOST']. INSTALL_DIR."images/";
        break;

    default:
    case "themavenacademy.one":
    case "THEMAVENACADEMY.ONE":
    case "WWW.THEMAVENACADEMY.ONE":
        $baseurl = "https://themavenacademy.one/";
        $server_type = 'live';
		define("INSTALL_DIR", "/");
		$config['virtual_path']			=	'https://'. $_SERVER['HTTP_HOST']. INSTALL_DIR;
		$config['Image_Url']			=	'https://'. $_SERVER['HTTP_HOST']. INSTALL_DIR."images/";
        break;
}

//$current_link =$config['virtual_path'].$_SERVER['REQUEST_URI'];
$current_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>