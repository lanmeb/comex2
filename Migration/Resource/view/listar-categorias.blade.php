<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>categorias</title>
</head>
<body>
    
    <h1>
        Categorias 
    </h1>
    <ul>
        <li> Celulares</li>
        <li> Informática</li>
        <li> Móveis</li>
        <li> Automotiva</li>
        <li> Livros</li>
        <li> Beleza</li>
        <li> Esporte</li>
        <li> Luxo</li>
    </ul> 
        
    <ul>
        <?php foreach ($categorias as $categoria): ?>
     <li> <?= $categoria; ?> </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>