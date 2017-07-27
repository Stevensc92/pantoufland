<?php

namespace Shop;

use AltoRouter;

class FrontController
{

  public static function run()
  {

    // Charger la config :
    $config = parse_ini_file('config.conf');
    var_dump($config);

    // Configuration des routes :
    $routes = array(
      // map homepage
      array( 'GET', '/', 'ShopController#home', 'home'),
      array( 'GET', '/admin', 'AdminController#dashboard', 'admin_dashboard'),
      array( 'GET', '/prduct', 'ProductController#prduct', 'admin_prduct'),
      array('GET','/cart','ShopController#cart','cart'),
      array('GET','/signin','ShopController#signin','signin'),
      array('GET','/signup','ShopController#signup','signup')
    );

    // créer le router
    $router = new AltoRouter();
    // configurer le routeur (base_path & mapping des routes)
    $router->setBasePath($config['BASE_PATH']);
    $router->addRoutes($routes);


    // lancer le matching du routeur
    // match current request url
    $match = $router->match();

    // il fait le dispatch
    // call closure or throw 404 status
    if( $match ) {
    	// get controller & fonction name from $match['target']
      $parts = explode('#', $match['target']);

      // $parts = explode('#', 'ShopController#home');

      /* $parts = [
            0 => "ShopController"
            1 => "home"
          ]*/

      // je récupère le nom de la classe du Controller que je veux utiliser
      $ctrlClass = 'Shop\\Controller\\' . $parts[0];

      // instancier le controller souhaité
      $controller = new $ctrlClass($router, $config);

      // on récupère le nom de la méthode souhaitée
      $methodName = $parts[1];  // 'home'

      $controller->$methodName(extract($match['params']));

    } else {
    	// no route was matched
    	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    }

  }

}

 ?>
