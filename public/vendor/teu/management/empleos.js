app.controller("empleosController",["$scope","$rootScope","$http","FactoryEmpleos","toasty","IaCore",function(o,t,e,n,a,c){function r(){n.getCategories().then(function(t){o.categories=t.data})}r(),o.promptEnter=function(t){o.updateCategory(t)},o.btnClick=function(t,e,n,a){o.empCat=[],o.empCat.newName=a.categoria_nombre,o.empCat.id=a.id,o.openModal(t,e,n)},o.openModal=function(t,e,n){c.modal({scope:o,route:t,title:e,type:n,ignoreloadingbar:!1})};var l,i=t.$on("modal:show",function(o,t){l=t,i()});o.closeModal=function(){l.dialog.close()}}]),app.factory("FactoryEmpleos",["$http",function(o){return{getCategories:function(){return o.get("jobs/categories/all")}}}]),app.controller("promptController",["$scope","$rootScope","$http","FactoryEmpleos","toasty","IaCore",function(o,t,e,n,a,c){function r(o){console.log(o)}function l(){n.getCategories().then(function(t){o.categories=t.data})}o.updateCategory=function(o){r(o)},o.promptEnter=function(o){r(o)};var i,p=t.$on("modal:show",function(o,t){console.log("modal cargado"),i=t,console.log("Show Modal",t),p()});o.closeModal=function(){l(),i.dialog.close()}}]);