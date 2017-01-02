miAppAngular.controller('validarform', function($scope){ 
         
   $scope.mandarInfo = function(){
          if($scope.formulario.$valid){
              $scope.formOk = true;
          }
     } 
 
})