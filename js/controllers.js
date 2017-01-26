var dialToneCtrl = angular.module('dialToneCtrl', []);

dialToneCtrl.controller('homeController', function ($scope, Portal) {
	$scope.groups = [];

	Portal.query({}, function(res) {
		$scope.groups = res;
	});
    });
