<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5 pt-5">
        <div class="row g-3">
            <div class="col-md-3"></div>

            <div class="col-md-6 ">

                @if (session ()-> has ('erreur') )
                <div class="alert alert-danger mt-5 mb-5">{{session('erreur')}}</div>
                @endif

                <form class="row g-3 pt-4 pb-4" action="{{route('ajouterproduit')}}" method="post" style="background-color: burlywood; border-radius:5px;">
                    @csrf

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nom produit</label>
                        <input type="text" class="form-control" id="inputEmail4" name="nom_produit">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Catégorie produit</label>
                        <select name="categorie_id" class="form-control" id="">
                            <option value="">Selectionner</option>
                            @foreach($get_category as $category)
                            <option value="{{$category->id}}">{{$category->Nom_categorie}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Description produit</label>
                        <input type="text" class="form-control" id="inputEmail4" name="description_produit">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Image Produit</label>
                        <input type="text" class="form-control" id="inputEmail4" name="image_produit">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Prix Produit</label>
                        <input type="text" class="form-control" id="inputEmail4" name="prix_produit">
                    </div>

                    <div class="col-12 mt-4">
                        <input type="submit" class="btn btn-primary w-100" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>

</body>


</html!!>