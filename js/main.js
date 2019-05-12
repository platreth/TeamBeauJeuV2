import {HomePageController} from './homePageController.js'
import {SwissTournamentController} from './swissTournamentController.js'

var app = angular.module("GatherTournamentApp", ["ngRoute"]);

app.directive('customOnChange', function() {
  return {
    restrict: 'A',
    link: function (scope, element, attrs) {
      var onChangeHandler = scope.$eval(attrs.customOnChange);
      element.on('change', onChangeHandler);
      element.on('$destroy', function() {
        element.off();
      });
    }
  };
});

app.config(["$routeProvider", function($routeProvider) {
	$routeProvider
	.when("/", {
		templateUrl: "html/homePage.html",
		controller: "HomePageCtrl",
		caseInsensitiveMatch: false
	})
	.when("/settings", {
		templateUrl: "html/settings.html",
		controller: "HomePageCtrl",
		caseInsensitiveMatch: false
	})
	.when("/swiss/:import?", {
		templateUrl: "html/swissTournament.html",
		controller: "SwissTournamentCtrl",
		caseInsensitiveMatch: false
	})
	.otherwise({
		templateUrl: "html/404.html",
		caseInsensitiveMatch: false
	});
}]);

app.controller("HomePageCtrl", ["$scope", HomePageController]);

app.controller("SwissTournamentCtrl", ["$scope", "$route", "$routeParams", "$q", SwissTournamentController]);


$(document).ready(function() {
  

	  
    var numItems = $('li.fancyTab').length;
		
	
			  if (numItems == 12){
					$("li.fancyTab").width('8.3%');
				}
			  if (numItems == 11){
					$("li.fancyTab").width('9%');
				}
			  if (numItems == 10){
					$("li.fancyTab").width('10%');
				}
			  if (numItems == 9){
					$("li.fancyTab").width('11.1%');
				}
			  if (numItems == 8){
					$("li.fancyTab").width('12.5%');
				}
			  if (numItems == 7){
					$("li.fancyTab").width('14.2%');
				}
			  if (numItems == 6){
					$("li.fancyTab").width('16.666666666666667%');
				}
			  if (numItems == 5){
					$("li.fancyTab").width('20%');
				}
			  if (numItems == 4){
					$("li.fancyTab").width('25%');
				}
			  if (numItems == 3){
					$("li.fancyTab").width('33.3%');
				}
			  if (numItems == 2){
					$("li.fancyTab").width('50%');
				}
		  
	 

	
		});

$(window).load(function() {

  $('.fancyTabs').each(function() {

    var highestBox = 0;
    $('.fancyTab a', this).each(function() {

      if ($(this).height() > highestBox)
        highestBox = $(this).height();
    });

    $('.fancyTab a', this).height(highestBox);

  });
});
