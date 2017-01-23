var dialToneSrv = angular.module('dialToneSrv', ['ngResource']);

dialToneSrv.factory('Portal', ['$resource',
    function ($resource) {
        return $resource('api/portal/:test', {test: '@test'}, {
            create: {method: 'POST', isArray: false},
            update: {method: 'PUT', isArray: false},
            query: {method: 'GET', isArray: true},
            get: {method: 'GET', isArray: false}
        });
    }]);
