
var AJAX_WRAPPER = {
  baseUrl: 'http://localhost/',
  setBaseUrl: function (baseUrl) {
    this.baseUrl = baseUrl;
  },
  callAPI: function (url, method, payload, headers) {
    var apiUrl = this.baseUrl + url;
    
    return $.ajax({

      // The URL for the request
      url: apiUrl ,

      headers: headers,

      // The data to send (will be converted to a query string)
      data: payload,

      // Whether this is a POST or GET request
      type: method,

      // The type of data we expect back
      dataType : "json",
    });
  },
  callFileUploadAPI: function (url, method, payload, headers) {
    var apiUrl = this.baseUrl + url;
    return $.ajax({
      async: true,
      crossDomain: true,
      // The URL for the request
      url: apiUrl,

      headers: headers,

      // The data to send (will be converted to a query string)
      data: payload,

      // Whether this is a POST or GET request
      type: method,

      processData: false,

      contentType: false,

      mimeType: "multipart/form-data",
      
      dataType : "json",

      // The type of data we expect back
      // dataType: "json",
    });
  },
};
