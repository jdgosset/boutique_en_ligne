var GET_PARAM = function(name) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
};
$(document).ready(function() {

var i = GET_PARAM("produit_id");
var myproduct = catalog[i];

var proddiv = $("<div>").attr('class', 'row');
var imgproddiv = $("<div>").attr('class', 'col-md-6');
var descriptiondiv = $("<div>").attr('class', 'col-md-6');
var picture = $("<img>");
var nameContent = $("<h2>");
var description = $("<p>").attr('class', 'desc');

$(imgproddiv).append(picture);
$(descriptiondiv).append(nameContent);
$(descriptiondiv).append(description);
$(proddiv).append(imgproddiv);
$(proddiv).append(descriptiondiv);
$("body main").append(proddiv);

    $(nameContent).text(myproduct["name"]);
    $(description).text(myproduct["description"]);
    $(picture).attr("src", myproduct["pictures"]);

})
