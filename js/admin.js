$(document).ready(function () {


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