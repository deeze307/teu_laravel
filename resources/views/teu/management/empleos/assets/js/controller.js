app.controller("empleosController",["$scope","$rootScope","$http","FactoryEmpleos","toasty","IaCore",function($scope,$rootScope,$http,FactoryEmpleos,toasty,IaCore){

    getCategories();

    $scope.promptEnter = function(category){
        $scope.updateCategory(category);
    };

    function getCategories(){
        FactoryEmpleos.getCategories().then(function(response){
            $scope.categories = response.data;
        });
    }


    // Modal

    $scope.btnClick = function(route, title, type,category){
        $scope.empCat=[];
        $scope.empCat.newName = category.categoria_nombre;
        $scope.empCat.id = category.id;
        $scope.openModal(route,title,type);
    };

    $scope.openModal = function(route, title, type) {
        IaCore.modal({
            scope: $scope,
            route:route,
            title: title,
            type: type,
            ignoreloadingbar: false
        });
    };
    var elmodal;

    var onShow = $rootScope.$on("modal:show",function(event,modal)
    {
        elmodal = modal;
        onShow(); // Es necesario volver a llamar el metodo, para destruirlo
    });

    $scope.closeModal = function(){
        elmodal.dialog.close();
    };
}]);
