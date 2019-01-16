$(document).ready(function() {
  function popup() {
    var openPopupButtonsCollection = $('.js-open-popup');
    var popupCloseSelector = $('.js-popup-close');
    var popup = $('.js-popup');
    var openPopup = function() {
      popup.addClass('popup--show');
    };
    var closePopup = function() {
      popup.removeClass('popup--show');
    };
  
    openPopupButtonsCollection.on('click', openPopup);
    popupCloseSelector.on('click', closePopup);
  
    $(document).on('keydown', function (event) {
      if (event.keyCode == 27) {
        closePopup()
      }
    });
  }

  function smoothAnchor() {
    var menu = $('.js-nav');
    var smoothSpeed = 500;

    menu.on('click','a', function (event) {
      event.preventDefault();

      var target = $(event.target);
      var id  = target.attr('href');
      var top = $(id).offset().top;
      
      $('body,html').animate({scrollTop: top}, smoothSpeed);
    });
  }

  function displayAlertSuccessSubmit() {
    var href = window.location.href;
    var hasSubmitHref = href.includes('submit');

    if (hasSubmitHref) {
      var alert = $('.js-alert');
      var toggleVisibleAlert = function(isVisible) {
        alert.toggle(isVisible);
      };
      var timeDisplayAlert = 3000;

      toggleVisibleAlert(true);

      setTimeout(function() {
        toggleVisibleAlert(false);
      }, timeDisplayAlert);
    }
  }

  popup();
  smoothAnchor();
  displayAlertSuccessSubmit();
});