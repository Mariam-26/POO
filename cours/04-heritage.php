<!doctype html>
<html lang="en">

<head>
    <title>La visilité -cous programmation orentée objet</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">POO :La programmation orientée objet </h1>
            <p class="lead">L 'hériatge</p>

            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
            </p>
        </div>
    </div>


    <div class="container">

        <div class="row">

            <div class="col-12">

                <h2 class="text-center">Introduction </h2>

                <p>L'hériage est une notion essentielle en orienté objet.En effet , on peut avoir desoin de changer certains paramètres d'une classe mais en garder d'autres. C'est à ce moment là qu'intervient la notion d'héritage. Elle va permettre de dire dans une nouvelle classe qu'on hérite d'une ancienne. Celle -ci aura donc accès à toutes les propriétés et méthodes public et protected de notre classe initiale.</p>

<h2 class="text-center">Les avantages</h2>


<p>L'héritage va nous permettre , non seulement de garder une organisation optimale pour le code , mais aussi d'avoir le moins de répétition possible. Un autre des avantagesest que l'on peut redéfinir des propriétés à la volée.Alors que dans la classe parente de Personnage.php , les attaques sont à 20, dans la nouvelle classe que nous allons faire, nous allons pouvoir définir que les attaques sont à 40 sans pour autant devoir réécrire (ou copier-coller )le reste du code.</p>
<h2 class="text-center">Utilisation</h2>

<p>Pour qu'une classe hérite d'une autre, il suffira d'écrire , après l'habituirl <code> class Nomclass</code> d'écrire le mot clé "extends" suivi de la classe dont on veut hériter. Par exemple: <code>class Magicien extends Personnage</code>. Cette façon de faire permet d'instancier un personnage qui aura peut être des nouvelles propriétés ou méthodes grâce à notre nouvelle classe.
 </p>
<p>Lorsque l'on fera un <em>require</em> de notre nouvelle classe, il faudra bien faire attention à l'ordre dans lequel on appelle nos classe: d'abord la classe initiale puis celle sui est étendue, notre classe secondaire.</p>

            </div>
        </div>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>