<?php
  require ('persona.php');

  $Giovanni = new Impiegato('Giovanni','Montone','GONMNT25H22L203H',10,50,5);
  $Giovanni->print();
  $Giovanni->calc_compenso();

try {
  $Antonio = new ImpiegatoAdOre('Antonio', 'Spaziale', 'ATNSZL25L455J2052L', 252, 10, 8, 200);
  $Antonio->print();
  $Antonio->calc_ore();
} catch (Exception $e) {
    echo ($e->getMessage());
}



try {
  $Ernesto = new ImpiegatoSuCommissione('Ernesto', 'Sbirro', 'ENTSRO225450MLT205', 155, 20, 'Rifornimento dei Mezzi');
  $Ernesto->print();
  $Ernesto->calc_compenso_commissione();
} catch (Exception $e) {
    echo ($e->getMessage());
}
 ?>
