/**
 * @file
 * Linkit linkcustom
 */

(function ($, Drupal, _) {

  'use strict';

  console.log(`Test linkcustom`);
  setTimeout(function() {
    const input = $("form.editor-link-dialog input.form-linkit-autocomplete");
    console.log(`input : `, input);
    input.on("autocompleteselect", function(e,ui){
      console.log("item dans mon code : ",ui.item);
      $("form.editor-link-dialog input.form-text").val(ui.item.label);
    })
  }, 1000);

})(jQuery, Drupal, _);
