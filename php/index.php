<?php
  $myfile = fopen("nas.txt", "r") or die("Unable to open file!");
  $ip = fread($myfile,filesize("nas.txt"));
  fclose($myfile);

  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    $protocol  = "https";
    $port = 8081;
  } else {
    $protocol  = "http";
    $port = 8080:
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
<h1 style="color: #5e9ca0;" data-darkreader-inline-color="">NAS IP: <?php echo $ip?></h1>
<h2 style="color: #2e6c80;" data-darkreader-inline-color="">Sitemap</h2>
<ul>
<?php
  $apps = array("admin.php", "calibre", "kod", "aria2");
  foreach ($apps as $app) {
    echo '<li style="color: #2e6c80;" data-darkreader-inline-color=""><a href="' . $protocol . '://' . $ip . ':' . $port . '/' . $app . '">' . $app . '</a></li>';
  }
?>
</ul>
</body>
</html>
