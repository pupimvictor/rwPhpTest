/**
 * Created by victorpupim on 11/5/16.
 */
angular.module('RobustWealthApp')

    .factory('fundMonetiseService', function($http) {

        return {
            // get all the comments
            get: function () {
                return $http.get('/api/fundMonetise/');
            }
        }
    });