<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido desde Vagrant con docker</title>
</head>
<body>
    <h1>Bienvenido desde Vagrant con docker</h1>
    <?
    // Conectando, seleccionando la base de datos 
    try {
        $mbd = new PDO('mysql:host=db_server;dbname=devops_app', 'root', 'root');
        foreach($mbd->query('SELECT * from welcome') as $fila) {
            $array[] = $fila;
        }
        $mbd = null;
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    ?>
    <ul>
        <? foreach ($array as $a): ?>
        <li><?= $a[1]?></li>
        <? endforeach ?>
    </ul>
    
</body>
</html>