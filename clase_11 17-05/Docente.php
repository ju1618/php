<?php

  class Docente extends Usuario implements Presentable
  {
    protected $edad;

    public function presentarse ()
      echo "Hola!, soy " . $this->nombreCompleto . ", tu docente de FullStack aquí en Digital House. <br> Tengo " . getEdad();
    }
  }
