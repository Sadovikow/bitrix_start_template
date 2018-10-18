<?
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
?>
