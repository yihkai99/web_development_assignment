<?php 
  class Post {
    // DB stuff
    private $conn;
    private $table = 'user';

    // Post Properties
    public $username;
    public $password;
    public $name;
    public $email_address;
    

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT * FROM ' . $this->table . '';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

    
    }
   