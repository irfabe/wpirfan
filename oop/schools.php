<?php 

    include_once 'Database.php';
    //cara mengkonekksikan
    

class schools {
     // Connection
     private $conn;
     // Table
     private $db_table = "schools";
     // Columns
     public $id;
     public $user_id;
     public $email;
     public $password;
     // Db connection
     public function __construct($db){
         $this->conn = $db;
     }

     public function getschools(){
        $sqlQuery = "SELECT user.fullname,schools.*  FROM " . $this->db_table . 
        " INNER JOIN user ON schools.user_id = user.id";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }
    public function getschoolsByUser($user_id){
        $sqlQuery = "SELECT user.fullname,schools.*  FROM " . $this->db_table . 
        " INNER JOIN user ON schools.user_id = user.id".
        " WHERE user_id = ". $user_id;
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }
    
}

$database = new Database();
$db = $database->getConnection();
$query = new schools($db);
$result = $query->getschools()->fetchAll(PDO :: FETCH_ASSOC);
//var_dump ($result);

?>