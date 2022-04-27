<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.php" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Recomienda</title>
</head>
<body>
    
        <div id="concentrado">
        <div class="marca"><h1 class="elegantshadow">BESTLEY</h1></div>
            <form action="menu.php" id="formulario" method="post">                
                <div class="responsibe"><!--tabla reponsible--><!--por cada div contiene un label y un input-->
                    <div class="col-25"><label for="Nombre">Nombre</label></div>
                    <div class="col-75"><input type="text" name="num1" placeholder="no obligatorio"></div>
                </div>
                <div class="responsibe">
                    <div class="col-25"><label for="Apellido">Apellido</label></div>
                    <div class="col-75"><input type="text" name="num2" placeholder="no obligatorio"></div>
                </div>
                <div class="responsibe" id="abajo"> 
                    <div class="col-25"><label for="favorito">¿Marca favorit@?</label></div>
                    <div class="col-75">
                        <select name="marcas" class="form-select">
                            <option value="Seleccionar" value="Seleccionar">Seleccionar</option>
                            <option value="Samsung">Samsung</option>
                            <option value="Huawei">Huawei</option>
                            <option value="Apple">Apple</option>
                            <option value="Xiaomi">Xiaomi</option>
                            <option value="Motorola">Motorola</option>
                        </select>
                    </div>
                </div>
                <div class="responsibe" id="abajo">
                    <div class="col-25"><label for="precio">¿Te gustaria gastar entre?</label></div>
                    <div class="col-75">
                        <select name="precio" class="form-select">
                            <option value="Seleccionar">Seleccionar</option>
                            <option value="$1000-2500">$1000-2500</option>
                            <option value="$2500-4000">$2500-4000</option>
                            <option value="$4000-5500">$4000-5500</option>
                            <option value="$5500-7000">$5500-7000</option>
                            <option value="$7000-8500">$7000-8500</option>
                            <option value="$8500-10500">$8500-10500</option>
                            <option value="$10500-12000">$10500-12000</option>
                            <option value="$12000-13500">$12000-13500</option>
                            <option value="$13500-15000">$13500-15000</option>
                            <option value="$+15000">$+15000</option>
                        </select>
                    </div>
                </div>
                <div class="responsibe" id="botonsito">
                    <div class="col-75">
                        <!-- <button type="submit" class="btn btn-primary" name="serch">CONSULTAR</button> -->
                        <button type="submit" class="btn btn-primary" value="Consultar" name="boton5" onclick="respuesta()">Consultar</button>
                        <a class="linki" href="iniciar.php" onclick="proximo()">Salir</a>
                        <script>
                            function proximo(){
                                alert('Hasta luego...')
                            }
                        </script>               
                    </div>
                </div>
            </form>
        </div>
        <div class="resultado">
            <?php
                if(isset($_POST['boton5'])){
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                            echo '
                            Usuario :  '.$num1.' '.$num2.' se le recomienda lo siguiente
                            ';
                }
                else{
                    echo "Usuario : Anónimo";
                }
            ?>
            <script>
                    function respuesta() {
                        alert("Observe La Tabla")
                    }
            </script>
                <?php
                    include("abrir-conexcion.php");
                        echo '
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"><center>modelo</center></th>
                                    <th scope="col"><center>so</center></th>
                                    <th scope="col"><center>procesador</center></th>
                                    <th scope="col"><center>pantalla</center></th>
                                    <th scope="col"><center>Tec.Pantalla</center></th>
                                    <th scope="col"><center>c_delantera</center></th>
                                    <th scope="col"><center>c_trasera</center></th>
                                    <th scope="col"><center>ram</center></th>
                                    <th scope="col"><center>almacenamiento</center></th>
                                    <th scope="col"><center>bateria</center></th>
                                    <th scope="col"><center>precio</center></th>
                                    
                                </tr>
                            </thead>
                        ';    
                    include("parametros/encomiend1.php");
                    include("parametros/encomiend2.php");
                    include("parametros/encomiend3.php");
                    include("parametros/encomiend4.php");
                    include("parametros/encomiend5.php");
                    include("cerrar-conexcion.php");
                ?>
        </div>
</body>
</html>























