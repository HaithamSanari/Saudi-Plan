<?php 

require_once 'CssFlipper.php';
include 'lang.php';

header('Content-Type: text/css');

$css = file_get_contents($_GET['filename']);

if ($lang['direction'] == 'rtl') {
  echo CssFlipper::flipCss($css);
}else{
  echo $css;
}

?>