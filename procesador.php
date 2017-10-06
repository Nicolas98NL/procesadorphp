
<?php

class procesador {
    function longitud ()
    {
      $numero1 = $_REQUEST ["longitud"];
      return $numero1;
    }
     function latitud ()
    {
      $numero2 = $_REQUEST ["latitud"];
      return $numero2;
    }
}
$miObjeto= new procesador();
echo $miObjeto->longitud();
echo $miObjeto->latitud();
