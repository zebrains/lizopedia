var a = angular.module("a", []);

//Directives

a.directive("topBar", function(){
  return {
    restrict: "E",
    replace: true,
    templateUrl: "top-bar.html"
  };
});
