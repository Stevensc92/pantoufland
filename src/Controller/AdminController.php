<?php

namespace Shop\Controller;

use Shop\Framework\Controller;

class AdminController extends Controller
{
  public function dashboard()
  {
    echo $this->templates->render('admin/dashboard');
  }
}
