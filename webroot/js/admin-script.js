if (typeof AJAX_WRAPPER !== 'undefined') {
  AJAX_WRAPPER.setBaseUrl(API_URLS.base_url);
}

// Get Auth token from localStorage or cookie
var authToken = '';

var headers = {
  Authorization: 'bearer ' + authToken,
};

$(document).ajaxError(function (event, xhr, settings, thrownError) {
  // ajax global event on 'error'
  
});

$(document).ajaxComplete(function (event, xhr, settings) {
  // ajax global event on 'complete'
  
});

var ACTIONS = {
  // All API calling method will be defined here

};