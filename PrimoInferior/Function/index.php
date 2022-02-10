<?php
  function primoInferior($num){
    $div = [];
    if($num < 0){
      echo 0;
    }else{
      for($i = 1; $i <= $num; $i++){
        $divisores = 0;

        for($j = $i; $j >= 1; $j--){
          if (($i % $j) == 0) {
            $divisores++;
          }
        }
        if ($divisores == 2){
          array_push($div, $i);
      }
      }
      echo "Numero ".$num. " = " .end($div);
    }
  }
  primoInferior(30)
?>