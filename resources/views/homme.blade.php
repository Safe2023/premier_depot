<div class="container">
      
        <div class="row">

            @foreach ($get_category_homme as $homme)

            <div class="col-md-4">
                <div class="product-card" style="width: 20rem;">

                    <div class="product-tumb">
                        <img src="{{$liste->image_produit}}" alt="" height="250px">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">{{$homme->categorie->Nom_categorie}}</span>
                        <h4><a href="">{{$homme->nom_produit}} </a></h4>
                        <p>{{$homme->description_produit}}</p>
                        <div class="product-bottom-details">
                            <div class="product-price">{{$homme->prix_produit}} |XOF</div>
                            <a href="" class="btn btn-primary">Acheter</a>


                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>