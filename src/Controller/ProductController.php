<?php

namespace Shop\Controller;

use Shop\Framework\Controller;

class ProductController extends Controller
{
  public function prduct()
  {
    echo $this->templates->render('admin/product-list');
  }
}
