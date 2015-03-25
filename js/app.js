var lizopedia = angular.module("lizopedia", []);


lizopedia.directive("topBar", function(){
  return {
    restrict: "E",
    replace: true,
    templateUrl: "../top-bar.html"
  };
});

lizopedia.directive("jumboTron", function(){
  return {
    restrict: "E",
    replace: true,
    templateUrl: "../jumbotron.html"
  };
});

lizopedia.directive("articlesFrame", function(){
  return {
    restrict: "E",
    replace: true,
    templateUrl: "../articles-frame.html"
  };
});

lizopedia.directive("articleForm", function(){
  return {
    restrict: "E",
    replace: true,
    templateUrl: "../article-form.html"
  };
});

lizopedia.directive("articleBody", function(){
  return {
    restrict: "E",
    replace: true,
    templateUrl: "../article-body.html"
  };
});

lizopedia.directive("articleEdit", function(){
  return {
    restrict: "E",
    replace: true,
    templateUrl: "../article-edit.html"
  };
});

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
        title: "Noises",
        content: "while ins",
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
