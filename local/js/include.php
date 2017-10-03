<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    $arJsConfig = array(
        'jquery' => array(
            'js' => '/local/js/libraries/jQuery/jquery.js',
            'rel' => array(),
        ),
        'jquery-migrate' => array(
            'js' => '/local/js/libraries/jQuery/jquery-migrate.js',
            'rel' => array(),
        ),
        'jquery-ui' => array(
            'js' => '/local/js/libraries/jQuery/jquery-ui.js',
            'rel' => array(),
        ),
        'phone_mask' => array(
            'js' => '/local/js/inputmask.js',
            'rel' => array(),
        ),
        'phone_mask_value' => array(
            'js' => '/local/js/jquery.inputmask.js',
            'rel' => array(),
        ),
         'lightbox' => array(
            'js' => '/local/js/lightbox.js',
            'css' => '/local/js/lightbox.css',
            'rel' => array(),
        ),
         'slick' => array(
            'js' => '/local/js/slick.min.js',
            'rel' => array(),
        ),
        'sadovikow' => array(
            'js' => '/local/js/sadovikow.js',
            'rel' => array(),
        ),
        'scripts' => array(
            'rel' => array(
                'jquery',
                'jquery-migrate',
                'jquery-ui',
                'phone_mask',
                'phone_mask_value',
                'sadovikow'
                ),
        ),
    );
    foreach ($arJsConfig as $ext => $arExt) {
        CJSCore::RegisterExt($ext, $arExt);
    }
?>


