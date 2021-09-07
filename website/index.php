<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker | Formação Dev.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <?php
        $result = file_get_contents("http://node-container:9001/loja");
        $products = json_decode($result);
    ?>

    <div class="container">
        <table class="table">

            <thead class="thead-dark">
            <tr>
                <th scope="col">Curso</th>
                <th scope="col">Tecnologia</th>
                <th scope="col">Nivel</th>
                <th scope="col">Instrutor/a</th>
                <th scope="col">Preço</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach($products as $product): ?>
                <tr>
                  <td><?php echo $product -> curso; ?></td>
                  <td><?php echo $product -> tecnologia; ?></td>
                  <td><?php echo $product -> nivel; ?></td>
                  <td><?php echo $product -> professor; ?></td>
                  <td><?php echo $product -> preco; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>