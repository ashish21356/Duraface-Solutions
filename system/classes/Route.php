<?php

class Route {
    protected $controller = 'HomeCtr';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->url(); // Get the URL array

        // Check if the URL is for an asset (media file)
        if (!empty($url) && $this->isMediaFile($url)) {
            $this->serveAsset($url);
            return; // Stop further execution to avoid routing
        }

        // If the URL is empty, use the default controller and method
        if (empty($url)) {
            // Default to Home controller and index method
            $url[0] = $this->controller;
        }
  
        // Check if the controller exists
        if (file_exists("../application/controllers/" . $url[0] . ".php")) {
            $this->controller = $url[0];
            unset($url[0]);
        } else {
            echo "Sorry, the controller '" . ($url[0] ?? '') . "' was not found.";
            die();
        }

        // Include the controller file
        require_once("../application/controllers/" . $this->controller . ".php");

        // Instantiate the controller
        $this->controller = new $this->controller;

        // Check if the method exists in the controller
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        } else if (isset($url[1])) {
            echo "Sorry, the method '" . $url[1] . "' was not found.";
            die();
        }

        // Get parameters
        $this->params = $url ? array_values($url) : [];

        // Call the method with parameters
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    /**
     * Check if the URL points to a media file.
     *
     * @param array $url The URL array.
     * @return bool
     */
    private function isMediaFile($url) {
        $mediaDirectories = ['assets', 'images', 'css', 'js', 'fonts'];
        // Check if the first part of the URL matches any media directory
        return !empty($url) && in_array($url[0], $mediaDirectories);
    }

    /**
     * Serve the requested asset directly.
     *
     * @param array $url The URL array.
     */
    private function serveAsset($url) {
        $filePath = __DIR__ . '/' . implode('/', $url);
        //echo $filePath;
    
        if (file_exists($filePath)) {
            $mimeType = mime_content_type($filePath);
            
            header("Content-Type: $mimeType");
            readfile($filePath);
            exit;
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "Sorry, the asset '" . implode('/', $url) . "' was not found.";
            exit;
        }
    }
    
    /**
     * Parse the URL into an array.
     *
     * @return array The URL components.
     */
    public function url() {
        if (isset($_GET['url'])) {
            $url = $_GET['url']; // Access the 'url' query parameter
            $url = rtrim($url, '/'); // Remove trailing slashes
            $url = filter_var($url, FILTER_SANITIZE_URL); // Sanitize the URL
            $url = explode('/', $url); // Split the URL into an array

            return $url;
        }
        return []; // Return an empty array if no URL is set
    }
}
