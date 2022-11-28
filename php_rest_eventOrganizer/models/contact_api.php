<?php 
  class Contact {
    // DB stuff
    private $conn;
    private $table = 'contactus';

    // Post Properties
    public $name;
    public $email;
    public $phone_number;
    public $event_type;
    public $event_place;
    public $message;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

   

// Create Post
public function create() {
  // Create query
  $query = 'INSERT INTO ' . $this->table . ' SET 
      name = :name, 
      email= :email,
      phone_number= :phone_number,
      event_type= :event_type,
      event_place= :event_place,
      message= :message';
    

  // Prepare statement
  $stmt = $this->conn->prepare($query);

  // Clean data
  $this->name = htmlspecialchars(strip_tags($this->name));
  $this->email = htmlspecialchars(strip_tags($this->email));
  $this->phone_number = htmlspecialchars(strip_tags($this->phone_number));
  $this->event_type = htmlspecialchars(strip_tags($this-> event_type));
  $this->event_place = htmlspecialchars(strip_tags($this->event_place));
  $this->message = htmlspecialchars(strip_tags($this->message));

  // Bind data
  $stmt->bindParam(':name', $this->name);
  $stmt->bindParam(':email', $this->email);
  $stmt->bindParam(':phone_number', $this->phone_number);
  $stmt->bindParam(':event_type', $this->event_type);
  $stmt->bindParam(':event_place', $this->event_place);
  $stmt->bindParam(':message', $this->message);

  // Execute query
  if($stmt->execute()) {
    return true;
}

// Print error if something goes wrong
printf("Error: %s.\n", $stmt->error);

return false;
}

    
    }
   