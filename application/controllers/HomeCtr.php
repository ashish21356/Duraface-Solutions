<?php

class HomeCtr extends Framework
{

    //parent::__construct();
    public function __construct()
    {
        $this->AdminMdl = $this->model('AdminMdl');
        $this->HomeMdl = $this->model('HomeMdl');

    }
    public function downloadDatasheet($slug)
    {

        $data = $this->HomeMdl->getAProduct($slug);
        // Generate the CSV file
        $filename = $this->HomeMdl->generateCsv($data);
        // Set headers to trigger a download
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        // Output the file
        readfile($filename);
        // Optionally, delete the file after download
        unlink($filename);
    }


    public function callByProductSlug($slug)
    {
        $product['product'] = $this->HomeMdl->getAProduct($slug);
        // If the product is found, pass the data to the view
        if ($product) {
            $this->view('Productview', $product);
        } else {
            // Handle the case where the product is not found
            echo "Product not found.";
        }
    }
    public function ProductPage()
    {
        $products = $this->AdminMdl->getAllProducts();
        $this->view('ProductPage', ['products' => $products]);
    }
    public function index()
    {
        $this->view('Homepage');
    }

    public function AboutUsPage()
    {
        $this->view('AboutUs');
    }
    public function ContactUsPage()
    {
        $this->view('ContactUs');
    }
    public function contact()
    {
        $formData = [
            'name' => $this->input('name'),
            'email' => $this->input('email'),
            'message' => $this->input('message')
        ];
        $this->HomeMdl->contactInput($formData);
        // Check if the insertion was successful
        $this->view('AboutUs');
    }
    // Method to handle the homepage
    public function homepage()
    {
        echo "Hello from my home page controller";
    }
}

