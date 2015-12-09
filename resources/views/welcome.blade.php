<!DOCTYPE html>
<html ng-app="gemStore">
    <head>
        <title>AngularJS</title>
<!--
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
-->
<!--
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
-->
<script type="text/javascript" src="/js/angular.min.js"></script>

<script type="text/javascript" src="/js/app.js"></script>

<body ng-controller="StoreController as store">

    
    <div ng-repeat="product in store.products">
        <div ng-hide="product.soldOut">
             <h3>Naziv: [[product.name]]</h3>
             <h3>Cijena: [[product.price]] $</h3>
             <p>Opis: [[product.description]]</p>
             <button ng-show="product.canPursche"> Dodaj u korpu </button>
             <hr>
         </div>
    </div>



    <h4 ng-hide="store.author.active">
        Autor aplikacije: [[store.author.name]] [[store.author.lastname]]
    </h4>

    <input type="text" ng-model="potpis"></input>
    <h4>Potpisao: [[potpis]]</h4>

</body>


</html>
