var dialToneCtrl = angular.module('dialToneCtrl', []);

dialToneCtrl.controller('homeController', function ($scope, Portal) {
	Portal.create({test:'yes'}, function(res) {
		console.log(res);
	});
    });
