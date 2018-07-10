$(document).ready(function () {
    var GET_PARAM = function(name) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
    };
    var i = GET_PARAM("produit_id");
    var myproduct = catalog[i];

    var panier = {}

            function saveCart(){
                var cart_json = JSON.stringify(panier);
                sessionStorage.setItem("panier", cart_json);
            }
            function loadCart(){
                var cart_json = sessionStorage.getItem("panier");
                panier  = JSON.parse(cart_json) || {};
            }
            function displayCart(){
                $("#cart").html("")
                for(productId in panier){
                    $("#cart").append($(`<li>${catalog[productId].name} x ${cart[productId]}</li>`))
                }
            }
            loadCart()
            displayCart()
            $(".add2Cart").click(function(){
                var productId = $(this).val()
                if(panier[productId]){
                    panier[productId]++
                } else {
                    panier[productId] = 1
                }
                saveCart()
                displayCart()

            })

    })



    // $('#addCart').click(function () {
    //     for (var y = 0; y < catalog.length; y++) {
    //         panier.push(myproduct)
    //     }
    //     for (var x = 0; x < panier.length; x++) {
    //
    //         var proddiv = $("<div>").attr('class', 'row');
    //         var imgproddiv = $("<div>").attr('class', 'col-md-4');
    //         var txtDiv = $("<div>").attr('class', 'col-md-8')
    //         var descriptiondiv = $("<div>").attr('class', 'col-md-12');
    //         var priceDiv = $("<div>").attr('class', 'col-md-12');
    //         var picture = $("<img>");
    //         var nameContent = $("<h2>");
    //         var description = $("<p>").attr('class', 'desc');
    //         var link = $("<a>").attr('href', 'produit.html?produit_id='+i).attr('class', 'linkprod');
    //         var panierRow = $('#panier');
    //         var labelPrice = $("<h3>");
    //         var price = $("<p>")
    //
    //         nameContent.html(myproduct.name);
    //         description.html(myproduct.description);
    //         picture.attr('src', myproduct.pictures[0]);
    //         labelPrice.html('Prix');
    //         price.html(myproduct.price);
    //
    //         $(imgproddiv).append(picture);
    //         $(descriptiondiv).append(nameContent);
    //         $(descriptiondiv).append(description);
    //         $(txtDiv).append(descriptiondiv);
    //         $(priceDiv).append(labelPrice);
    //         $(priceDiv).append(price);
    //         $(txtDiv).append(priceDiv);
    //         $(proddiv).append(imgproddiv);
    //         $(proddiv).append(txtDiv);
    //         $(link).append(proddiv);
    //         $(panierRow).append(link);
    //     }





    // var cart = {}
    //         for(var i=0;i<catalog.length;i++){
    //             var product = catalog[i]
    //             $("#catalog").append(`
    //                 <div class="col-3 mb-5">
    //                     <h3>${product.name}</h3>
    //                     <h4>${product.price}€</h4>
    //                     <button class="add2Cart" type="button" value="${i}">Ajouter</button>
    //                 </div>
    //             `)
    //         }
