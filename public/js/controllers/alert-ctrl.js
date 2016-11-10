/**
 * Alerts Controller
 */

angular
    .module('RobustWealthApp')
    .controller('AlertsCtrl', ['$scope', AlertsCtrl]);

function AlertsCtrl($scope) {
    $scope.alerts = [{
        type: 'success',
        msg: 'The operation was conclued with succes, Thank you'
    }, {
        type: 'danger',
        msg: 'Sorry, something goes wrong.'
    }];

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
}