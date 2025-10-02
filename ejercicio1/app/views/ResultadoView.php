<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
</head>
<body>
    <h3>Datos generales del cliente</h3>
    <h6>Nombre: <?= $nombre?></h6>
    <h6>Correo: <?= $correo?></h6>
    <h6>DUI: <?= $dui?></h6>
    <br>
    <table style="border-collapse: collapse; border: black solid 2px;">
        <thead>
            <tr>
                <td>Mes</td>
                <td>Cuotas</td>
                <td>Intereses</td>
                <td>Capital</td>
                <td>Saldo Pendiente</td>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

</body>
</html>