var dialTone = angular.module('dialTone', [
    'ngRoute',
    'dialToneCtrl',
    'dialToneDirectives',
    'dialToneSrv'
]).config(['$routeProvider', function ($routeProvider) {
        $routeProvider
                .when('/', {
                    templateUrl: 'assets/partials/home.html',
                    controller: 'homeController'
                })
                .otherwise({
                    redirectTo: '/'
                });
    }]);
