<?php
class LoginController {
    private $db;

    public function __construct() {
        // Código para conectar a la base de datos
        $host ='127.0.0.1';
        $dbname='cics';
        $user='root';
        $password='';
		$port = 3306;
		
        try {
            $this->db = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
        } catch (PDOException $e ) {
			//echo $e;
            return false;
        }
    }

    public function login($username, $password) {
		
        // Código para verificar las credenciales en la base de datos
        try {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
		
        $stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
			//echo $result['password'];
			//echo $result['username'];
            //if (password_verify($password, $result['password'])) {
              //  echo $result['password'];
				return $result;
            //}
            //echo 'No pasa password';
        }
        return false;
        } catch (\Throwable $th) {
           
		   return false;
        }

    }
}