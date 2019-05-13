<?php
  $file = fopen("nas.txt","w");
  fwrite($file, $_SERVER['REMOTE_ADDR']);
  fclose($file);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
<h1 style="color: #5e9ca0;" data-darkreader-inline-color="">Your IP: <?php echo $_SERVER['REMOTE_ADDR']?></h1>
</body>
</html>
