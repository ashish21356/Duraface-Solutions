<?php

class AdminCtr extends Framework
{
    public function __construct()
    {   $this->HomeMdl = $this->model('HomeMdl');
        $this->AdminMdl = $this->model('AdminMdl');
    }
    public function index()
    {
        $products= $this->AdminMdl->getAllProducts();
        $this->view('Admin/AdminDashboard', ['products' => $products]);
    }

    public function deleteProduct($ProductID) {
        // Attempt to delete the product
        $deleteSuccess = $this->AdminMdl->productDelete($ProductID);
    
        // Fetch the updated list of products
        $products = $this->AdminMdl->getAllProducts();
    
        // Initialize message variables
        $errors = '';
        $success_message = '';
    
        // Check if the delete was successful
        if ($deleteSuccess) {
            $success_message = 'Product has been successfully deleted.';
        } else {
            $errors = 'Failed to delete the product.';
        }
    
        // Render the AdminDashboard view with messages and products data
        $this->view('Admin/AdminDashboard', [
            'errors' => $errors,
            'success_message' => $success_message,
            'products' => $products,
        ]);
    }
    
    public function Createproduct()
    { {
            $errors = [];
            $success_message = '';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Function to sanitize input
                function sanitize_input($data)
                {
                    return htmlspecialchars(strip_tags(trim($data)));
                }
                // Validate and handle file upload
                 $upload_dir = '../system/classes/assets/images/'; 

                // Initialize variable for the uploaded image
                $product_image = '';
                $errors = [];

                if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] == 0) {
                    $allowed_types = ['image/jpeg', 'image/png', 'image/jpg'];
                    $file_type = $_FILES['product_image']['type'];

                    if (in_array($file_type, $allowed_types)) {
                        $file_name = basename($_FILES['product_image']['name']);
                        // Sanitize the file name
        // Replace spaces with underscores in the filename
        $file_name = str_replace(' ', '_', $file_name);
        
        // Sanitize the file name
        $file_name = preg_replace('/[^a-zA-Z0-9_-]/', '_', $file_name);
                        $upload_file = $upload_dir . $file_name;

                        // Debug: Check the final file path
                        echo 'Upload File Path: ' . $upload_file . '<br>';

                        // Move uploaded file
                        if (move_uploaded_file($_FILES['product_image']['tmp_name'], $upload_file)) {
                            $product_image = $file_name;
                        } else {
                            $errors[] = 'Failed to upload image.';
                        }
                    } else {
                        $errors[] = 'Only image files are allowed.';
                    }
                } else {
                    $errors[] = 'Product image is required.';
                }

                // Validate meta description
                $meta_description = isset($_POST['meta_description']) ? sanitize_input($_POST['meta_description']) : '';
                if (empty($meta_description)) {
                    $errors[] = 'Meta description is required.';
                }

                // Validate status
                $status = isset($_POST['status']) ? sanitize_input($_POST['status']) : '';
                if ($status !== '0' && $status !== '1') {
                    $errors[] = 'Invalid status selected.';
                }


                // Validate product title
                $product_title = isset($_POST['product_title']) ? sanitize_input($_POST['product_title']) : '';
                if (empty($product_title)) {
                    $errors[] = 'Product title is required.';
                }

                // Validate product stock
                $product_stock = isset($_POST['product_stock']) ? sanitize_input($_POST['product_stock']) : '';
                if (!is_numeric($product_stock) || $product_stock <= 0) {
                    $errors[] = 'Product stock must be a positive number.';
                }

                // Validate product selling price
                $product_selling_price = isset($_POST['product_selling_price']) ? sanitize_input($_POST['product_selling_price']) : '';
                if (!is_numeric($product_selling_price) || $product_selling_price <= 0) {
                    $errors[] = 'Product selling price must be a positive number.';
                }

                // Check for errors and handle the result
                if (empty($errors)) {
                    // Collect valid data
                    $pro_data = [
                        'product_title' => $product_title,
                        'product_stock' => $product_stock,
                        'product_selling_price' => $product_selling_price,
                        'product_image' => $product_image,
                        'meta_description' => $meta_description,
                        'status' => $status
                    ];
                    $this->AdminMdl->productInput($pro_data);
                    $success_message = 'Form submitted successfully.';
                }

                // Load the view and pass data
                $this->View('Admin/Product', [
                    'errors' => $errors,
                    'success_message' => $success_message,
                ]);
            } else {
                $this->View('Admin/Product', []);
            }
        }
    }
    public function Updateproduct()
    { {
            $errors = [];
            $success_message = '';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Function to sanitize input
                function sanitize_input($data)
                {
                    return htmlspecialchars(strip_tags(trim($data)));
                }
                // Validate and handle file upload
                 $upload_dir = '../system/classes/assets/images/'; 

                // Initialize variable for the uploaded image
                $product_image = '';
                $errors = [];

                if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] == 0) {
                    $allowed_types = ['image/jpeg', 'image/png', 'image/jpg'];
                    $file_type = $_FILES['product_image']['type'];

                    if (in_array($file_type, $allowed_types)) {
                        $file_name = basename($_FILES['product_image']['name']);

                                       // Sanitize the file name
        // Replace spaces with underscores in the filename
        $file_name = str_replace(' ', '_', $file_name);
        
        // Sanitize the file name
        $file_name = preg_replace('/[^a-zA-Z0-9_-]/', '_', $file_name);
                        $upload_file = $upload_dir . $file_name;

                        // Debug: Check the final file path
                        //echo 'Upload File Path: ' . $upload_file . '<br>';

                        // Move uploaded file
                        if (move_uploaded_file($_FILES['product_image']['tmp_name'], $upload_file)) {
                            $product_image = $file_name;
                        } else {
                            $errors[] = 'Failed to upload image.';
                        }
                    } else {
                        $errors[] = 'Only image files are allowed.';
                    }
                } else {
                    $errors[] = 'Product image is required.';
                }

                // Validate meta description
                $meta_description = isset($_POST['meta_description']) ? sanitize_input($_POST['meta_description']) : '';
                if (empty($meta_description)) {
                    $errors[] = 'Meta description is required.';
                }

                // Validate status
                $status = isset($_POST['status']) ? sanitize_input($_POST['status']) : '';
                if ($status !== '0' && $status !== '1') {
                    $errors[] = 'Invalid status selected.';
                }
                 // Validate status
                 $id = isset($_POST['product_id']) ? sanitize_input($_POST['product_id']) : '';
                 if (empty($id)) {
                     $errors[] = 'Invalid Id.';
                 }


                // Validate product title
                $product_title = isset($_POST['product_title']) ? sanitize_input($_POST['product_title']) : '';
                if (empty($product_title)) {
                    $errors[] = 'Product title is required.';
                }

                // Validate product stock
                $product_stock = isset($_POST['product_stock']) ? sanitize_input($_POST['product_stock']) : '';
                if (!is_numeric($product_stock) || $product_stock <= 0) {
                    $errors[] = 'Product stock must be a positive number.';
                }

                // Validate product selling price
                $product_selling_price = isset($_POST['product_selling_price']) ? sanitize_input($_POST['product_selling_price']) : '';
                if (!is_numeric($product_selling_price) || $product_selling_price <= 0) {
                    $errors[] = 'Product selling price must be a positive number.';
                }

                // Check for errors and handle the result
                if (empty($errors)) {
                    // Collect valid data
                    $pro_data = [
                        'id' =>$id,
                        'product_title' => $product_title,
                        'product_stock' => $product_stock,
                        'product_selling_price' => $product_selling_price,
                        'product_image' => $product_image,
                        'meta_description' => $meta_description,
                        'status' => $status
                    ];
                    $this->AdminMdl->Updateproduct($pro_data);
                    $success_message = 'Form Upadted successfully.';
                }

                // Load the view and pass data
                $this->View('Admin/Updateproduct', [
                    'errors' => $errors,
                    'success_message' => $success_message,
                ]);
            } else {
                //echo "yroroorr";die;
                //Productforupdate
                
                $data = $this->HomeMdl->Productforupdate();
                //print_r($data);die;
                $this->View('Admin/Updateproduct');
            }
        }
    }

    public function Updateproductview($id){
         
        $data = $this->HomeMdl->Productforupdate($id);
        //print_r($data);die;
        $this->View('Admin/Updateproduct',$data);
    }
}


