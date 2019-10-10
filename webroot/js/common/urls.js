/* All API endpoints should be defined here */

var API_URLS = {
  base_url: typeof apiBaseUrl !== 'undefined' ? apiBaseUrl + '/' : 'http://localhost/api/',
  login: 'admin/login',
  password_remind: 'admin/password/remind',
  update_password: 'admin/password/update',
};