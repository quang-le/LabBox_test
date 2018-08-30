<?php 
$filter='/(?=.*Pikaway)(?=.*#rules)/';
$testStrings=['Pikaway', '#rules','Pikaway #rules','#rulesPikaway','Pikaway really #rules', '#rules Yoda Pikaway', 'Pikaway rules'];

function testRegex($regex, $array){
    foreach($array as $string){
       if (preg_match($regex,$string)==1){
           echo '<br>'.$string.' matches';    
        }
        else{
            echo '<br>'.$string.' does not match';
        }
   
    }
}
testRegex($filter,$testStrings);
?>