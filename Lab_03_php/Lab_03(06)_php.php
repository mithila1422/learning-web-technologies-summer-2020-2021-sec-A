<?php
   
    $element = ["red", "black" , "blue", "green" ,1,2,3,4,5,6];   
    $search="black";
    echo "Element to search = $search ; <br>";
    for($i=0; $i<count($element); $i++)
    {
     if($element[$i]==$search){
        
          $a=0;
         $a+=1;
     }
    
    }
    if($a==1){
        echo "Element is found <br>";
    }
    else{
        echo "Element is not found";
    }
?>
