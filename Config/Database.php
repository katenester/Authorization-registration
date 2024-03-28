<?php

// Используем для подключения к базе данных MySQL
class Database
{
    // Учётные данные базы данных
    private $host = "localhost";
    private $db_name = "users";
    private $username = "root";
    private $password = "Katy314";
    public $conn;

    // Получаем соединение с базой данных
    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Ошибка соединения с БД: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>