$(document).ready(function() {

    var GET_PARAM = function(name) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
    };

for (var i = 0; i < catalog.length; i++) {

    var proddiv = $("<div>").attr('class', 'row');
    var imgproddiv = $("<div>").attr('class', 'col-md-4');
    var descriptiondiv = $("<div>").attr('class', 'col-md-8');
    var picture = $("<img>");
    var nameContent = $("<h2>");
    var description = $("<p>").attr('class', 'desc');
    var link = $("<a>").attr('href', 'produit.html?produit_id='+i).attr('class', 'linkprod');
    var catalogueRow = $('#catalogue');

    nameContent.html(catalog[i].name);
    description.html(catalog[i].description);
    picture.attr('src', catalog[i].pictures[0]);

    $(imgproddiv).append(picture);
    $(descriptiondiv).append(nameContent);
    $(descriptiondiv).append(description);
    $(proddiv).append(imgproddiv);
    $(proddiv).append(descriptiondiv);
    $(link).append(proddiv);
    $(catalogueRow).append(link);
}
})
