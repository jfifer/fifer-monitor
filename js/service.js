var dialToneSrv = angular.module('dialToneSrv', ['ngResource']);

dialToneSrv.factory('Portal', ['$resource',
    function ($resource) {
        return $resource('api/portal/', {}, {
            post: {method: 'POST', isArray: false},
            query: {method: 'GET', isArray: true},
            get: {method: 'GET', isArray: false}
        });
    }]);
