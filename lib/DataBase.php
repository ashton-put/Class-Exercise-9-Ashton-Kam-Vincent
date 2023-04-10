<?php
 class DataBase {
     const DB_DEBUG = true;
     public $pdo;
     public function __construct($dataBaseUser, $dataBaseName) {
        $this->pdo = null;
        $dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $dataBaseName;
        include 'password.php';
        $DataBasePassword = '';
        
        

        switch(substr($dataBaseUser, strpos($dataBaseUser, "_")+1)) {
        case 'reader':
            $dataBasePassword = $reader;
            break;
        case 'writer':
            $dataBasePassword = $writer;
            break;
        };

        if(self::DB_DEBUG){
            print '<p>User: ' . $dataBaseUser . '</p>';
            print '<p>Pass: ' . $DataBasePassword . '</p>';
            print '<p>DSN: ' . $dsn . '</p>';
        }

        try{
            $this->pdo = new PDO($dsn, $dataBaseUser, $dataBasePassword);
            if(!$this->pdo){
                if(self:: DB_DEBUG){
                    print PHP_EOL . '<!-- NOT Connected -->'. PHP_EOL;
                }
                $this->pdo = 0;
            } else {
                if (self:: DB_DEBUG){
                    print PHP_EOL . '<!-- Connected -->' . PHP_EOL;
                }
            }
        } catch(PDOException $e){
        $error_message = $e->getMessage();
        if (self:: DB_DEBUG){
            print '<!-- Error connecting : ' . $error_message . '-->' . PHP_EOL;
        }
        }

        return $this->pdo;
    }
    public function select($query, $values = ''){
        $statement = $this->pdo->prepare($query);
        if(is_array($values)){
            $statement->execute($values);
        } else {
            $statement->execute();
        }
        $recordSet = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $recordSet;
    }

    public function displaySQL($sql, $data = ''){
        $sqlText = $sql;
        foreach ($data as $value){
            // Look for ? and replace with the value
            $pos = strpos($sqlText, $values);
            if ($pos !== false) {
                $sqlText = substr_replace($sqlText, '"' .
        $value . '"', $pos, strlen($sqlText));
            }
        }
    
    
    print '<p>' . $sqlText . '</p>';
 }   

 public function insert($query, $values = ''){
        $statement = $this->pdo->prepare($query);
        $goodRecord = false;
  
        if(is_array($values)){
            $statement->execute($values);
        } else {
            $goodRecord->execute();
        }
       
        $statement->closeCursor();
        return $goodRecord;
    }
 ?>
