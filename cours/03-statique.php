<!doctype html>
<html lang="en">

<head>
    <title>Les propriétés et les méthodes statique-cours programmation orentée objet</title>
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
            <p class="lead">Les propriétés et méthodes statique </p>

            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
            </p>
        </div>
    </div>




    <div class="container">

        <div class="row">

            <div class="col-12">


<h2>Introduction</h2>

<p>Les propriétés et méthodes statiques sont particulières , en effet ces dernières n'ont pas besoin d'être appliquées sur l'instanciation de notre classe, elles vont y être directement liées.Dès qu'on aura un nouvel objet, il profitera de la méthode, mais la nomenclature sera différente </p>


<h3 class="text-center text-primary">Dans quel cas l'utiliser ?</h3>
<!-- Instacier c'est faire un nouvel objet , une classe et on fait new =  -->
<p> Les méthodes et propriétés statiques sont pratiques dans certains cas distincts. Premièrement quand l'on veut qu'une méthode soit appliquée à notre classe, comme lors du formattage d'un nombre: par exemple, lorsque l'on rajoute un zero initial quand le chiffre est inférieur à 10. On en voudra pas dire à chaque fois  <code>$machin = new Machin;</code> puis <code>$machin ->format()</code> car ce code est lourd et il existe plus simple.On cherche en fait à ce que dès que l'instanciation est faite, le format soit appelé.</p>

<p>La façon d'instancier une classe qui possède une méthode statique sera différente : <code> class:: methode()</code>. On utilisera alors pour appeller la méthode deux fois deux points <em> et non plus la flèche</em> </p>





            </div><!-- fin de la col-12 -->
        </div>

    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>