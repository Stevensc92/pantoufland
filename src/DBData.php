<?php

namespace Shop\Framework;

class DBData
{
    private $config;
    private $db;

    private function __construct($config)
    {
        $this->dbconfig = $config;
    }

    //Fonction à utiliser par toutes les autres pour accéder à la connexion à la base de données.
    protected function getDB()
    {
         global $config;
        //Si la connexionDB n'a pas été déjà faite, il faut la faire
         if(!$this->db)
         {
             // Se connecter à la base de données avec PDO
            try
            {
                $this->db = new \PDO("mysql:host=" . $dbconfig['dbhost'] . ";dbname=" . $dbconfig['dbname'].";charset=utf8", $dbconfig['dbuser'], $dbconfig['dbpass']);
            }
            catch (PDOException $e)
            {
            die("Error connecting to DB: " . $e->getMessage());
            }
    }
    return $this->db;
}

    public function getProducts()
    {
        $sql = 'SELECT * FROM products';

        // cette requête ne prend pas de paramètre variable
        // => on peut utiliser la méthode query
        $res = $this->getDB()->query($sql);

        // on veut renvoyer tous les résultats de la requête = fetchAll
        return $res->fetchAll(\PDO::FETCH_ASSOC);

  }
}
