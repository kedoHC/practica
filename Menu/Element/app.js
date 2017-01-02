var miAppAngular = angular.module('elementWeb', ['ngRoute'] )

miAppAngular.config( [ '$routeProvider' , function($routeProvider){
    
    $routeProvider.when('/' , {      
        templateUrl: 'plantillas/inicio.html',
        controller: 'inicio'
    })
    .when('/dream' , {      
        templateUrl: 'plantillas/dream.html'
    })
    .when('/enjoy' , {      
        templateUrl: 'plantillas/enjoy.html'
    })
    .when('/work' , {      
        templateUrl: 'plantillas/work.html'
    })
    .when('/believe' , {      
        templateUrl: 'plantillas/believe.html'
    })
    .when('/404', {
        templateUrl: 'plantillas/404.html'
    })
    .otherwise({        
        redirectTo: '/404'        
    });
    
} ] );


miAppAngular.constant('configuracionGlobal' , {
 
    'nombreDelSitio':'dogs live',
    'api_url': 'http://localhost/practica/Menu/Element/api',
    'carpeta_imagenes':'/imagenes/'
    
})