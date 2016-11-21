<?php 
function compararFechas($primera, $segunda)
 {
  $valoresPrimera = explode ("/", $primera);   
  $valoresSegunda = explode ("/", $segunda); 
  $diaPrimera    = $valoresPrimera[2];  
  $mesPrimera  = $valoresPrimera[1];  
  $anyoPrimera   = $valoresPrimera[0];
  $diaSegunda   = $valoresSegunda[2];  
  $mesSegunda = $valoresSegunda[1];  
  $anyoSegunda  = $valoresSegunda[0];
  $diasPrimeraJuliano = gregoriantojd($mesPrimera, $diaPrimera, $anyoPrimera);  
  $diasSegundaJuliano = gregoriantojd($mesSegunda, $diaSegunda, $anyoSegunda);     
  if(!checkdate($mesPrimera, $diaPrimera, $anyoPrimera)){
    /*echo "La fecha ".$primera." no es válida";*/
    return false;
  }elseif(!checkdate($mesSegunda, $diaSegunda, $anyoSegunda)){
    /*echo "La fecha ".$segunda." no es válida";*/
    return false;
  }else{
    return  $diasPrimeraJuliano - $diasSegundaJuliano;
  } 
}

$time = time();
/*FECHA ACTUAL*/
$segunda = date("Y/m/d", $time);
/*$primera = "29/02/2000";*/

/*FECHA DE CADUCIDAD*/
$primera = "2016/10/25";
echo compararFechas ($primera,$segunda);


if(compararFechas($primera,$segunda) == 1){
  ?>
  <script type="text/javascript">
  alert("caduca mañana");
  </script>
  <?php
}
if(compararFechas($primera,$segunda) == 0){
  ?>
  <script type="text/javascript">
   alert("caduca hoy");
  </script>
  <?php
}
if(compararFechas($primera,$segunda) < 0){
  ?>
  <script type="text/javascript">
    alert("ya caduco");
  </script>
  <?php
}
?>