<?php

$search = ["1", 2, 3, 4, 1, 10];

//      im
//      ---------------------------------------------
//      | if (in_array(1,$search,true)) {           | 
//      |   echo "we found your elment";            | 
//      | }                                         | 
//      ---------------------------------------------

function val_in_array($val,$sarry,$specified_type_only=false){
  if ($specified_type_only==false) {
      for ($i=0; $i < count($sarry); $i++) { 
       if ($val == $sarry[$i]) {
        return true;
       }
      }
  
  }elseif($specified_type_only==true){
    for ($i=0; $i < count($sarry); $i++) { 
      if ($val === $sarry[$i]) {
        return true;
      }
     }
  }else{
    return false;
  }
}


if (val_in_array("4",$search,false)) {
    echo "We Found Your Request";
  }else{
    echo "Sorry Not Found";
  }