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
