window.onload = function() {
  var openPopupButtonsCollection = document.querySelectorAll('.js-open-popup');
  var popupCloseSelector = document.querySelector('.js-popup-close');
  var popup = document.querySelector('.js-popup');
  var openPopup = function() {
    popup.classList.add('popup--show');
  };
  var closePopup = function() {
    popup.classList.remove('popup--show');
  };

  openPopupButtonsCollection.forEach(function(button) {
    button.addEventListener('click', openPopup);
  });

  popupCloseSelector.addEventListener('click', closePopup);

  window.onkeydown = function(event) {
    if (event.keyCode == 27) {
        closePopup()
    }
  };
};