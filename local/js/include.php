<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    $arJsConfig = array(
        'jquery' => array(
            'js' => '/local/js/jquery-2.2.2.min.js',
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
         'slick' => array(
            'js' => '/local/js/slick.min.js',
            'rel' => array(),
        ),
         'script' => array(
            'js' => '/local/js/script.js',
            'rel' => array(),
        ),
        'scripts' => array(
            'rel' => array(
                'jquery',
                'slick',
                'phone_mask',
                'phone_mask_value',
                'script'
                ),
        ),
    );
    foreach ($arJsConfig as $ext => $arExt) {
        CJSCore::RegisterExt($ext, $arExt);
    }
?>
