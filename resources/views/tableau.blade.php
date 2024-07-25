<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row g-3">
            <div class="col-auto">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ajouter un produits
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un produits</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12 ">

                                    @if (session ()-> has ('success') )
                                    <div class="alert alert-danger mt-5 mb-5">{{session('success')}}</div>
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    Ajouter une catégorie
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel1">Ajouter une catégorie</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12 ">

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

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom produit</th>
                        <th scope="col">categorie</th>
                        <th scope="col">Description produit</th>
                        <th scope="col">Image Produit</th>
                        <th scope="col">Prix Produit</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tableau as $h)
                    <tr>
                        <th scope="row">{{$table->id}}</th>
                        <td>{{$table->nom_produit}}</td>
                        <td>{{$table->categorie}}</td>
                        <td>{{$table->description_produit}}</td>
                        <td>{{$table->image_produit}}</td>
                        <td>{{$table->prix_produit}}</td>
                        <td class="d-flex">
                            <a href="{{route('edit',$table->id)}}" class="btn btn-success"><i class="bi bi-arrow-bar-up"></i></a>&nbsp;

                            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>

                        </td>
                    </tr>

                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="deleteModalLabel">Voulez-vous vraiment supprimer?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="d-flex justify-content-around">
                                        <a href="" data-bs-dismiss="modal" class="btn btn-secondary">Non</a>
                                        <a href="{{route('delete',$table->id)}}"   class="btn btn-danger">Oui</a>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>