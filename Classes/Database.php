<?php

/**
 * Class to connect to the database and execute a query
 *
 * Author: Jan-Philip Link, Tobias Lang
 */
class Database
{
    private $database = "MYSQL_DATABASE";
    private $user = "MYSQL_USER";
    private $password = "MYSQL_PASSWORD";
    private $host = "MYSQL_HOST";
    private $pdo;
    public static $connection;

    /**
     * @method constructor which creates a database connection
     *
     * @throws PDOException for connection
     */
    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database, $this->user, $this->password);
        } catch (PDOException $e) {
            die('Database connection error: ' . $e->getMessage());
        }
    }

    /**
     * @method to validate and execute a query with prepared statemets
     *
     * @param String $query the query to be executed
     * @param Array $params associative array wich includes the params of the query
     *
     * @return Mixed return of query result
     *
     * @throws PDOException for prepare and execute
     */
    public function executeQuery(String $query, Array $params)
    {
        try {
            $stmt = $this->pdo->prepare($query);

            // loop throught $params to validate if a param starts with ':'
            $paramsNew = [];
            foreach ($params as $key => $value) {
                $key = ':' . ltrim($key, ':');
                $paramsNew[$key] = $value;
            }

            $stmt->execute($paramsNew);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt = null;

        } catch (PDOExeption $e) {
            die('Database error: ' . $e->getMessage());
        }
        return $result;
    }


    public static function getDbConnection()
    {

        if (!self::$connection)
            self::$connection = new self();

        return self::$connection;
    }

}
