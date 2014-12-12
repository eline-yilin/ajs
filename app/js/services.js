'use strict';

/* Services */


// Demonstrate how to register services
// In this case it is a simple value service.
angular.module('myApp.services', []).
  factory('ciAPIservice', function($http) {

    var restAPI = {};

    restAPI.getDrivers = function() {alert(123);
      return $http({
        method: 'JSONP', 
        url: 'http://ergast.com/api/f1/2013/driverStandings.json?callback=JSON_CALLBACK'
      });
    }
    restAPI.getDriverDetails = function(id) {
        return $http({
          method: 'JSONP', 
          url: 'http://ergast.com/api/f1/2013/drivers/'+ id +'/driverStandings.json?callback=JSON_CALLBACK'
        });
      }

    restAPI.getDriverRaces = function(id) {
        return $http({
          method: 'JSONP', 
          url: 'http://ergast.com/api/f1/2013/drivers/'+ id +'/results.json?callback=JSON_CALLBACK'
        });
      }

    return restAPI;
  }).
  value('version', '0.1');
