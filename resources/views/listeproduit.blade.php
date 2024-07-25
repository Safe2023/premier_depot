<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700');

    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }


    body {
        font-family: 'Roboto', sans-serif;
    }

    a {
        text-decoration: none;
    }

    .product-card {
        width: 380px;
        position: relative;
        box-shadow: 0 2px 7px #dfdfdf;
        margin: 50px auto;
        background: #fafafa;
    }

    .badge {
        position: absolute;
        left: 0;
        top: 20px;
        text-transform: uppercase;
        font-size: 13px;
        font-weight: 700;
        background: red;
        color: #fff;
        padding: 3px 10px;
    }

    .product-tumb {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 300px;
        padding: 50px;
        background: #f0f0f0;
    }

    .product-tumb img {
        max-width: 100%;
        max-height: 100%;
    }

    .product-details {
        padding: 30px;
    }

    .product-catagory {
        display: block;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        color: #ccc;
        margin-bottom: 18px;
    }

    .product-details h4 a {
        font-weight: 500;
        display: block;
        margin-bottom: 18px;
        text-transform: uppercase;
        color: #363636;
        text-decoration: none;
        transition: 0.3s;
    }

    .product-details h4 a:hover {
        color: #fbb72c;
    }

    .product-details p {
        font-size: 15px;
        line-height: 22px;
        margin-bottom: 18px;
        color: #999;
    }

    .product-bottom-details {
        overflow: hidden;
        border-top: 1px solid #eee;
        padding-top: 20px;
    }

    .product-bottom-details div {
        float: left;
        width: 50%;
    }

    .product-price {
        font-size: 18px;
        color: #fbb72c;
        font-weight: 600;
    }

    .product-price small {
        font-size: 80%;
        font-weight: 400;
        text-decoration: line-through;
        display: inline-block;
        margin-right: 5px;
    }

    .product-links {
        text-align: right;
    }

    .product-links a {
        display: inline-block;
        margin-left: 5px;
        color: #e1e1e1;
        transition: 0.3s;
        font-size: 17px;
    }

    .product-links a:hover {
        color: #fbb72c;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="container">
                <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap" />
                        </svg>
                        <span class="fs-4">PRODUIT</span>
                    </a>

                    <ul class="nav nav-pills">

                        <li class="nav-item"><a href="#" class="nav-link ">Acceuille</a></li>
                        <li class="nav-item"><a href="/listeproduit" class="nav-link ">Liste des Produits</a></li>
                        <li class="nav-item"><a href="/ajouterproduit" class="nav-link ">Ajouter des Produits</a></li>
                        <li class="nav-item"><a href="/tableau" class="nav-link ">Tableau</a></li>

                        <li class="nav-item"><a href="#" class="nav-link ">Contact</a></li>
                    </ul>
                </header>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                 

                    <div class="p-4">
                        <h4 class="fst-italic">Catégories</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="{{$get_category_homme}}">Homme</a></li>
                            <li><a href="#">Femme</a></li>
                            <li><a href="#">Enfant</a></li>
                          
                        </ol>
                    </div>

                   
                </div>
            </div>
        </div>

        <div class="row">

            @foreach ($listeproduit as $liste)

            <div class="col-md-4">
                <div class="product-card" style="width: 20rem;">

                    <div class="product-tumb">
                        <img src="{{$liste->image_produit}}" alt="" height="250px">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">{{$liste->categorie->Nom_categorie}}</span>
                        <h4><a href="">{{$liste->nom_produit}} </a></h4>
                        <p>{{$liste->description_produit}}</p>
                        <div class="product-bottom-details">
                            <div class="product-price">{{$liste->prix_produit}} |XOF</div>
                            <a href="" class="btn btn-primary">Acheter</a>


                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>


    @include('homme')
</body>

</html>