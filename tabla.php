
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <?php 
        $monto = $saldo = 10000;
        $taza_interes = 1.5;
        $periodo = 6;
        if(!empty($_POST["monto"]) && !empty($_POST["interes"]) && !empty($_POST["periodo"])){
            $monto = $saldo = $_POST["monto"];
            $taza_interes = $_POST["interes"];
            $periodo = $_POST["periodo"];
        }
     
     $amorticacion = 0;

    ?>
<div class="container">
<div class="row">
      <div class="col-6">
      <form action="" method="POST">
    <table class="table table-success table-striped">
        
        <thead class="table-light">
            <tr>
                <th>Monto: <input type="number" name="monto" value="<?=$monto;?>"></th>
                <th>Internes: <input type="number" name="interes" value="<?=$taza_interes;?>"></th>
                <th>Periodo: <input type="number" name="periodo" value="<?=$periodo;?>"></th>
                <td> <input type="submit" value="Calcular" class = "btn btn-success"/> </td>
            </tr>
            <tr>
                <th>Periodo</th>
                <th>Saldo</th>
                <th>Interes</th>
                <th>Abono</th>
                <th>Pago</th>
            </tr>
        </thead>
        
        <tbody>
            
        
    <?php for($i = 1; $i <=$periodo; $i++){ 

        $amorticacion = round($monto / $periodo,2);
        $interes = round($saldo * ($taza_interes / 100),2);
    ?>
        <tr>
            <td><?=$i;?></td><!--periodo-->
            <td>Q.<?=number_format((float)$saldo, 2, '.', ',');?></td> <!--saldo-->
            <td>Q.<?=number_format((float)$interes, 2, '.', ',');?></td><!--intere-->
            <td>Q.<?=number_format((float)$amorticacion, 2, '.', ',');?></td><!--abono-->
            <td>Q.<?=number_format((float)($interes+$amorticacion), 2, '.', ',');?></td><!--pago-->
        </tr>
    <?php 
        
        $saldo = $saldo - $amorticacion;
}?>
        </tbody>
    </table>
    </form>
    </div>
    </div>
    </div>
</body>
</html>

