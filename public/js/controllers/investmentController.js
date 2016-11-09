/**
 * Created by victorpupim on 11/5/16.
 */

angular.module('RobustWealthApp')

// inject the investmentService service into our controller
    .controller('investmentController', function($scope, $http, investmentService) {

        investmentService.get().success(function (investments) {
            $scope.investments = investments;
        });

    });
