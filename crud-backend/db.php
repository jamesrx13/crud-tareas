<?php
//                   El host      user   pass
$db = mysqli_connect('localhost', 'root', '', 'tareas');

if (!$db) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// echo 'DB corriendo' . '<br>';

$sql = 'SELECT * FROM tareas';

$resul = $db->query($sql)->fetch_all();

echo json_encode($resul);
exit;

?>
<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Descrip</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resul->fetch_all() as $tarea) : ?>

                <tr>
                    
                    <td><?php echo $tarea[0]; ?></td>
                    <td><?php echo $tarea[1]; ?></td>
                    <td><?php echo $tarea[2]; ?></td>
                </tr>

                <tr>
                    <td>
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html> -->