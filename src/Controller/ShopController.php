<?php

namespace Shop\Controller;

use Shop\Framework\Controller;

class ShopController extends Controller{

  public function home()
{

    // var_dump($this->config);

    //--------------------------------
    //------$$products = $dbdata -> getProducts();--------

    // et utilisez votre tout nouveau moteur de templates ici pour afficher la home
    echo $this->templates->render('shop/home');

  }
  public function cart()
  {
    echo $this->templates->render('shop/cart');
  }
  public function signin()
  {
    echo $this->templates->render('shop/signin');
  }
  public function signup()
  {
    echo $this->templates->render('shop/signup');
  }
}
