<?php
session_start();
include 'head.php';
if(isset($_REQUEST['borrar'])){
    $numero_incidencia=$_REQUEST['num_incidencia'];

    foreach($_SESSION['incidencias'] as $clave=>$valor){
        if($valor[0]==$numero_incidencia){
            unset($_SESSION['incidencias'][$numero_incidencia]);
        }
        else{
            echo 'La incidencia '.$numero_incidencia.' no existe, escriba otra<br>';
        }
    }    
    
}
                                             
 print' 
            <strong>INTRODUCE EL IDENTIFICADOR DE LA INCIDENCIA A BORRAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              
              
              <tr><td align="right"><strong>Num Incidencia :</strong></td><td>
              <div align="left">
                    <input type="text" name="num_incidencia"/>
              </div></td></tr>
              
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="borrar" type="submit" id="borrar" value="Dar de Baja"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>';
 include 'pie.php';