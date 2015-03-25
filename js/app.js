var lizopedia = angular.module("lizopedia", []);


lizopedia.controller("ArticleController", function($scope, $log){
    
    $scope.isEditing = false;

    $scope.article = {};

    $scope.editArticle = {};

    $scope.articles = [
	{
	    title: "Bonacles",
	    content: "muah!",
	    editing: false
	},
	{
	    title: "Man Noises",
	    content: "The noises that men make while in the restroom",
	    editing: false
	}
    ];

    $scope.addArticle = function(){
	$scope.articles.push(this.article);
	this.article = {};
    };

    $scope.editArticle = function(index){
	$scope.editArticle.title = $scope.articles[index].title;
	$scope.editArticle.content = $scope.articles[index].content;
	$scope.articles[index].editing = true;
	$scope.isEditing = true;
    };

    $scope.submitArticleChanges = function(index){
	$scope.articles[index].title = $scope.editArticle.title;
	$scope.articles[index].content = $scope.editArticle.content;
	$scope.articles[index].editing = false;
	$scope.isEditing = false;
    };

});