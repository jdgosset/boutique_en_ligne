$(document).ready(function () {
    // var i = GET_PARAM("produit_id");
    // var myproduct = catalog[i];
    var panier = {}
    $('#addCart').click(function () {
        for (var y = 0; y < catalog.length; y++) {
            panier.push(1)
        }
        console.log(panier);
    })
})
