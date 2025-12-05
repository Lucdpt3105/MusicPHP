<?php

session_start();

// Modern PHP constants (removed deprecated third parameter)
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "Luc3105dev#");
define("DB_NAME", "music_player");

// PDO connection with error handling
function getConnection() {
    try {
        $dsn = "mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        return new PDO($dsn, DB_USER, DB_PASSWORD, $options);
    } catch (PDOException $e) {
        die("Connection error: " . $e->getMessage());
    }
}

// Legacy mysqli connection for backward compatibility
$cid = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die("connection error");

// Insert/Update/Delete function (modernized)
function iud($query) {
    $cid = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die("connection error");
    $result = mysqli_query($cid, $query);
    $n = mysqli_affected_rows($cid);
    mysqli_close($cid);
    return $n;
}

// Select function (using mysqli for backward compatibility)
function select($query) {
    $cid = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die("connection error");
    $result = mysqli_query($cid, $query);
    mysqli_close($cid);
    return $result;
}

// Modern PDO select function (use this for new code)
function select_pdo($query) {
    $pdo = getConnection();
    try {
        $stmt = $pdo->query($query);
        return $stmt;
    } catch (PDOException $e) {
        error_log("Query error: " . $e->getMessage());
        return false;
    }
}

?>