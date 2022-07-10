<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importar Dados</title>
</head>
<body>
    <h1>Upload para Importação de Dados</h1>

    <form  method="POST" action="processa.php" enctype="multipart/form-data">
        <label for="">Arquivo</label>
        <input type="file" name="file"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>