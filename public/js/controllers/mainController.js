/**
 * Created by victorpupim on 11/5/16.
 */
angular.module('RobustWealthApp', [])

// inject the Comment service into our controller
    .controller('mainController', function($scope, $http) {

        $scope.client = 'Robust Wealth';

    });
