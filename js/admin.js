$(document).ready(function () {

    /*document.getElementById("connexion_client").onclick = function () {
        location.href = "/click-and-collect/index.php";
    };*/

    document.getElementById("client").onclick = function () {
        location.href = "/click-and-collect/client.php";
    };

    document.getElementById("produit").onclick = function () {
        location.href = "/click-and-collect/produits.php";
    };

    document.getElementById("commande").onclick = function () {
        location.href = "/click-and-collect/commande.php";
    };

    $( "#ajouter" ).click( function() {
        $('#ajout_produit').toggle('show');
        if($('#suppr_produit').attr('class') == 'show'){
            $('#suppr_produit').attr('class') == 'hide';
        }
        if($('#update_produit').attr('class') == 'show'){
            $('#update_produit').attr('class') == 'hide';
        }
    });

    $( "#supprimer" ).click( function() {
        $('#suppr_produit').toggle('show');

        if($('#ajout_produit').attr('class') == 'show'){
            $('#ajout_produit').attr('class') == 'hide';
        }
        if($('#update_produit').attr('class') == 'show'){
            $('#update_produit').attr('class') == 'hide';
        }
    });

    $( "#modifier" ).click( function() {
        $('#update_produit').toggle('show');

        if($('#ajout_produit').attr('class') == 'show'){
            $('#ajout_produit').attr('class') == 'hide';
        }
        if($('#suppr_produit').attr('class') == 'show'){
            $('#suppr_produit').attr('class') == 'hide';
        }
    });

});