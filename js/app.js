var app = {
  init: function (){
    $('.item-edit').on('click', app.showEditForm);
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
  }
}

$(app.init);
