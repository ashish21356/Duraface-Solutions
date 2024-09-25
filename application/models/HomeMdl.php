<?php

class HomeMdl extends Database{

    public function contactInput($data) {

// Define the query string with placeholders
$sql = "INSERT INTO contacttbl (name, email, message) VALUES (?, ?, ?)";

// Define the parameters to be bound to the placeholders
$params = [$data['name'], $data['email'], $data['message']];

// Call the query method
$result=$this->query($sql, $params); 
        // Check if the insert was successful
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    

    public function getAProduct($slug)
    { 
        // Prepare the SQL query
        $sql = "SELECT * FROM products WHERE product_slug = ?";
        $params = [$slug]; // Bind the ID to the placeholder
        
        $result = $this->query($sql, $params);
        // Check if the query was successful
        if ($result) {
            // Fetch all rows as an associative array
            $rows = $this->result->fetchAll(PDO::FETCH_ASSOC);
            if ($rows) {
               // print_r($rows);die;
                return $rows;// Return the fetched rows
            } else {
                // If the query failed, return false
                return false;
            }
        }

    }

    public function Productforupdate($id)
    { 
        // Prepare the SQL query
        $sql = "SELECT * FROM products WHERE id = ?";
        $params = [$id]; // Bind the ID to the placeholder
        
        $result = $this->query($sql, $params);
        // Check if the query was successful
        if ($result) {
            // Fetch all rows as an associative array
            $rows = $this->result->fetchAll(PDO::FETCH_ASSOC);
            if ($rows) {
               // print_r($rows);die;
                return $rows;// Return the fetched rows
            } else {
                // If the query failed, return false
                return false;
            }
        }

    }

    public function generateCsv($data, $filename = "products.csv") {
        // Open a file in write mode
        $file = fopen($filename, 'w');

        // Get the keys of the first item to use as the CSV headers
        $headers = array_keys($data[0]);
        fputcsv($file, $headers);

        // Write the data rows
        foreach ($data as $row) {
            fputcsv($file, $row);
        }

        // Close the file
        fclose($file);

        // Return the filename for further processing
        return $filename;
    }
}