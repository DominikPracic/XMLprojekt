<?php

$xml = simplexml_load_file('tablica.xml');

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Europska prvenstva</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="forma.php">Dodaj</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1>Europska prvenstva</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoT0z1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <table class="table table-danger table-striped-columns">
    <thead>
  <tr>
      <th scope="row">Godina</th>
      <th scope="row">Domaćin</th>
      <th scope="row">Zlato</th>
      <th scope="row">Srebro</th>
      <th scope="row">Bronca</th>
    </tr>
  </thead>
    <tbody>
    <?php foreach ($xml->G as $G): ?>
                    <tr>
                        <td><?php echo $G->Godina; ?></td>
                        <td><?php echo $G->Domaćin; ?></td>
                        <td><?php echo $G->Zlato; ?></td>
                        <td><?php echo $G->Srebro; ?></td>
                        <td><?php echo $G->Bronca; ?></td>
                    </tr>
                <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>