<header>
  <nav>
    <ul>
      <li><a href="<?= $router->generate('home'); ?>">Home</a></li>
      <li><a href="<?= $router->generate('admin_dashboard'); ?>">Admin</a></li>
      <li><a href="<?= $router->generate('admin_prduct'); ?>">Produits</a></li>
      <li><a href="<?= $router->generate('cart'); ?>">Le panier</a></li>
      <li><a href="<?= $router->generate('signup'); ?>">connection</a></li>
      <li><a href="<?= $router->generate('signin'); ?>">Inscription</a></li>

    </ul>
  </nav>
</header>
