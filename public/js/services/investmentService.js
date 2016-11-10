/**
 * Created by victorpupim on 11/5/16.
 */
angular.module('RobustWealthApp')

    .factory('investmentService', function($http) {

        return {
            // get all the investments
            get: function () {
                return $http.get('/api/investment/');
            },

            // create investment
            save: function (investment) {
                return $http.post('/api/investment/', investment);
            }
        }
    });