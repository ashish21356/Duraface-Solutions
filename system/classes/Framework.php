<?php // At the beginning of Framework.php or before its usage
define("Host", "localhost");

// Now the usage of 'Host' will not cause an error
$host = Host;
class Framework {

    // Method to load a view
    public function view($view, $data = []) {
        // Corrected function name: file_exist -> file_exists
        if (file_exists("../application/views/" . $view . ".php")) {
            // Extract data array to variables to use them in the view
            extract($data);
            require_once "../application/views/$view.php";
        } else {
            echo "Sorry, $view.php page is not found.";
        }
    }

    // Method to load a model    // Method to load a model
    public function model($model) {
        $filePath = "../application/models/" . $model . ".php";
        if (file_exists($filePath)) {
            require_once $filePath;
    
            if (class_exists($model)) {
               
                return new $model;
            } else {
                echo "Class $model not found in $filePath.";
            }
        } else {
            echo "Sorry, $model.php file not found.";
        }
    }
    
  

// Method to get sanitized input based on request method
public function input($input) {
    if ($_SERVER['REQUEST_METHOD'] === "POST" || $_SERVER['REQUEST_METHOD'] === "post") {
        if (isset($_POST[$input])) { // Ensure the key exists in $_POST
            return trim(strip_tags($_POST[$input]));
        }
    } else if ($_SERVER['REQUEST_METHOD'] === "GET" || $_SERVER['REQUEST_METHOD'] === "get") {
        if (isset($_GET[$input])) { // Ensure the key exists in $_GET
            return trim(strip_tags($_GET[$input]));
        }
    }
    return null; // In case the method is not POST or GET, or the input is not found
}


// Method to load a helper file
public function helper($helper) {
    if (file_exists("../system/helpers/" . $helper . ".php")) {
        require_once "../system/helpers/" . $helper . ".php"; // Corrected to use the $helper variable
    } else {
        echo "Sorry, $helper.php file not found.";
    }
}

// Method to set a session variable
public function setSession($sessionName, $sessionValue) {
    if (!empty($sessionName) && !empty($sessionValue)) {
        $_SESSION[$sessionName] = $sessionValue; // Corrected from $_session to $_SESSION
    }
}

// Method to get a session variable
public function getSession($sessionName) {
    if (!empty($sessionName)) {
        return $_SESSION[$sessionName] ?? null; // Corrected from $_session to $_SESSION and added null default
    }
    return null;
}

// Method to unset a session variable
public function unsetSession($sessionName) {
    if (!empty($sessionName)) {
        unset($_SESSION[$sessionName]); // Corrected from $_session to $_SESSION and corrected unset syntax
    }
}

// Method to destroy all sessions
public function destroySessions() {
    session_destroy();
}

// Method to set a flash message in session
public function setFlash($sessionName, $msg) {
    if (!empty($sessionName) && !empty($msg)) {
        $_SESSION[$sessionName] = $msg; // Corrected from $_session to $_SESSION
    }
}

// Method to get and display a flash message
public function getFlash($sessionName, $className) {
    if (!empty($sessionName) && !empty($className) && isset($_SESSION[$sessionName])) {
        $msg = $_SESSION[$sessionName]; // Corrected from $_session to $_SESSION

        echo "<div class='" . htmlspecialchars($className) . "'>" . htmlspecialchars($msg) . "</div>"; // Added htmlspecialchars for security
        unset($_SESSION[$sessionName]);
    }
}

// Method to redirect to another path
public function redirect($path) {
    header("Location: " . BASEURL . "/" . $path);
    exit(); // Added exit to ensure no further code is executed after redirection
}


}

