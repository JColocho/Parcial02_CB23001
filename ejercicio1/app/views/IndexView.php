<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
</head>
<body>
    <h2>Cálculo de cuota mensual</h2>
    <form action="/ejercicio1/public/resultados" method="POST" style="margin: 10px;">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="">
        </div>
        <br>
        <div>
            <label for="correo">Correo electrónico</label>
            <input type="text" name="correo" id="">
        </div>
        <br>
        <div>
            <label for="dui">Número de DUI</label>
            <input type="text" name="dui" id="">
        </div>
        <div>
            <label for="i">Capital de prestamo</label>
            <input type="text" name="i" id="">
        </div>
        <div>
            <label for="dui">Tasa de interes mensual</label>
            <input type="text" name="dui" id="">
        </div>
        <div>
            <label for="n">Número de cuotas</label>
            <input type="text" name="n" id="">
        </div>
        <input type="submit" value="Enviar">
        
    </form>
</body>
</html>