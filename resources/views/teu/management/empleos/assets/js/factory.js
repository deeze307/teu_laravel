app.factory("FactoryEmpleos",["$http",
    function($http){
        return{

            getCategories:function(){
                return $http.get('jobs/categories/all');
            }
        }
    }
]);
