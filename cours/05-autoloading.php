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
            <p class="lead">Autoloading            </p>
            <hr>
        </div>
    </div>


    <div class="container">

        <h2>Introduction</h2>
        <p>l'autoloading est un systeme qui charge automatiquement les différentes classes. Cela va permettre de ne pas avoir à faire à chaque  foiq un ou plusieurs <em>require</em>. C'est pratique, surtout dans les cas ou nous avons plusieurs classes, avec des classes parentes ou l'ont doit par conséquent se souvenir dans quel ordre les mettres.</p>
        <p>L'autoloader va donc nous permettre de gagner du temps mais aussi raccourcis la longueur du code, il va servir à avoir un code plus propre.</p>
        <h2> Utilisation</h2>
        <p>Pour rappeler les classes grâces à l'autoloader il suffira de mettre notre code et la seule chose à laquelle il faudra payer attention est le chemin grâce auquel on accède aux différentes classes. C'est la raison pour laquelle, il faudra bien faire attention à ranger toutes nos classes au même endroit ( dans le dossier class ou classes) et pareil pour nos vues.</p>

        <p>Il est possible de faire une class autoloader au sein d'un fichier externe dans le but d'avoir moins de code php possible dans notre vue. Cependant, pour l'utilisation que nous en faisons ce n'est pas nécessaire.</p>
       
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>