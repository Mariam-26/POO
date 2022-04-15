<!doctype html>
<html lang="en">

<head>
    <title>La visilité  -cous programmation orentée objet</title>
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
            <p class="lead">La visibilité</p>

            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
            </p>
        </div>
    </div>




    <div class="container">

        <div class="row">

            <div class="col-12">

                <h2 class="text-center">Introduction </h2>

                <p>La visibilité représente la portée de nos proprétés et de nos méthodes, elle défini à quel moment on pourra y accéder à quel moment celà nous sera impossible</p>
                
                <h3 class="text-secondary text-center"> La visibilité public</h3>
<p>La visibilité public est celle que l'on utilise par défaut au sein de nos classes . Elle va permettre de définir qu'une propriété ou une méthode est accessible dans la classe en faisant $this mais aussi sur une page externe lorsqu'on fait un require de notre classe, comme on a pu le faire pour acceder, par exemple à la vie de notre personnage. </p>


<h3 class="text-secondary text-center"> La visibilité private</h3>

<p>La visibilité privée ou 'private' signifie que la propriété est accessible dans la classe mais pas en dehors , on ne pourra donc pas faire appel directement à notre propriété dans une page externe. C'est pour cette raison que les getters et setters font leur apparition. Les getters vont permettre d'afficher le contenu d'une propriété ayant la visibilité private. la  construction de ce getter , qui va permettre de signifier aux autres développeurs ce qu'ils peuvent changer ou pas , se fera toujours de la même façon : <code>getNomvariable</code> suivi de  <code> return $this-> nomvariable</code>. On verra cà plus en détail quand on fera du symfony</p>

<h3 class="tex-decondary text-center">La visibilité protected</h3>

<p>Losrqu'une variable a la visibité protégée ou 'protected' on a à peu près le même champs d'action qu'une visibilité private. En revanche cette visibilité est légerement moins stricte car on peut réutiliser la propriété protégées lorsqu'on hérite de la classe sur laquelle elle est déclarée. On verra la notion d'héritage un plus tard. </p>

            </div><!-- fin de la col-12 -->


<div class="col-12">

<h2 class="text-center">Mais pourquoi choisir autre chove que public?</h2>

<p>Les notions de public privée et protégée ne sont pas nécessaires à 100% losrque l'on travaille seul.Cependant , si notre code a vocation d'être vu par d'autres développeurs ou si l'on a besoin d'être débugger, il faudra bien définir les popriétés pour que les personnes qui passent derrière comprennent ce qui peut être modifié et ce qui ne doit pas l'être. </p>

<p>Généralement dans les codes destinés à la relecture par d'autres , on trouvera toutes les propriétés en private et des getters et setters pour y accéder.De la même façon qu'un getters récupère une information (comme le nom la vie ou encore les points d'attaqu), un setter permet de donner  ou modifier une valeur . Les getters et setters serviront donc de garde fou pour éviter les modifications intempestives du code. </p>

</div>


        </div>
        </div>




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>