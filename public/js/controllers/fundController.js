/**
 * Created by victorpupim on 11/5/16.
 */

angular.module('RobustWealthApp')

// inject the fundService service into our controller
    .controller('fundController', function($scope, $http, fundService) {

        fundService.get().success(function (funds) {
            $scope.funds = funds;
        });

    });
