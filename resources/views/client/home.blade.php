<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
 <title>home</title>
</head>
<body>
    <div class="container">

    <div class="container mb-5 mt-3 text-center">
        <h2>Laravel</h2>
    </div>
    <ul>
        <li><a href="{{URL::to('/home')}}">Home</a></li>
        <li><a href="{{URL::to('/apropos')}}">Apropos</a></li>
        <li><a href="{{URL::to('/services')}}">Services</a></li>
        <li><a href="{{URL::to('/save')}}">nouveau produit</a></li>
    </ul>

{{--Debut du contenu--}}
<h1>Bienvenu dans la page services</h1>
@foreach ($produits as $produit)

<div class="well">
       <a href="/show/{{$produit->id}}"> {{$produit->product_name}}</a>
</div>
<h2>les details des produits</h2>
<h5>{{$produit->product_name}}</h5>
<h5>{{$produit->product_price}} fcfa</h5>
<h5>{{$produit->description}}</h5>
@endforeach
{{$produits->links()}}

<hr>
<hr>
<a href="/edit/{{$produit->id}}" class="btn btn-default border">Editer</a>
<a href="" class="btn btn-danger border">supprimer</a>

{{--fin du contenu--}}


</div>
<script src="asset/js/bootstrap.bundel.min.js"></script>

</body>
</html>

