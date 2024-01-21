<?php 

function lampu($noLmpu, $kon, $kon1, $kon2, $kon3, $kon4, $kon5, $kon6, $kon7, $kon8, $kon9, $kon10){
    for($noLmpu; $noLmpu <= $kon; $noLmpu++){
        if($noLmpu == $kon1 || $noLmpu == $kon2 || $noLmpu == $kon3 || $noLmpu == $kon4 || $noLmpu == $kon5){
            echo "Lampu Lalu Lintas no $noLmpu tidak lancar <br/>";
        } else if($noLmpu == $kon6 || $noLmpu == $kon7 || $noLmpu == $kon8 || $noLmpu == $kon9){
            echo "Lampu Lalu Lintas no $noLmpu tidak berfungsi <br/>";
        } else if($noLmpu == $kon1 || $noLmpu == $kon10){
            echo "Lampu Lalu Lintas no $noLmpu sedang diperbaiki <br/>";
        } else{
            echo "Lampu Lalu Lintas no $noLmpu Lancar <br/>";
        }
    }
  }
  echo lampu(1, 20, 2, 4, 10, 12, 18, 5, 11, 13, 14, 16);

?>