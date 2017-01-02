miAppAngular.controller('inicio', function($scope , configuracionGlobal , $http, $location){
    
    $scope.config = configuracionGlobal;
    
    $http.get( configuracionGlobal.api_url + "/info.json" )
        .then( function(respuesta){
        
            $scope.datosapi = respuesta.data.datos;
        
        })
    
});