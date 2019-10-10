AJAX_WRAPPER.setBaseUrl(API_URLS.base_url);

var ACTIONS = {
  login: function(data) {
    AJAX_WRAPPER
      .callAPI(API_URLS.login, 'post', data)
      .done(function(response, statusTxt, xhr) {
        // Set Auth token in localStorage or cookie.
      })
      .fail(function(error) {
        
      });
  },
};


$(document).ready(function() {
  if ($("#form-login").length > 0) {
    $("#form-login").on("submit", function (event) {
      event.preventDefault();
      $(".error-message, .error-show").addClass("hidden-msg");
      var loginId = $("#inputLoginId").val();
      var loginPasswd = $("#inputPassword").val();

      ACTIONS.login({
        login_id: loginId,
        login_passwd: loginPasswd,
      });
    });
  }

});
