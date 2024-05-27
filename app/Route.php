<?php
//o namespace serve para não ter várias coisas com o mesmo nome
//e neste contexto, serve para o composer, por meio do ps4 conseguir funcionar, por isso temos que colocar 
// eles como estão as pastas, por exemplo o route está dentro de app, então ele vai ter um namespace que se chama app
namespace app;
class Route{
    public function initRoutes(){
        $routes['home']=array(
            'route'=> '/',
            'controller'=> 'indexController',
            'action'=> 'index'
        );
        $routes['sobre_nos']=array(
            'route'=> '/sobre_nos',
            'controller'=> 'indexController',
            'action'=> 'sobreNos'
        );
    }
    public function getURL(){
        //essa é uma super global que retorna tudo sobre o servidor
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
}