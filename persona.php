<?php
  /*Generate la gerarchia di classi in PHP che rappresenta il contesto in allegato.
  La funzione calcola_compenso deve basarsi sugli attributi intrinseci dell'oggetto per generare il valore corretto.
  La funzione to_string deve stampare in formato stringa il contenuto delle proprieta' dell'oggetto su cui e' stata definita
  (solo Persona e Impiegato la definiscono, ma se volessi, potrei invocarla su ogni tipo di impiegato ).
   Attenzione ad utilizzare un trait laddove necessario....
   */

  class Persona
  {
    public $name;
    public $lastname;
    public $fiscal_code;

    function __construct($name, $lastname, $fiscal_code)
    {
      $this->name = $name;
      $this->lastname = $lastname;
      $this->fiscal_code = $fiscal_code;
    }
  }



  class Impiegato extends Persona
  {
    public $code_employed;
    public $giorni_lavorativi;
    public $compenso_giornaliero;

    function __construct($code_employed, $compenso_giornaliero, $giorni_lavorativi)
    {
      $this->code_employed = $code_employed;
      $this->compenso_giornaliero = $compenso_giornaliero;
      $this->giorni_lavorativi = $giorni_lavorativi;
      parent::__construct($name, $lastname, $fiscal_code);
    }
    public function calc_compenso() {
      echo($this->giorni_lavorativi * $this->compenso_giornaliero);
    }
  }





  class ImpiegatoAdOre extends Impiegato
  {
    public $costo_ora;
    public $ore;

    public function __construct($costo_ora, $ore)
    {
      $this->costo_ora = $costo_ora;
      $this->ore = $ore;
      parent::__construct($name, $lastname, $fiscal_code, $code_employed);
    }
    public function calc_ore() {
      echo ($this->costo_ora * $this->ore);
    }
  }




  class ImpiegatoSuCommissione extends Impiegato
  {
    public $commissione_price;
    public $nome_commissione;

    function __construct($commissione_price, $nome_commissione)
    {
      $this->commissione_price = $commissione_price;
      $this->nome_commissione = $nome_commissione;
      parent::__construct($name, $lastname, $fiscal_code, $code_employed);
    }
    public function calc_compenso_commissione() {
       echo ($this->commissione_price);
    }
  }

 ?>
