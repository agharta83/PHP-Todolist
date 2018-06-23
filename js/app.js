var app = {
  init: function (){
    $('.item-edit').on('click', app.showEditForm);
    $('.cancel-button').on('click', app.hideEditForm);
    $('.item-edit-category').on('click', app.showCategoryDialog)
  },
  showEditForm: function (){

    // je recupere le formulaire parent antécédent à mon item-edit
    var form = $(this).parent().prev();

      // on cible le span précédent
    var span = form.prev();

    if(form.hasClass('hide')){
      // je l'affiche
      form.toggleClass('hide');

      //on masque le texte
      span.hide();

      //on récupere le contenu du span soit le nom de la tache
      var contentSpan = span.text();

      form.find('.item-form-text').val(contentSpan);

    } else{

      form.toggleClass('hide');

      span.show();
    }
  },
  hideEditForm: function(){

    //on recupere le parent de button qui est form
    var form = $(this).parent();

    //on recupere le span précédent au formulaire
    var span = form.prev();

    $('.item-form-edit').addClass('hide');

    span.show();
  },
  showCategoryDialog: function(){
    //je recupere l'id au click via data-id de l'icone tags (category)
    var idTask = $(this).data('id');
    // je le met dans l'attribut value de mon input d'id categoryId
    $('#categoryId').val(idTask);

   // la boite de dialogue prend le formulaire qui est inclus dedans et l'affiche
    $( "#dialog" ).dialog({
      dialogClass: "no-close"
      });
  }
}


$(app.init);
