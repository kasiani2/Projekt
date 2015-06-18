<?php
$xml = simplexml_load_file("http://www.tunngle.net/api/export.xml");
for ($i = 0; $i < count($xml->Network); $i++) {
    if ($xml->Network[$i]->Category == "\nA\n") {
        $a = $xml->Network[$i]->NetworkName . "<br />";
        $tablica[]=$a;
    }
} 
$ilosc = count ($tablica);
if ($ilosc == 0){
	print 'Brak propozycji';
}
else{
for ($j=0; $j < 5; $j++){
echo $tablica[$j];
}
}
?>