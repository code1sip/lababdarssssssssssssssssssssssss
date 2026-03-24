<?php
class Database {
    private static $instance = null;
    private $db;
    
    private function __construct() {
        $dbPath = __DIR__ . '/../data/lababdar.db';
        $dataDir = __DIR__ . '/../data';
        
        if (!file_exists($dataDir)) {
            mkdir($dataDir, 0755, true);
        }
        
        try {
            $this->db = new PDO('sqlite:' . $dbPath);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->createTables();
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function getConnection() {
        return $this->db;
    }
    
    private function createTables() {
        $this->db->exec("
            CREATE TABLE IF NOT EXISTS inquiries (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                email TEXT NOT NULL,
                phone TEXT,
                subject TEXT NOT NULL,
                message TEXT NOT NULL,
                status TEXT DEFAULT 'new',
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                read_at DATETIME
            )
        ");
        
        $this->db->exec("
            CREATE TABLE IF NOT EXISTS admin_users (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                username TEXT UNIQUE NOT NULL,
                password TEXT NOT NULL,
                must_change_password INTEGER DEFAULT 1,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )
        ");
        
        $this->db->exec("
            CREATE TABLE IF NOT EXISTS login_attempts (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                ip_address TEXT NOT NULL,
                attempt_time DATETIME DEFAULT CURRENT_TIMESTAMP
            )
        ");
    }
    
    public function setupAdmin($username, $password) {
        $stmt = $this->db->query("SELECT COUNT(*) FROM admin_users");
        if ($stmt->fetchColumn() == 0) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $insertStmt = $this->db->prepare("INSERT INTO admin_users (username, password, must_change_password) VALUES (?, ?, 1)");
            return $insertStmt->execute([$username, $hashedPassword]);
        }
        return false;
    }
    
    public function checkLoginAttempts($ip) {
        $fiveMinutesAgo = date('Y-m-d H:i:s', strtotime('-5 minutes'));
        $stmt = $this->db->prepare("SELECT COUNT(*) FROM login_attempts WHERE ip_address = ? AND attempt_time > ?");
        $stmt->execute([$ip, $fiveMinutesAgo]);
        return $stmt->fetchColumn();
    }
    
    public function recordLoginAttempt($ip) {
        $stmt = $this->db->prepare("INSERT INTO login_attempts (ip_address) VALUES (?)");
        $stmt->execute([$ip]);
    }
    
    public function clearOldAttempts() {
        $oneHourAgo = date('Y-m-d H:i:s', strtotime('-1 hour'));
        $this->db->exec("DELETE FROM login_attempts WHERE attempt_time < '$oneHourAgo'");
    }
}
?>
