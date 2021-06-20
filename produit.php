<!DOCTYPE html>

<?php

session_start();
$_SESSION['prixtt']='0.00';

?>

<html>
    <head>
        <title>C&C</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="img/clc.jpg">
		<link rel="stylesheet" href="/css/materialize.min.css">
        <link rel="stylesheet" href="/css/style2.css">
		<script src="/js/jquery.min.js"></script>
		<script src="/js/panier.js"></script>
		<script src="/js/materialize.min.js"></script>
		<script type="text/javascript" src="/js/javascript.js"></script>
		
		
    </head>
	
	<body>


<div id="store" class="row">
  <section >
    <article class="col s12 m6 l4" data-price="19.99">
      <div class="card">
        <div class="card-image">
          <img src="/img/calcon1.jpg" alt="Photo de calcon">
          <span class="card-title">19,99€</span>
        </div>
        <div class="card-content">
          <h3>Calcon evolution</h3>
          <button id="prod" onclick="cacher()">
          Calcon evolution
          </button>
		  <div id="myDIV">
			Calcon représentant l'évolution de l'homme
			</div>
        </div>
        <div class="card-action row">
          <a href="#" class="waves-effect waves-light btn red white-text col s12">Ajouter</a>
        </div>
      </div>
    </article>
    <article class="col s12 m6 l4" data-price="19.99">
      <div class="card">
        <div class="card-image">
          <img src="/img/calcon2.jpg" alt="Photo de calcon">
          <span class="card-title">19,99€</span>
        </div>
        <div class="card-content">
          <h3>Calcon Burne out</h3>
          <button  id="prod1" onclick="cacher()">
          Calcon Burne out
          </button>
		  	<div id="myDIV1">
			Calcon ornée d'un dessin humoristique d'un calcon
			</div>
        </div>
        <div class="card-action row">
          <a href="#" class="waves-effect waves-light btn red white-text col s12">Ajouter</a>
        </div>
      </div>
    </article>
	    <article class="col s12 m6 l4" data-price="19.99">
      <div class="card">
        <div class="card-image">
          <img src="/img/calcon3.jpg" alt="Photo de calcon">
          <span class="card-title">19,99€</span>
        </div>
        <div class="card-content">
          <h3>Slip tchita</h3>
          <button  id="prod2" onclick="cacher()">
          Slip tchita
          </button>
		   <div id="myDIV2">
			Calcon représentant un gorille mangeant une banane
			</div>
        </div>
        <div class="card-action row">
          <a href="#" class="waves-effect waves-light btn red white-text col s12">Ajouter</a>
        </div>
      </div>
    </article>
	    <article class="col s12 m6 l4" data-price="29.99">
      <div class="card">
        <div class="card-image">
          <img src="/img/chemise1.jpg" alt="Photo de chemise">
          <span class="card-title">29,99€</span>
        </div>
        <div class="card-content">
          <h3>Chemise Dragon bleu</h3>
          <button  id="prod3" onclick="cacher()">
          Chemise Dragon bleu
          </button>
		  	<div id="myDIV3">
			Chemise bleu ornée d'un dragon
			</div>
        </div>
        <div class="card-action row">
          <a href="#" class="waves-effect waves-light btn red white-text col s12">Ajouter</a>
        </div>
      </div>
    </article>

		    <article class="col s12 m6 l4" data-price="29.99">
      <div class="card">
        <div class="card-image">
          <img src="/img/chemise2.jpeg" alt="Photo de chemise">
          <span class="card-title">29,99€</span>
        </div>
        <div class="card-content">
          <h3>Chemise Dragon verte</h3>
          <button  id="prod4" onclick="cacher()">
          Chemise Dragon verte
          </button>
		  	<div id="myDIV4">
			Chemise verte ornée d'un dragon
			</div>
        </div>
        <div class="card-action row">
          <a href="#" class="waves-effect waves-light btn red white-text col s12">Ajouter</a>
        </div>
      </div>
    </article>
	
		    <article class="col s12 m6 l4" data-price="29.99">
      <div class="card">
        <div class="card-image">
          <img src="/img/chemise3.jpg" alt="Photo de chemise">
          <span class="card-title">29,99€</span>
        </div>
        <div class="card-content">
          <h3>Sweat Dragon</h3>
          <button  id="prod5" onclick="cacher()">
          Sweat Dragon
          </button>
		  <div id="myDIV5">
			Sweet orné d'un dragon
			</div>		  
        </div>
        <div class="card-action row">
          <a href="#" class="waves-effect waves-light btn red white-text col s12">Ajouter</a>
        </div>
      </div>
    </article>
	
    </section>
</div>
<div id="cart" class="row">
  <ul>
  </ul>
  <a id="pay" class="waves-effect waves-light orange white-text" >Payer <span class="total"><?php $cmd; ?></span>€</a>
</div>

<button id="modification" class="buttonform" type="button"> Modifier les informations de mon compte </button>
</body>
</html>