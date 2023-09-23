<?php
require("database.php");
class backend
{
    public function signIn($username,$email,$password){
        return self::login($username,$email,$password);
    }
    public function signUp($username,$email,$password){
        return self::register($username,$email,$password);
    }
    public function editProfile($fname,$lname,$age,$gender,$email_phone,$pm){
        return self::insertProf($fname,$lname,$age,$gender,$email_phone,$pm);
    }
    public function addProduct($image, $pname, $pprice, $pkilo){
        return self::addProd($image, $pname, $pprice, $pkilo);
    }
    public function display(){
        return self::displayProduct();
    }
    public function search($search){
        return self::forSearch($search);
    }
    
    public function doLogout(){
        return self::Logout();
    }
    

    private function login($username,$email,$password)
    {
        try {
            if ($this->checkIfVallid($username,$email,$password)) {
                $database = new database();
                if ($database->getStatus()) {
                    $tmp = md5($password);
                    $stmt = $database->getCon()->prepare($this->signInQuery());
                    $stmt->execute(array($username,$email,$tmp));
                    $result = $stmt->fetch();
                    if ($result) {
                        // Fetch the user's role from the database
                        $role = $this->getUserRole($username);

                        // Fetch the user's classification from the database
                        $classification = $this->getUserClassification($username);

                        $_SESSION['username'] = $username;
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $tmp;
                        $_SESSION['user_id'] = $result['user_id']; 

                        $this->updateActiveStatus($username);

                        $database->closeConnection();

                        // Return the user's role and classification along with the status code
                        return json_encode(["status" => "200", "role" => $role, "classification" => $classification]);
                    } else {
                       
                        $database->closeConnection();
                        return "401";
                    }
                } else {
                    return "401";
                }
            } else {
                return "403";
            }
        } catch (PDOException $th) {
            return "501";
        }
    }

    private function register($username,$email,$password){
        try {
            if ($this->checkIfVallid($username,$email,$password)) {
                $database = new database();
                if ($database->getStatus()) {
                    $stmt = $database->getCon()->prepare($this->signUpQuery());
                    $stmt->execute(array($username,$email,md5($password),$this->getCurrentDate()));
                    $result = $stmt->fetch();
                    if(!$result){
                        $_SESSION['username'] = $username;
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        $database->closeConnection();
                        return "200";
                    }else{
                        $database->closeConnection();
                        return "404";
                    }
               
                }else{
                    return "403";
                }
            } else {
                return "403";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }


    private function updateActiveStatus($username)
    {
        try {
            $database = new database();
            if ($database->getStatus()) {
                $updateStmt = $database->getCon()->prepare("UPDATE users SET status = 'Active now' WHERE username = ?");
                $updateStmt->execute(array($username));
                $database->closeConnection();
                return "200";
            } else {
                 return "403";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }


    private function addProd($image, $pname, $pprice, $pkilo){
    try {
        $database = new Database();
        if ($database->getStatus()) {
            $imageFileName = $this->uploadImage($image);

            if ($imageFileName) {
                $stmt = $database->getCon()->prepare($this->addProductQuery());
                $stmt->execute(array($imageFileName, $pname, $pprice, $pkilo, $this->getCurrentDate()));
                $result = $stmt->fetch();
                if (!$result) {
                    $database->closeConnection();
                    return "200";
                } else {
                    $database->closeConnection();
                    return "404";
                }
            } else {
                return "500";
            }
        } else {
            return "403";
        }
    } catch (PDOException $th) {
        return $th;
    }
}

private function displayProduct() {
    try {
        $db = new database();
        if ($db->getStatus()) {
            $stmt = $db->getCon()->prepare($this->getProductQuery());
            $stmt->execute();
            $result = $stmt->fetchAll();
            $db->closeConnection();
            return json_encode($result);
        } else {
            return "403";
        }
    } catch (PDOException $th) {
        return "501";
    }
}




    private function uploadImage($image)
    {
        $uploadDir = "../uploads/productImage/";
        $allowedExtensions = ["jpg", "jpeg", "png", "gif"];
        $imageFileName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];
        $imageExtension = strtolower(pathinfo($imageFileName, PATHINFO_EXTENSION));
    
        if (in_array($imageExtension, $allowedExtensions)) {
            // $uniqueFileName = uniqid() . "." . $imageExtension;
            $uploadPath = $uploadDir . $imageFileName;
    

            if (move_uploaded_file($imageTmpName, $uploadPath)) {
                return $imageFileName;
            }
        }
    
        return false;
    }
    

    private function forSearch($search)
    {
        try {
                $database = new database();
                if ($database->getStatus()) {
                    $stmt = $database->getCon()->prepare($this->getProductQuery());
                    $stmt->execute(array($search));
                    $result = $stmt->fetchAll();
                    $res = $result->toLowerCase().includes($search);
                    $db->closeConnection();
                    return json_encode($result);
                } else {
                    return "401";
                }
        } catch (PDOException $th) {
            return "501";
        }
    }



    private function Logout()
    {
        try {
            if (isset($_SESSION['username'])) {
                $database = new database();
                if ($database->getStatus()) {
                    $username = $_SESSION['username'];
                    $updateStmt = $database->getCon()->prepare("UPDATE users SET status = 'Offline now' WHERE username = ?");
                    $updateStmt->execute(array($username));
                    session_unset();
                    session_destroy();
                    $database->closeConnection();
                    return "200";
                } else {
                    return "403";
                }
            } else {
                return "403"; 
            }
        } catch (PDOException $th) {
            return "501";
        }
    }

    private function getUserRole($username)
    {
        try {
            $database = new database();
            if ($database->getStatus()) {
                $stmt = $database->getCon()->prepare($this->roleQuery());
                $stmt->execute([$username]);
                $result = $stmt->fetch();

                if ($result) {
                    $role = $result['role'];
                    $database->closeConnection();
                    return $role;
                }
            }
            $database->closeConnection();
        } catch (PDOException $th) {
            return "501";
        }

        return ""; // Return an empty string if role retrieval fails
    }

    private function getUserClassification($username)
    {
        try {
            $database = new database();
            if ($database->getStatus()) {
                $stmt = $database->getCon()->prepare($this->classificationQery());
                $stmt->execute([$username]);
                $result = $stmt->fetch();

                if ($result) {
                    $classification = $result['classification'];
                    $database->closeConnection();
                    return $classification;
                }
            }
            $database->closeConnection();
        } catch (PDOException $th) {
            return "501";
        }

        return ""; // Return an empty string if role retrieval fails
    }



    // private function insertProf($fname,$lname,$age,$gender,$email_phone,$pm){
    //     try {
    //         if ($this->checkIfVallid($fname,$lname,$age,$gender,$email_phone,$pm)) {
    //             $database = new database();
    //             if ($database->getStatus()) {
    //                     $_SESSION['id'] = $this.getId();
    //                     $stmt = $database->getCon()->prepare($this->insertProfilQuery());
    //                     $stmt->execute(array($fname,$lname,$age,$gender,$email_phone,$pm,$this->getCurrentDate()));
    //                     $result = $stmt->fetch();
    //                     if(!$result){
    //                         $_SESSION['first_name'] = $fname;
    //                         $_SESSION['last_name'] = $lastname;
    //                         $_SESSION['age'] = $age;
    //                         $_SESSION['gender'] = $gender;
    //                         $_SESSION['email_phone'] = $email_phone;
    //                         $_SESSION['permanent_address'] = $pm;
    //                         $database->closeConnection();
    //                         return "200";
    //                     }else{
    //                         $database->closeConnection();
    //                         return "404";
    //                     }
    //             }else{
    //                 return "403";
    //             }
    //         } else {
    //             return "403";
    //         }
    //     } catch (PDOException $th) {
    //         return $th;
    //     }
    // }


    private function getId()
    {
        try {
            $database = new database();
            if ($database->getStatus()) {
                $stmt = $database->getCon()->prepare($this->signInQuery());
                $stmt->execute(array($_SESSION['username'],$_SESSION['email'],$_SESSION['password']));
                $tmp = null;
                while ($row = $stmt->fetch()) {
                    $tmp = $row['user_id'];
                }
                $database->closeConnection();
                return $tmp;
            }
        } catch (PDOException $th) {
            echo $th;
        }        
    }

    private function getCurrentDate(){
        date_default_timezone_set('Asia/Manila');
        return date("g:i:a - Y/m/d");
    }

    private function checkIfVallid($username, $email, $password){
        if ($username != "" && $email != "" && $password != "")
            return true;
        else
            return false;
    }

    private function signInQuery(){
        return "SELECT * FROM users WHERE (`username` = ? OR `email` = ?) AND `password` = ?";
    }

    private function roleQuery(){
        return "SELECT role FROM users WHERE username = ?";
    }

    private function classificationQery(){
        return "SELECT classification FROM users WHERE username = ?";
    }


    private function signUpQuery(){
        return "INSERT INTO users (`username`,`email`,`password`, created) VALUES (?,?,?,?)";
    }

    private function exist(){
        return "SELECT * FROM users WHERE `username` = ?";
    }
    private function exist2(){
        return "SELECT * FROM users WHERE `email` = ?";
    }

    private function insertProfilQuery(){
        return "INSERT INTO profile (`first_name`, `last_name`, `age`, `gender`, `email_phone`, `permanent_address`, updated) VALUES (?,?,?,?,?,?,?)";
    }

    private function updateProfilQuery(){
        return "UPDATE profile SET first_name = ?, last_name=?, age=?, gender=?, email_phone=?, permanent_address=? WHERE id=?";
    }

    private function addProductQuery(){
        return "INSERT INTO product (`prod_img`,`prod_name`,`prod_price`,`prod_kilo`, `added`) VALUES (?,?,?,?,?)";
    }

    private function getProductQuery(){
        return "SELECT * FROM product";
    }

}
?>
