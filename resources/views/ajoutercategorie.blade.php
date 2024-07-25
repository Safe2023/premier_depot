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
            <div class="col-md-3"></div>
          <div class="col-md-6 mt-5 pt-5">
         
           <form action="{{route('ajouter_categorie')}}" method="post">
           <h5 style="text-align: center;">Veuillez ajouter une catégorie</h5>
           @csrf
          
                <div class="col-12 mt-3">
                    <input type="text" class="form-control" placeholder="Nom Catégorie" aria-label="First name" name="Nom_categorie">
                </div>
                <div class="col-6 mt-3">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
            <div class="col-md-3"></div>
           </form>
        </div>
    </div>
</body>

</html>