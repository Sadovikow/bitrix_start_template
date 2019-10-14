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

// Канонические ссылки для постраничной навигации. Устраняем дубли страниц по SEO
if ($_REQUEST['PAGEN_1']) {
    global $APPLICATION;
    $APPLICATION->AddHeadString('<link href="https://'.$_SERVER['SERVER_NAME'].$APPLICATION->sDirPath.'" rel="canonical" />',true);
}
?>
