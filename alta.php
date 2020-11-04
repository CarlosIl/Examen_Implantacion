<?php
session_start();
include 'head.php';

if(isset($_REQUEST['enviar'])){
      $_SESSION['autoincremento']++;

      if(isset($_REQUEST['urgente'])){
            $_SESSION['urge?']='Si';
      }
      else{
            $_SESSION['urge?']='No';
      }

      $tipo[]=$_REQUEST['tipo'];
      foreach ($tipo as $valor)
            $_SESSION['tipo?']=$valor;

      $lugar=$_REQUEST['lugar'];
      $_SESSION['lugar?']=$lugar;

      $descripcion=$_REQUEST['descripcion'];
      $_SESSION['descripcion?']=$descripcion;
      if(($_SESSION['autoincremento'] && $_SESSION['urge?'] && $_SESSION['tipo?'] && $_SESSION['lugar?'] && $_SESSION['descripcion?']) == TRUE){
            if(isset($_SESSION['nuevas_incidencias'])){
                  $fechaActual = date('d-m-Y H:i:s');
                  array_push($_SESSION['incidencias'],array($_SESSION['autoincremento']++,$_SESSION['urge?'],$_SESSION['tipo?'],$fechaActual,$_SESSION['lugar?'],session_id(),$_SESSION['descripcion?']));
            }
      }
      else{
            echo 'Ha habido un error, complete y revise su consulta e intenteló de nuevo';
      }

}
                                             
 print' 
        <h2 class="postheader">FORMULARIO ALTA INCIDENCIA</h2>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              <tr>
              <td align="right"><strong>Urgente? :</strong></td>
              <td>

              <input type="checkbox" name="urgente" value="urg"/>Si											  </td></tr>
              <tr><td align="right"><strong>Tipo :</strong></td><td>
              <div align="left">
                    <select name="tipo">
                      <option value="Basuras">Basuras</option>
                      <option value="Aseo Urbano">Aseo Urbano</option>
                      <option value="Mobiliario Urbano">Mobiliario Urbano</option>
                      <option value="Vandalismo">Vandalismo</option>
                       <option value="Transporte">Transporte</option>
                      <option value="Señales y Semaforos">Señales y Semaforos</option>
                      <option value="Mobiliario Urbano">Otros</option>
                      
                    </select>
              </div></td></tr>
              
              <tr><td align="right"><strong>Lugar :</strong></td><td>
              <div align="left">
                    <input type="text" name="lugar" size=35"/>
              </div></td></tr>
              <tr><td align="right"><strong>Descripcion: </strong></td><td>
              <div align="left">
                    <textarea cols=50 rows=4 name="descripcion"></textarea>
              </div></td></tr>
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="enviar" type="submit" id="enviar" value="Dar de alta"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>
<div id="imagen1">
        

        </div>        
';

 include 'pie.php';
											
                           