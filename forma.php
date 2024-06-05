<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dodaj Europsko Prvenstvo</title>
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
<div class="container mt-5">
    <h1>Dodaj Europsko Prvenstvo</h1>
    <form action="dodaj.php" method="post">
        <div class="mb-3">
            <label for="godina" class="form-label">Godina</label>
            <input type="text" class="form-control" id="godina" name="godina" required>
        </div>
        <div class="mb-3">
            <label for="domacin" class="form-label">Domaćin</label>
            <input type="text" class="form-control" id="domacin" name="domacin" required>
        </div>
        <div class="mb-3">
            <label for="zlato" class="form-label">Zlato</label>
            <input type="text" class="form-control" id="zlato" name="zlato" required>
        </div>
        <div class="mb-3">
            <label for="srebro" class="form-label">Srebro</label>
            <input type="text" class="form-control" id="srebro" name="srebro" required>
        </div>
        <div class="mb-3">
            <label for="bronca" class="form-label">Bronca</label>
            <input type="text" class="form-control" id="bronca" name="bronca" required>
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
</div>