<?php
  $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
  // print index 2 of buah
  echo $ar_buah[2];
  // count buah
  echo '<br/>Jumlah Buah '.count($ar_buah);
  // cetak seluruh buah
  echo '<ol>';
  foreach($ar_buah as $buah) {
    echo '<li>'.$buah.'</li>';
  }
  echo '</ol>';
  // add buah
  $ar_buah[]="Durian";
  // delete index 1 of buah
  unset($ar_buah[1]);
  // change index 2 of buah into "Manggis"
  $ar_buah[2]="Manggis";
  // print all buah with their index
  echo '<ul>';
  foreach($ar_buah as $k => $v) {
    echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
  }
  echo '</ul>';
?>