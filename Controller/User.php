<?php
class user 
{
    private $db;
    
    //constructor to initialize private variable to the database connection
    function __construct($conn)
    {
        $this->db = $conn;
    }
    public function InsertUser($user_name, $user_pass)
    {
        try 
        {   $result = $this->getUserbyUsername($username);
            if($result['num'] > 0){
                return false;
            } else{
            $sql = "INSERT INTO Employee_ID_PASS (user_name, user_pass)
            VALUES (
                :uname,:upass)";
            //prepare the sql statement for execution
            $stmt = $this->db->prepare($sql);
            // bind all placeholders to the actual values
            $stmt->bindparam(':uname',$user_name);
            $stmt->bindparam(':upass',$user_pass);
            // execute statement
            $stmt->execute();
            return true;
            }

        } 
        catch (PDOException $e)
        {
        echo $e->getMessage();
        return false;
        }
    }
    public function GetUSer($user_name, $user_pass)
    {
        try{
            $sql = "select * from Employee_ID_PASS where username = :username AND password = :password ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':username', $username);
            $stmt->bindparam(':password', $password);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
       }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function getUserbyUsername($username){
        try{
            $sql = "select count(*) as num from Employee_ID_PASS where username = :username";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':username',$username);
            
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
        }
    }

    public function getUsers(){
        try{
            $sql = "SELECT * FROM Employee_ID_PASS";
            $result = $this->db->query($sql);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
    
    
}



?>