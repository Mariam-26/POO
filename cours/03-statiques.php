<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Statique - Programmation orientée ob</title>
</head>
<header>

    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">POO: programmation orientée objet</h1>
            <p class="lead">Statique</p>
            <hr class="my-2">
        </div>
    </div>

</header>

<main>
    <section class="container">
        <div class="col-12">
            
            <h2 class="text-center">Introduction</h2>
            
            <p>Les propriétés et méthodes statique sont particulière, ses dernieres ne sont pas nécessairement appliqué sur l'instantation. Elle vont t'y être directement lié et des que l'ont créera un noouvelle objet il profitera de la méthodes. La nomenclature différe.</p> 
            
            <h3 class="text-center text-primary">Quand l'utiliser ?</h3>

            <p>Les méthodes et propriété statiques sont pratique dans certains cas. <br><br> 1/ Quand l'on veut qu'une méthode soit appliquée à notre classe, comme lors du formattage d'un nombre: âr exemple, lorsque l'on rajoute un zéro initial quand le chriffre est inférieur à 10. On ne voudra pas dire à chaque fois <code>$machin = new machin</code> puis <code>$machin -> format()</code> car ce code est lours et il existe plus simple. On cherche en fait à ce que dès que l'instanciation faite, le format soit appelé.</p>
            <p class="m-4">La façon d'instancier une classe qui possède une méthode statique sera différente: <br><br> <code class="p-4">Class::methode()</code>. <br><br> On utilisera la méthode deux fois points <em>::</em> et non plus flèche <em>-></em></p>
            
        </div><!-- Fin de la col-12 -->
    </section>

    <section class="container">

        <div class="col-12">
            <h3 class="text-center"></h3>

        </div>

        <div class="col-12">
            <h3 class="text-center"></h3>
        </div>

        <div class=" col-5 container p-5">
    </section>


    
    </div>
</main>

<body>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>