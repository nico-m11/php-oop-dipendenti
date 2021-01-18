<?php
  require ('persona.php');


  $Giovanni = new Impiegato(10,50,5);
  $Giovanni->name = 'Giovanni';
  $Giovanni->lastname = 'Montone';
  $Giovanni->fiscal_code = 'ASJHSA41515ncdjk';
  var_dump($Giovanni);
  $Giovanni->calc_compenso();


  $Antonio = new ImpiegatoAdOre(5, 8, 200);
  $Antonio->name = 'Antonio';
  $Antonio->lastname = 'Spaziale';
  $Antonio->fiscal_code = 'AJKBHJHB20200AAA';
  $Antonio->code_employed = 754;
  var_dump($Antonio);
  $Antonio->calc_ore();

  $Ernesto = new ImpiegatoSuCommissione(20, 'Rifornimento dei mezzi');
  $Ernesto->name = 'Ernesto';
  $Ernesto->lastname = 'Sbirro';
  $Ernesto->fiscal_code = 'ERuidfjksd125564156';
  $Ernesto->code_employed = 222;
  var_dump($Ernesto);
  $Ernesto->calc_compenso_commissione();
 ?>
