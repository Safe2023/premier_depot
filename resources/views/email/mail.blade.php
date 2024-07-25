<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-6">
        <div class="h-100 p-5 bg-body-tertiary border rounded-3">
          <h2>Ayouba BEREBERE</h2>
          <p class="card-text">Nom: <span>{{$detail['prenom']}}</span></p>
          <p class="card-text">E-mail: <span>{{$detail['email']}}</span></p>
          <p class="card-text">Sujet: <span>{{$detail['objet']}}</span></p>
          <p class="card-text">Message: <span>{{$detail['message']}}</span></p>
         
        </div>
      </div>
    </div>
        </div>
    </div>
</body>
</html>