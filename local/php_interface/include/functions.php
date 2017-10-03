<?
function dump($var, $die=false, $all=false)
{
      global $USER;
      if( ($USER->GetID()==1) || ($all==true) )
      {
            echo '<pre>';
            print_r($var);
            echo '</pre>';
      }
      if($die)
      die('hello');
}
?>
