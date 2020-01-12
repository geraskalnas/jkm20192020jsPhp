<!DOCTYPE HTML>
 
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Biblioteka LIRAGIS</title>
</head>
 
<body>
<?php
$cur = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
$cur .= "?object="
?>
<div id="header">
    <h1>Biblioteka</h1>
    <ul class="nav global">
        <li><a href="<?php echo $cur."readers"; ?>">Skaitytojai</a></li>
        <li><a href="<?php echo $cur."books"; ?>">Knygos</a></li>
        <li><a href="<?php echo $cur."issue"; ?>">Knygų išdavimas</a></li>
    </ul>
 
</div>