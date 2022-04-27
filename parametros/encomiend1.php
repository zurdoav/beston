<?php
include("abrir-conexcion.php");
if($_REQUEST['marcas'] and $_REQUEST['precio'])
                        {
                            if($_REQUEST['marcas']=='Samsung' and $_REQUEST['precio']=='$1000-2500')
                            {
                            $resultado = mysqli_query($conexcion,"SELECT * FROM $tabla_db1 WHERE marca = 'Samsung' AND precio BETWEEN 1000 AND 2500");
                                    while($consulta = mysqli_fetch_array($resultado)){
                                        echo '
                                        <tdoby>
                                            <tr>
                                                <td><center>'.$consulta['modelo'].'</center></td>
                                                <td><center>'.$consulta['so'].'</center></td>
                                                <td><center>'.$consulta['procesador'].'</center></td>
                                                <td><center>'.$consulta['pantalla'].'</center></td>
                                                <td><center>'.$consulta['tec_pantalla'].'</center></td>
                                                <td><center>'.$consulta['camara_delantera'].'</center></td>
                                                <td><center>'.$consulta['camara_trasera'].'</center></td>
                                                <td><center>'.$consulta['ram'].'</center></td>
                                                <td><center>'.$consulta['almacenamiento'].'</center></td>
                                                <td><center>'.$consulta['bateria'].'</center></td>
                                                <td><center>'.$consulta['precio'].'</center></td>
                                            </tr>
                                        </tdoby>
                                        ';
                                }

                            }
                            if($_REQUEST['marcas']=='Samsung' and $_REQUEST['precio']=='$2500-4000')
                            {
                            $resultado = mysqli_query($conexcion,"SELECT * FROM $tabla_db1 WHERE marca = 'Samsung' AND precio BETWEEN 2500 AND 4000");
                                    while($consulta = mysqli_fetch_array($resultado)){
                                        echo '
                                        <tdoby>
                                            <tr>
                                                <td><center>'.$consulta['modelo'].'</center></td>
                                                <td><center>'.$consulta['so'].'</center></td>
                                                <td><center>'.$consulta['procesador'].'</center></td>
                                                <td><center>'.$consulta['pantalla'].'</center></td>
                                                <td><center>'.$consulta['tec_pantalla'].'</center></td>
                                                <td><center>'.$consulta['camara_delantera'].'</center></td>
                                                <td><center>'.$consulta['camara_trasera'].'</center></td>
                                                <td><center>'.$consulta['ram'].'</center></td>
                                                <td><center>'.$consulta['almacenamiento'].'</center></td>
                                                <td><center>'.$consulta['bateria'].'</center></td>
                                                <td><center>'.$consulta['precio'].'</center></td>
                                            </tr>
                                        </tdoby>
                                        ';
                                }
                                
                            }
                            if($_REQUEST['marcas']=='Samsung' and $_REQUEST['precio']=='$4000-5500')
                            {
                            $resultado = mysqli_query($conexcion,"SELECT * FROM $tabla_db1 WHERE marca = 'Samsung' AND precio BETWEEN 4000 AND 5500");
                                    while($consulta = mysqli_fetch_array($resultado)){
                                        echo '
                                        <tdoby>
                                            <tr>
                                                <td><center>'.$consulta['modelo'].'</center></td>
                                                <td><center>'.$consulta['so'].'</center></td>
                                                <td><center>'.$consulta['procesador'].'</center></td>
                                                <td><center>'.$consulta['pantalla'].'</center></td>
                                                <td><center>'.$consulta['tec_pantalla'].'</center></td>
                                                <td><center>'.$consulta['camara_delantera'].'</center></td>
                                                <td><center>'.$consulta['camara_trasera'].'</center></td>
                                                <td><center>'.$consulta['ram'].'</center></td>
                                                <td><center>'.$consulta['almacenamiento'].'</center></td>
                                                <td><center>'.$consulta['bateria'].'</center></td>
                                                <td><center>'.$consulta['precio'].'</center></td>
                                            </tr>
                                        </tdoby>
                                        ';
                                }
                                
                            }
                            if($_REQUEST['marcas']=='Samsung' and $_REQUEST['precio']=='$5500-7000')
                            {
                            $resultado = mysqli_query($conexcion,"SELECT * FROM $tabla_db1 WHERE marca = 'Samsung' AND precio BETWEEN 5600 AND 7000");
                                    while($consulta = mysqli_fetch_array($resultado)){
                                        echo '
                                        <tdoby>
                                            <tr>
                                                <td><center>'.$consulta['modelo'].'</center></td>
                                                <td><center>'.$consulta['so'].'</center></td>
                                                <td><center>'.$consulta['procesador'].'</center></td>
                                                <td><center>'.$consulta['pantalla'].'</center></td>
                                                <td><center>'.$consulta['tec_pantalla'].'</center></td>
                                                <td><center>'.$consulta['camara_delantera'].'</center></td>
                                                <td><center>'.$consulta['camara_trasera'].'</center></td>
                                                <td><center>'.$consulta['ram'].'</center></td>
                                                <td><center>'.$consulta['almacenamiento'].'</center></td>
                                                <td><center>'.$consulta['bateria'].'</center></td>
                                                <td><center>'.$consulta['precio'].'</center></td>
                                            </tr>
                                        </tdoby>
                                        ';
                                }
                                
                            }
                            if($_REQUEST['marcas']=='Samsung' and $_REQUEST['precio']=='$7000-8500')
                            {
                            $resultado = mysqli_query($conexcion,"SELECT * FROM $tabla_db1 WHERE marca = 'Samsung' AND precio BETWEEN 7000 AND 8500");
                                    while($consulta = mysqli_fetch_array($resultado)){
                                        echo '
                                        <tdoby>
                                            <tr>
                                                <td><center>'.$consulta['modelo'].'</center></td>
                                                <td><center>'.$consulta['so'].'</center></td>
                                                <td><center>'.$consulta['procesador'].'</center></td>
                                                <td><center>'.$consulta['pantalla'].'</center></td>
                                                <td><center>'.$consulta['tec_pantalla'].'</center></td>
                                                <td><center>'.$consulta['camara_delantera'].'</center></td>
                                                <td><center>'.$consulta['camara_trasera'].'</center></td>
                                                <td><center>'.$consulta['ram'].'</center></td>
                                                <td><center>'.$consulta['almacenamiento'].'</center></td>
                                                <td><center>'.$consulta['bateria'].'</center></td>
                                                <td><center>'.$consulta['precio'].'</center></td>
                                            </tr>
                                        </tdoby>
                                        ';
                                }
                                
                            }
                            if($_REQUEST['marcas']=='Samsung' and $_REQUEST['precio']=='$8500-10500')
                            {
                            $resultado = mysqli_query($conexcion,"SELECT * FROM $tabla_db1 WHERE marca = 'Samsung' AND precio BETWEEN 8500 AND 10500");
                                    while($consulta = mysqli_fetch_array($resultado)){
                                        echo '
                                        <tdoby>
                                            <tr>
                                                <td><center>'.$consulta['modelo'].'</center></td>
                                                <td><center>'.$consulta['so'].'</center></td>
                                                <td><center>'.$consulta['procesador'].'</center></td>
                                                <td><center>'.$consulta['pantalla'].'</center></td>
                                                <td><center>'.$consulta['tec_pantalla'].'</center></td>
                                                <td><center>'.$consulta['camara_delantera'].'</center></td>
                                                <td><center>'.$consulta['camara_trasera'].'</center></td>
                                                <td><center>'.$consulta['ram'].'</center></td>
                                                <td><center>'.$consulta['almacenamiento'].'</center></td>
                                                <td><center>'.$consulta['bateria'].'</center></td>
                                                <td><center>'.$consulta['precio'].'</center></td>
                                            </tr>
                                        </tdoby>
                                        ';
                                }
                                
                            }
                            if($_REQUEST['marcas']=='Samsung' and $_REQUEST['precio']=='$10500-12000')
                            {
                            $resultado = mysqli_query($conexcion,"SELECT * FROM $tabla_db1 WHERE marca = 'Samsung' AND precio BETWEEN 10500 AND 12000");
                                    while($consulta = mysqli_fetch_array($resultado)){
                                        echo '
                                        <tdoby>
                                            <tr>
                                                <td><center>'.$consulta['modelo'].'</center></td>
                                                <td><center>'.$consulta['so'].'</center></td>
                                                <td><center>'.$consulta['procesador'].'</center></td>
                                                <td><center>'.$consulta['pantalla'].'</center></td>
                                                <td><center>'.$consulta['tec_pantalla'].'</center></td>
                                                <td><center>'.$consulta['camara_delantera'].'</center></td>
                                                <td><center>'.$consulta['camara_trasera'].'</center></td>
                                                <td><center>'.$consulta['ram'].'</center></td>
                                                <td><center>'.$consulta['almacenamiento'].'</center></td>
                                                <td><center>'.$consulta['bateria'].'</center></td>
                                                <td><center>'.$consulta['precio'].'</center></td>
                                            </tr>
                                        </tdoby>
                                        ';
                                }
                                
                            }
                            if($_REQUEST['marcas']=='Samsung' and $_REQUEST['precio']=='')
                            {
                            $resultado = mysqli_query($conexcion,"SELECT * FROM $tabla_db1 WHERE marca = 'Samsung' AND precio BETWEEN 7000 AND 8500");
                                    while($consulta = mysqli_fetch_array($resultado)){
                                        echo '
                                        <tdoby>
                                            <tr>
                                                <td><center>'.$consulta['modelo'].'</center></td>
                                                <td><center>'.$consulta['so'].'</center></td>
                                                <td><center>'.$consulta['procesador'].'</center></td>
                                                <td><center>'.$consulta['pantalla'].'</center></td>
                                                <td><center>'.$consulta['tec_pantalla'].'</center></td>
                                                <td><center>'.$consulta['camara_delantera'].'</center></td>
                                                <td><center>'.$consulta['camara_trasera'].'</center></td>
                                                <td><center>'.$consulta['ram'].'</center></td>
                                                <td><center>'.$consulta['almacenamiento'].'</center></td>
                                                <td><center>'.$consulta['bateria'].'</center></td>
                                                <td><center>'.$consulta['precio'].'</center></td>
                                            </tr>
                                        </tdoby>
                                        ';
                                }
                                
                            }
                            if($_REQUEST['marcas']=='Samsung' and $_REQUEST['precio']=='$12000-13500')
                            {
                            $resultado = mysqli_query($conexcion,"SELECT * FROM $tabla_db1 WHERE marca = 'Samsung' AND precio BETWEEN 12000 AND 13500");
                                    while($consulta = mysqli_fetch_array($resultado)){
                                        echo '
                                        <tdoby>
                                            <tr>
                                            <td><center>'.$consulta['modelo'].'</center></td>
                                            <td><center>'.$consulta['so'].'</center></td>
                                            <td><center>'.$consulta['procesador'].'</center></td>
                                            <td><center>'.$consulta['pantalla'].'</center></td>
                                            <td><center>'.$consulta['tec_pantalla'].'</center></td>
                                            <td><center>'.$consulta['camara_delantera'].'</center></td>
                                            <td><center>'.$consulta['camara_trasera'].'</center></td>
                                            <td><center>'.$consulta['ram'].'</center></td>
                                            <td><center>'.$consulta['almacenamiento'].'</center></td>
                                            <td><center>'.$consulta['bateria'].'</center></td>
                                            <td><center>'.$consulta['precio'].'</center></td>
                                            </tr>
                                        </tdoby>
                                        ';
                                }
                                
                            }
                            if($_REQUEST['marcas']=='Samsung' and $_REQUEST['precio']=='$13500-15000')
                            {
                            $resultado = mysqli_query($conexcion,"SELECT * FROM $tabla_db1 WHERE marca = 'Samsung' AND precio BETWEEN 13500 AND 15000");
                                    while($consulta = mysqli_fetch_array($resultado)){
                                        echo '
                                        <tdoby>
                                            <tr>
                                                <td><center>'.$consulta['modelo'].'</center></td>
                                                <td><center>'.$consulta['so'].'</center></td>
                                                <td><center>'.$consulta['procesador'].'</center></td>
                                                <td><center>'.$consulta['pantalla'].'</center></td>
                                                <td><center>'.$consulta['tec_pantalla'].'</center></td>
                                                <td><center>'.$consulta['camara_delantera'].'</center></td>
                                                <td><center>'.$consulta['camara_trasera'].'</center></td>
                                                <td><center>'.$consulta['ram'].'</center></td>
                                                <td><center>'.$consulta['almacenamiento'].'</center></td>
                                                <td><center>'.$consulta['bateria'].'</center></td>
                                                <td><center>'.$consulta['precio'].'</center></td>
                                            </tr>
                                        </tdoby>
                                        ';
                                }
                                
                            }
                            if($_REQUEST['marcas']=='Samsung' and $_REQUEST['precio']=='$+15000')
                            {
                            $resultado = mysqli_query($conexcion,"SELECT * FROM $tabla_db1 WHERE marca = 'Samsung' AND precio BETWEEN 15000 AND 50000");
                                    while($consulta = mysqli_fetch_array($resultado)){
                                        echo '
                                        <tdoby>
                                            <tr>
                                                <td><center>'.$consulta['modelo'].'</center></td>
                                                <td><center>'.$consulta['so'].'</center></td>
                                                <td><center>'.$consulta['procesador'].'</center></td>
                                                <td><center>'.$consulta['pantalla'].'</center></td>
                                                <td><center>'.$consulta['tec_pantalla'].'</center></td>
                                                <td><center>'.$consulta['camara_delantera'].'</center></td>
                                                <td><center>'.$consulta['camara_trasera'].'</center></td>
                                                <td><center>'.$consulta['ram'].'</center></td>
                                                <td><center>'.$consulta['almacenamiento'].'</center></td>
                                                <td><center>'.$consulta['bateria'].'</center></td>
                                                <td><center>'.$consulta['precio'].'</center></td>
                                            </tr>
                                        </tdoby>
                                        ';
                                }
                                
                            }
                        }
include("cerrar-conexcion.php");
?>