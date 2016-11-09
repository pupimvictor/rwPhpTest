/**
 * Created by victorpupim on 11/5/16.
 */

angular.module('RobustWealthApp')

// inject the fundMonetiseService service into our controller
    .controller('fundMonetiseController', function($scope, $http, fundMonetiseService) {

        fundMonetiseService.get().success(function (fundMonetises) {
            $scope.fundMonetises = fundMonetises;
        });

    });
