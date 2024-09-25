<?php

class AdminMdl extends Database
{


    function slug($string)
    {
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
        return $slug;
    }

public function productDelete($proID){
    $sql = "DELETE FROM products WHERE id = ?";
    $params = [$proID]; // Bind the ID to the placeholder
    
    $result = $this->query($sql, $params);
    if($result){
        return true;
    }else{
        return false;
    }
}

public function Updateproduct($prodata)
{
    // Generate the slug from the product title
    $slug = $this->slug($prodata['product_title']);
    
    // Define the query string for updating a specific product by its ID
    $sql = "UPDATE products SET product_title = ?, product_slug = ?, product_stock = ?, product_selling_price = ?, product_image = ?, meta_description = ?, status = ? WHERE id = ?";

    // Define the parameters to be bound to the placeholders, including the product ID at the end
    $params = [
        $prodata['product_title'],
        $slug,
        $prodata['product_stock'],
        $prodata['product_selling_price'],
        $prodata['product_image'],
        $prodata['meta_description'],
        $prodata['status'],
        $prodata['id'] // Assuming the product ID is in the array as 'id'
    ];

    // Call the query method to execute the SQL with the parameters
    $result = $this->query($sql, $params);
    
    // Check if the update was successful
    if ($result) {
        return true;
    } else {
        return false;
    }
}



    public function productInput($prodata)
    {
        $slug = $this->slug($prodata['product_title']);
        // Define the query string with placeholders
        $sql = "INSERT INTO products (product_title,product_slug, product_stock, product_selling_price,product_image,meta_description,status) VALUES (?, ?, ?, ?, ?,?, ?)";

        // Define the parameters to be bound to the placeholders
        $params = [$prodata['product_title'], $slug, $prodata['product_stock'], $prodata['product_selling_price'], $prodata['product_image'], $prodata['meta_description'], $prodata['status']];

        // Call the query method
        $result = $this->query($sql, $params);
        //print_r($result);die;
        // Check if the insert was successful
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getAllProducts()
    {
        // Prepare the SQL query
        $sql = "SELECT * FROM products";
        // Execute the query and store the result
        $result = $this->query($sql);
        // Check if the query was successful
        if ($result) {
            // Fetch all rows as an associative array
            $rows = $this->result->fetchAll(PDO::FETCH_ASSOC);
            if ($rows) {
                return $rows;// Return the fetched rows
            } else {
                // If the query failed, return false
                return false;
            }
        }

    }

}
