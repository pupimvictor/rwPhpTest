/**
 * Created by victorpupim on 11/5/16.
 */
angular.module('mainCtrl', [])

// inject the Comment service into our controller
    .controller('mainController', function($scope, $http) {

        $scope.client = 'test';

    });
