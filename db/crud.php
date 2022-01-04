<?php

    class crud {
        private $db;
        
        //Constructor is ti Initialize Private Variable to the Database Connection
        function __construct($conn){
            $this->db = $conn;
        }
        
        //Function to Insert a New Record into the Attendee Database
        public function insert($fname, $lname, $dob, $email, $contact, $specialty) {

            try {
                //Define SQL Statement to be Executed
                $sql = "INSERT INTO attendee (firstname, lastname, dateofbirth, emailaddress, contactnumber, specialty_id) VALUES (:fname, :lname, :dob, :email, :contact, :specialty)";
                //Prepare the SQL Statement for the Execution
                $stmt = $this->db->prepare($sql);
                
                //Bind all the Placeholders to the Actual Values
                $stmt->bindparam(':fname', $fname);
                $stmt->bindparam(':lname', $lname);
                $stmt->bindparam(':dob', $dob);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':contact', $contact);
                $stmt->bindparam(':specialty', $specialty);

                //Execute Statement
                $stmt->execute();
                return true;

            } 
            catch (PDOException $e) 
            {
                echo $e->getMessage();
                return false;
            }

        }

        public function editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty)
        {
            try
            {
                //Define SQL Statement to be Executed

                //$sql = "UPDATE `attendee` SET `firstname`='$fname', `lastname`=$lname, `dateofbirth`=$dob, `emailaddress`=$email, `contactnumber`= $contact,`specialty_id`= $specialty WHERE `attendee_id`= $id";
                //$sql = "UPDATE 'attendee' SET 'firstname' = :fname, 'lastname' = :lname, 'dateofbirth' = :dob, 'emailaddress' = :email, 'contactnumber' = :contact, 'specialty_id' = :specialty WHERE 'attendee'.'attendee_id' = :id";
               //$sql = "UPDATE 'attendee' SET 'attendee_id' = $id, 'firstname' = $fname, 'lastname' = $lname, 'dateofbirth' = $dob, 'emailaddress' = $email, 'contactnumber' = $contact, 'specialty_id' = $specialty WHERE 'attendee'.'attendee_id' = $id";
                //Prepare the SQL Statement for the Execution
                
                //Delete Style
                $sql = "DELETE FROM 'attendee' WHERE 'attendee_id' = '$id'";
                
                $stmt = $this->db->prepare($sql);

                //Bind all the Placeholders to the Actual Values
                /*$stmt->bindparam(':id', $id);
                $stmt->bindparam(':fname', $fname);
                $stmt->bindparam(':lname', $lname);
                $stmt->bindparam(':dob', $dob);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':contact', $contact);
                $stmt->bindparam(':specialty', $specialty);*/

                //Execute Statement
                $stmt->execute();
                return true;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }
        }

        public function getAttendees(){
            try{
                $sql = "SELECT * FROM attendee a inner join speciality s on a.specialty_id = s.specialty_id";
                $result = $this->db->query($sql);
                return $result;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }
        }

        public function getAttendeeDetails($id){
            try{
                //Technique 1 
                //$sql = "SELECT * FROM attendee where attendee_id = '$id'";
                //Technique 2
                $sql = "SELECT * FROM attendee a inner join speciality s on a.specialty_id = s.specialty_id where attendee_id = '$id'";
                /* Not Needed :-
                $stmt = $this->db->query($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();*/
                $result = $this->db->query($sql);
                return $result;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }
        }

        public function getSpecialties(){
            try{
                $sql = "SELECT * FROM speciality";
                $result = $this->db->query($sql);
                return $result;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }
        }

        public function delete($id)
        {
            try
            {
            $sql = "DELETE FROM attendee where attendee_id = $id";
            $stmt = $this->db->query($sql);
            //$stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }
        }

    }

?>