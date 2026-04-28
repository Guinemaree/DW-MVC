<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="container mt-5">
  <h1>Listagem de Presença</h1>
  <a class="btn btn-primary" href="novo">Novo</a>


  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Telefone</th>
        <th scope="col">Excluir</th>
        <th scope="col">Editar</th>
      </tr>
    </thead>
    <tbody>
      <?php

        foreach ($presencas as $presenca) {
            echo "
                <tr>
                <th scope='row'>{$presenca['id']}</th>
                <td>{$presenca['nome']}</td>
                <td>{$presenca['email']}</td>
                <td>{$presenca['telefone']}</td>
                <td><a class='btn btn-danger' href='excluir/{$presenca['id']}'>x</a></td>
                <td><a class='btn btn-primary' href='editar/{$presenca['id']}'>+</a></td>

                </tr>
            ";

        }


    ?>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
</body>

</html>