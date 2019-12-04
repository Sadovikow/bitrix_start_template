<?
/**
 * Default dump
 *
 * @param   $var
 * @param   $id
 * @param   $all
 *
 * @return  mixed
 */
function dump($var, $id=false, $all=false)
{
      global $USER;
      if( ($USER->GetID()==1) || ($all==true) || $USER->GetID()==$id)
      {
            echo '<pre>';
            print_r($var);
            echo '</pre>';
      }
}

/**
 * Преобразование количества "цифрой" в количество "словом"
 * Чтобы было удобнее формировать массивы со склонениями, запомните ряд чисел 1-2-5,
 * а потом мысленно подставляйте их в массив: (один "рубль", два "рубля", пять "рублей")
 *     $num = 3;
 *     $words = array('новость', 'новости', 'новостей');
 *     echo $num . '  ' . num2word($num, $words); // сколько новостей
 *
 * @param   $n
 * @param   $words
 *
 * @return  mixed
 */
function num2word($num, $words)
{
    $num = $num % 100;
    if ($num > 19) {
        $num = $num % 10;
    }
    switch ($num) {
        case 1: {
            return($words[0]);
        }
        case 2: case 3: case 4: {
            return($words[1]);
        }
        default: {
            return($words[2]);
        }
    }
}


/**
 * Colored dump
 *
 * @param   $array
 * @param   $opened
 * @param   $id
 * @param   $all
 *
 * @return  mixed
 */
function cdump($array, $opened = true, $id = false, $all = false)
{
    global $USER;
    if (($USER->GetID() == 1) || ($all == true) || $USER->GetID() == $id) {
        coloredPrint($array, $opened);
    }
}

function coloredPrint($array, $opened = true)
{
    if ($opened)
        $opened = ' open';
    if (is_object($array) or is_array($array)) {
        echo '<div style="font-weight: 500; font-family: Courier New, monospace;">';
        echo '<details' . $opened . '>';
        echo '<summary style="font-weight: 700;">';
        echo (is_object($array)) ? 'Object {' . count((array)$array) . '}' : 'Array [' . count($array) . ']';
        echo '</summary>';
        ColoredPrintRec($array, $opened);
        echo '</details>';
        echo '</div>';
    }
}

function ColoredPrintRec($array, $opened, $margin = 20)
{
    if (!is_object($array) && !is_array($array))
        return;

    foreach ($array as $key => $value) {
        if (is_object($value) or is_array($value)) {
            echo '<details style="padding-left:' . $margin . 'px" ' . $opened . '>';
            echo '<summary style="font-weight: 700;">';
            echo (is_object($value)) ? $key . '<span style="color: #6e7072">&nbsp;{Object = (' . count((array)$value) . ')}</span>' : $key . '<span style="color: #6e7072">&nbsp;[Array = (' . count($value) . ')]</span>';
            echo '</summary>';
            ColoredPrintRec($value, $opened, $margin + 5);
            echo '</details>';
        } else {
            switch (gettype($value)) {
                case 'string':
                    $bgc = '#e9837b';
                    break;
                case 'double':
                case 'integer':
                    $bgc = '#2eae51';
                    break;
                case 'boolean':
                    $bgc = '#cb7829';
                    break;
            }
            echo '<div style="padding-left:' . $margin . 'px">' . $key . ' : <span style="font-weight: 600; color:' . $bgc . '">' . $value . '</span><span style="color: #77b0c2"> (' . gettype($value) . ')</span></div>';
        }
    }
}


/* SEO CANONICAL (Проставление канонических ссылок в каталогах и других ссылках) */
    $urlname = $APPLICATION->sDirPath;

    if(strpos($urlname, 'filter/clear/apply/')) {
        $urlname = str_replace('filter/clear/apply/', "", $urlname);
    }
    else {
        $urlname = $urlname;
    }
     
    if ($_REQUEST['PAGEN_1'] || $_REQUEST['show'] || $_REQUEST['sort'] || $_REQUEST['del_filter'] || strpos($APPLICATION->sDirPath, 'filter/clear/apply/')) {
        global $APPLICATION;
        $APPLICATION->AddHeadString('<link href="https://'.$_SERVER['SERVER_NAME'].$urlname.'" rel="canonical" />',true);
    }
/* SEO CANONICAL */
?>
