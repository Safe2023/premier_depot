<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<style>
    .contact-section .contact-info p {
        font-weight: 600;
        color: #000000;
        margin-bottom: 0;
    }

    .contact-section .contact-info p a {
        color: #1a1a1a;
    }

    .contact-section .contact-info p span {
        display: block;
        font-size: 16px;
        font-weight: 400;
        color: #999999;
    }

    .contact-section .contact-info .icon {
        margin-top: 10px;
    }

    .contact-section .contact-info .icon span {
        font-size: 20px;
        color: #1089ff;
    }

    @media (min-width: 992px) {
        .contact-section .contact-info .border-height {
            border-left: 1px solid rgba(0, 0, 0, 0.1);
            border-right: 1px solid rgba(0, 0, 0, 0.1);
        }
    }

    .contact-section .contact-form {
        width: 100%;
    }
</style>


<section class="ftco-section contact-section">
    <div class="container mt-5 pt-5">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-5">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="border w-100 p-4 rounded mb-2 d-flex">
                            <div class="icon mr-3">
                                <span class="icon-map-o"></span>
                            </div>
                            <p><span>Address:</span>Finafa, Abomey-Calavi</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="border w-100 p-4 rounded mb-2 d-flex">
                            <div class="icon mr-3">
                                <span class="icon-mobile-phone"></span>
                            </div>
                            <p><span>Phone:</span> <a href="https://wa.me/+22964897003?">+ 229 97306722</a></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="border w-100 p-4 rounded mb-2 d-flex">
                            <div class="icon mr-3">
                                <span class="icon-envelope-o"></span>
                            </div>
                            <p><span>Email:</span> <a href="atmaxtransport@gmail.com">ayouberia@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 block-9 ">
                 
                <form action="{{ route('envoie.email') }}" method="post" class="bg-light p-5 contact-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Votre Nom " id="Nom" name="prenom">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Votre Email" id="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Sujet" id="Sujet" name="objet">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message" id="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Envoyer votre message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>
        </div>

</section>
</body>
</html>