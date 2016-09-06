  (function() {
    'use strict';
    var dialogButton = document.querySelector('.dialog-button');
    var dialog = document.querySelector('#dialog');
    if (!dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
      dialog.showModal('5000');
    });
    dialog.querySelector('button:not([disabled])')
      .addEventListener('click', function() {
        dialog.close('3000');
      });
  }());
