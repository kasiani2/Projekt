<?php
if (isset($_POST['submit'])) {
if(strlen($_POST['username'])==0)
{
echo"<div><center><font color = red><b>Nie wprowadzono loginu</font></center><div>";
}
if (strlen($_POST['username'])>0){
$tekst = $_POST['username'];

$sUrl	= "http://people.ign.com/$tekst/games";
$sSearch = 'var pageOwnerId = ';
 
$string = file_get_contents( $sUrl );

if ( strPos( $string, $sSearch ) !== false )
{
	$tt = '<textarea>'.$string.'</textarea>';
	preg_match ('#var pageOwnerId = "([a-zA-Z0-9_ ]+)"#', $tt, $wynik);
	print_r ($wynik[1]);
	header("Location: http://social-services.ign.com/v1.0/social/mediaItems/excel?personId=$wynik[1]");
	/* Redirect browser */ exit;
}

else
{
	print 'Brak danych';
}
}
}
?>
