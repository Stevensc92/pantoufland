<?php

namespace Shop\Framework;

class Controller
{
  protected $router;
  protected $config;
  protected $templates;
  protected $dbdata;

  public function __construct( $router, $config)
  {
    $this->router = $router;
    $this->config = $config;


    // initialisez le moteur de templates ici
    $this->templates = new \League\Plates\Engine('src/Templates');

    // mettre des variables à disposition des templates:
    $this->templates->addData([
      'router' => $router,
      'config' => $config]);

  //           --------------------------------
  //  --------$this->dbdata = new DBData($this->config);-----------
  }
}

 ?>
