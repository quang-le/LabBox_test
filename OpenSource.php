<?php 
$size=99;

function populate($number){
    $array=[];
    for($i=1;$i<=$number;$i++){
        array_push($array,$i);
    }
    return $array;
}

function sloganMaker($array){
    foreach($array as $a){
        if($a%3==0 && $a %7==0){
            echo 'OpenSource, ';
        }
        else if($a%3==0){
            echo'Open ';
        }
        else if($a%7==0){
            echo'Source ';
        }
        else {
            echo $a.' ';
        }
    }
}

$output=populate(99);
sloganMaker($output);
?>