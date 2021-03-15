<?php 

class database{
    private $host;
    private $username;
    private $password; 
    private $database;
    private $dbh;

    public function __construct(){
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = 'Osmanosman1.';
        $this->database = 'flowerpower1';

        try {

            $dsn = "mysql:host=$this->host;dbname=$this->database";
            $this->dbh = new PDO($dsn, $this->username, $this->password);

        } catch (PDOException $exception) {
            die("Connection failed!-> " . $exception.getMessage());
        }
    }

    public function select($sql, $named_placeholder){

        // $sql = "SELECT username, password, email FROM users WHERE username = :uname ;"; // :uname is een named placeholder

        // prepared statement (send statement to server  + checks syntax)
        $statement = $this->dbh->prepare($sql);

        $statement->execute($named_placeholder);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    public function update($sql, $placeholder, $file) {

        $statement = $this->dbh->prepare($sql);
        $statement->execute($placeholder);
        // print_r($statement);
        header("location: " . $file);
        exit;
    }

    public function delete($sql, $placeholder, $file) {

        $statement = $this->dbh->prepare($sql);
        $statement->execute($placeholder);
        header("location: " . $file);
        exit;
    }

    public function add($sql, $placeholder, $file) {

        $statement = $this->dbh->prepare($sql);
        $statement->execute($placeholder);
        header("location: " . $file);
        exit;
    }

    public function insert($sql, $named_placeholder_array){
        // om data integrity te behouden, werken we met transacties.
        // je begint een transactie, en commit deze. als de insert mislukt (transactie mislukt), dan wordt half bijgeschreven data gerevert.
        // op deze manier heb je geen halve data in je database. Meer over transacties en PDO: https://phpdelusions.net/pdo#transactions

        try{
            // start je transactie
            $this->dbh->beginTransaction();

            $statement = $this->dbh->prepare($sql);
            $statement->execute($named_placeholder_array);

            // schrijf data definitief naar db
            $this->dbh->commit();
        }catch(Exception $e){
            // dit stukje wordt alleen bereikt als in de try-clause een error heeft plaatsgevonden.
            // eventuele "data changes" worden gerollbacked, denk aan ctrl+z in een word document.
            $this->pdo->rollback();
            throw $e;
        }


    }
}
?>