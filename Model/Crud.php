<?php 
    class Crud
    {
        // private database object\
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        
        // function to insert a new record into the attendee database
        public function InsertUserData
            (
            $fname, 
            $lname,
            $eml, 
            $pss, 
            $age,
            $spcl,
            $addr,
            $add_2,
            $city,
            $stte,
            $zip,
            $dob
            )
            {
               
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO Employee_TB (
                    Firstname, Lastname, email, passwd, age, Speciality, addrs, add_2, city, stte, zip, dob)
                    
                VALUES (
                    :fname,
                    :lname,
                    :email,
                    :passwd,
                    :age,
                    :Speciality,
                    :addrs,
                    :addres_2,
                    :city,
                    :stte,
                    :zip,
                    :dob)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':email',$eml);
                $stmt->bindparam(':passwd',$pss);
                $stmt->bindparam(':age',$age);
                $stmt->bindparam(':Speciality',$spcl);
                $stmt->bindparam(':addrs',$addr);
                $stmt->bindparam(':addres_2',$add_2);
                $stmt->bindparam(':city',$city);
                $stmt->bindparam(':stte',$stte);
                $stmt->bindparam(':zip',$zip);
                $stmt->bindparam(':dob',$dob);
                // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
}