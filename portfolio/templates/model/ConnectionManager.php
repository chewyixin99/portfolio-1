<?php

class ConnectionManager {

    public function getConnection() {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'phpcomments';

        #Create connection
        try {
            return new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password); 
        }catch (PDOException $exception) {
            // If there is an error with the connection, stop the script and display the error
            exit('Failed to connect to database!');
        }
    }
}
?>