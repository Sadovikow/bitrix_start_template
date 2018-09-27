<?
// Functions
if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/functions.php")){
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/functions.php");
}
// Iblock constants
if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/constants.php")){
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/constants.php");
}

// JavaScript libraries
if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/js/include.php")){
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/js/include.php");
}

// Handlers
if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/handlers.php")){
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/handlers.php");
}  ?>
