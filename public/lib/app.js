$domain='http://127.0.0.1:8000/';
var myApp = angular.module('myApp', ['angularUtils.directives.dirPagination']).constant('API',$domain);
function OtherController($scope) {}