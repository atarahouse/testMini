<?php

class Controller
{
    /**
     * @var null Database Connection
     */
    private $db = null;

    /**
     * @var default Page Title
     */
    public $titlePage = null;

    /**
     * @var default Meta Description
     */
    public $metaDescription = 'myMini';

    /**
     * @var default Meta Key Word
     */
    public $metaKeyword= 'myMini';


    /**
     * Whenever controller is created, open a database connection too .
     */
    function __construct(){ }

    /**
     * Open the database connection with the credentials from application/config/config.php
     */
    private function openDatabaseConnection()
    {
        // set the (optional) options of the PDO connection. in this case, we set the fetch mode to
        // "objects", which means all results will be objects, like this: $result->user_name !
        // For example, fetch mode FETCH_ASSOC would return results like this: $result["user_name] !
        // @see http://www.php.net/manual/en/pdostatement.fetch.php
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

        // generate a database connection, using the PDO connector
        // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
    }

    /**
     * Loads the "model".
     * @param string $models
     */
    public function loadModel($mdl)
    {
        require APP . 'model/' . $mdl .'.php';
        
        $this->openDatabaseConnection();
        $this->model = new $mdl($this->db);
        
        return new $mdl($this->db);
    }

   /**
     * Loads the "views".
     * @param string $view
     */
    public function loadView($vw)
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/'. $vw . '.php';
        require APP . 'view/_templates/footer.php';
    }
}