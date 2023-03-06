<?php
namespace App\Models;
class Database{

protected static $host,$user,$pass,$db;
protected  $pdo;
protected  $stmt;

public function __construct()
{
    self::$host="localhost";
    self::$user="root";
    self::$pass="";
    self::$db="rs";
    $this->connect();

}

public function connect(){

        $dsn= 'mysql:host=' . self::$host . ';dbname=' . self::$db;

        try{

            $this->pdo= new \PDO($dsn,self::$user,self::$pass);

        }catch (\PDOException $e){

            die("Error connecting database: " . $e->getMessage());
        }
        return $this->pdo;

    }



    public function __destruct()
    {
        if($this->stmt !== null){

            $this->stmt=null;

        }

        if($this->pdo!==null){

            $this->pdo=null;

        }
    }


    public function query($sql){

        $this->stmt=$this->pdo->prepare($sql);


    }

       // Bind values
       public function bind($param, $value, $type = null)
       {
           if (is_null($type)) {
               switch (true) {
                   case is_int($value):
                       $type = \PDO::PARAM_INT;
                       break;
   
                   case is_bool($value):
                       $type = \PDO::PARAM_BOOL;
                       break;
   
                   case is_null($value):
                       $type = \PDO::PARAM_NULL;
                       break;
   
                   default:
                       $type = \PDO::PARAM_STR;
               }
           }
   
           $this->stmt->bindValue($param, $value, $type);
       }


    public function run_query($sql){

        $this->query($sql);
        $this->execute();

    }

    public function get_results($sql){

        $this->query($sql);

        return $this->fetch();

    }

    // Execute the prepared statement
    public function execute()
    {
        return $this->stmt->execute();
    }


    public function fetchall()
    {
        $this->execute();
        return $this->stmt->fetchAll();
    }

    public function fetch(){
        $this->execute();
        return $this->stmt->fetch();
    }

    
    // Get row count
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
   
}