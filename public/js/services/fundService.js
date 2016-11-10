/**
 * Created by victorpupim on 11/5/16.
 */
angular.module('RobustWealthApp')

    .factory('fundService', function($http) {

        return {
            // get all the comments
            get: function () {
                return $http.get('/api/fund/');
            },

            updateMoneyAmount: function (id) {
                return $http.put('api/fund/newInvestiment/', id);
            }

        }
    });