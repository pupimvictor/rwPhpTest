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
                    fundService.updateMoneyAmount(id);
                    $scope.closeAlert();
                    $scope.addSuccessAlert();
                })
                .error(function (error) {
                    $scope.closeAlert();
                    $scope.addErrorAlert();
                });
        }

        $scope.alerts = [];

        $scope.addSuccessAlert = function() {
            $scope.alerts.push({
                type: 'success', msg: 'The operation was conclued with succes, Thank you'
            });
        };

        $scope.addErrorAlert = function() {
            $scope.alerts.push({
                type: 'danger', msg: 'Sorry, something went wrong.'
            });
        };

        $scope.closeAlert = function(index) {
            $scope.alerts.splice(index, 1);
        };

    });
