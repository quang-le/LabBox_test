<?php 
$list=['25','35','3.14','hello','0X1A','2e10 5','World','April 27', '3,14', '3:14', '3h14'];

function filter($array){
    $filtered=$array;
    $counter=count($array);
    for($j=0;$j<$counter;$j++){
        $split=str_split($filtered[$j]);
        for ($i=0;$i<count($split);$i++){
            if (intval($split[$i])==0 && $split[$i]!='0'){
                unset($filtered[$j]);
            }
        }
    }
    return $filtered;
}

function convert($array){
    $converted=[];
    foreach ($array as $a){
   array_push($converted,intval($a));
    }
    return $converted;
}

function add($array){
    $total=0;
    foreach($array as $number){
        $total+=$number;
    }
    return $total;
}

$listFiltered=filter($list);
$listConverted=convert($listFiltered);
$listAdded=add($listConverted);

var_dump($listAdded);
?>