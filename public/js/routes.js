'use strict';

/**
 * Route configuration for the RDash module.
 */
angular.module('RobustWealthApp').config(['$stateProvider', '$urlRouterProvider',
    function($stateProvider, $urlRouterProvider) {

        // For unmatched routes
        $urlRouterProvider.otherwise('/');

        // Application routes
        $stateProvider
            .state('index', {
                url: '/',
                templateUrl: 'templates/dashboard.html'
            })
            .state('investments', {
                url: '/investment',
                templateUrl: '../templates/investments.html'
            });
    }
]);