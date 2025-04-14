<?php
class dbConfig {
    protected $serverName;
    protected $userName;
    protected $password;
    protected $dbName;
    function dbConfig() {
        $this->serverName = 'localhost';
        $this->userName = 'root';
        $this->password = ''; // Add this line to initialize the password
        $this->dbName = 'school_db';
    }
}
?>