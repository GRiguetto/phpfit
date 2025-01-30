<?php
require_once '../configuracao.php';
require_once '../modelos/Exercicio.php';

// busca os exercicio no bamco de dads
$exercicio = Exercicio::buscarTodos();

if(!$exercicio){
    echo"Nenhum exercicio encontrado!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Nome</th>
            <th>Grupo Muscular</th>
            <th>Descrição</th>
            <th>Ação</th>
        </thead>
        <tbody>
            <?php
            foreach($exercicio as $ex){
            ?>
            <tr>
                <td><?php echo $ex['nome']; ?></td>
                <td><?php echo $ex['grupo_muscular']; ?></td>
                <td><?php echo $ex['descricao']; ?></td>
                <td><img width="100" src="../<?php echo $ex['imagem'];?>"></td>
            </tr>
            <?php
            } 
            ?>
           
        </tbody>
    </table>
</body>
</html>