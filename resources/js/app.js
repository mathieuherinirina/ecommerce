require('./bootstrap');

$( document ).ready(function() {
  $('.choose-category').click(function() {
    $('input[name=produit_categorie_id]').val($(this).attr('data-id'));
    $('#ddlCat').text($(this).text());
  });


});
