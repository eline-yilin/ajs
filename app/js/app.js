'use strict';


// Declare app level module which depends on filters, and services
angular.module('myApp', ['myApp.controllers','myApp.filters', 'myApp.services', 'myApp.directives']).
  config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/view1', {templateUrl: 'partials/partial1.html', controller: MyCtrl1});
    $routeProvider.when('/view2', {templateUrl: 'partials/partial2.html', controller: MyCtrl2});
    $routeProvider. when("/drivers", {templateUrl: "partials/drivers.html", controller: "driversController"});
    $routeProvider.when('/drivers/:id', {templateUrl: 'partials/driver.html', controller: "driverController"});
    $routeProvider.otherwise({redirectTo: '/drivers'});
  }]);
