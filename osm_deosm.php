<?php


function osm($cislo){
                        $pieces = explode(".", $cislo);
                        echo  $pieces[0]." ";
                        echo round(($pieces[1]*0.8))."/8";
                      }


function deosm($osm){
                                $prvy = explode(" ", $osm);
                                $druhy = explode("/",$prvy[1]);
                                echo  $prvy[0].".";
                                echo  round(($druhy[0]/0.8));
                    }


echo '<body style="background-color:pink">';
 $bum=2.5;echo"<br>";

osm($bum);



echo $d="2 2/8";echo"<br>";
echo $e="2 3/8";echo"<br>";
echo var_dump(deosm($d));echo"<br>";
echo $vysledok=var_dump(deosm($d)+deosm($e));echo"<br>";
echo osm($vysledok);
echo"<br>";
$array11 = array('adela', 'heno', 'adam');
$str2 = implode(",", $array11);
print_r ($kalendar=(explode(",",$str2)));echo"<br>";

$scn = "adam,heno,robert";
print_r ($scenar=(explode(",",$scn)));echo"<br>";



$result=array_intersect($kalendar,$scenar);
print_r($result);echo"<br>";

$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo $people[1];echo"<br>";
if (in_array("Glenn", $people))
{
    echo "Match found";
}
else
{
    echo "Match not found";
};echo"<br>";


$lang=1;
$international = array(
    array("table", "window", "dog"),
    array("stol", "okno", "pes"),
    array("asztal", "ablak", "kutya"),
);
echo $international[$lang][0];echo"<br>";
echo $international[$lang][1];echo"<br>";
echo $international[$lang][2];echo"<br>";