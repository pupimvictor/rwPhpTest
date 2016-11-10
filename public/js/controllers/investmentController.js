/**
 * Created by victorpupim on 11/5/16.
 */

angular.module('RobustWealthApp')

// inject the investmentService service into our controller
    .controller('investmentController', function($scope, $http, investmentService, clientService, fundService) {

        $scope.investments = [];
        $scope.newInvestment = {};

        clientService.get()
            .success(function (clients){
                $scope.clients = clients;
            });

        fundService.get()
            .success(function (funds){
                $scope.funds = funds;
            });

        investmentService.get()
            .success(function (investments) {
                $scope.investments = investments;
            });

        $scope.createInvestment = function () {
            investmentService.save($scope.newInvestment)
                .success(function (id) {
                    $scope.newInvestment.id = id;
                });
        }

    });
