<!DOCTYPE html>
<html lang="en">
<head>
	<title>Homepage | Duraface Solutions</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?= BASEURL . '/assets/css/style.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?= BASEURL . '/assets/css/viewstyle.css' ?>">
  <style>
.hero {
  background: url('<?= BASEURL . '/assets/images/dashboard.jpg'?>') no-repeat center center/cover;
    color: #fff;
    height: 60vh;
    display: flex;
    
    justify-content: center;
    text-align: center;
    padding: 20px;
}
  </style>
</head>
<body>
<?php $this->view('Header');?>

<!-- Hero Section -->
<section class="hero">
        <div class="container" >
            <h1>Duraface Solutions</h1>
            <p>"Let's Building the Future with Quality Products."</p>
            
	
                <a class="btn btn-warning" href="<?= BASEURL . '/HomeCtr/ProductPage' ?>">Learn More</a>
           
        </div>
    </section>

    
    <section id="product-range">
    <div class="container-product">
        <h1>Our Product Range</h1>
        <div class="product-item">
            <img src="<?= BASEURL . '/assets/images/tile-adhesives.jpg'?>" alt="Tile Adhesives">
            <h3>Tile Adhesives</h3>
            <p>A comprehensive range of polymer-modified cementitious adhesives designed for various tile and stone applications, ensuring a strong and lasting bond.</p>
        </div>
        <div class="product-item">
            <img src="<?= BASEURL . '/assets/images/wall-putty.jpg'?>" alt="Wall Putty">
            <h3>Wall Putty</h3>
            <p>A high-quality putty that creates a smooth and even base for painting, guaranteeing a flawless finish on your walls.</p>
        </div>
        <div class="product-item">
            <img src="<?= BASEURL . '/assets/images/block-joining-mortar.jpg'?>" alt="Block Joining Mortar">
            <h3>Block Joining Mortar</h3>
            <p>A ready-to-use, non-shrink mortar that provides superior strength and durability for masonry construction.</p>
        </div>
    </div>
</section>
    <!-- Benefits Section -->
    <section class="product-range">
        <div class="container-n">
            <h2>Why Choose Duraface?</h2>
            <div class="benefit">
                <img src="<?= BASEURL . '/assets/images/Easy-apply.jpeg'?>" alt="Easy Application">
                <div>
                    <h3>Easy Application</h3>
                    <p>Our products are designed for hassle-free application.</p>
                </div>
            </div>
            <div class="benefit">
                <img src="<?= BASEURL . '/assets/images/strong-bonding.jpeg'?>" alt="Strong Bonding">
                <div>
                    <h3>Strong Bonding</h3>
                    <p>Provides exceptional bonding strength for durability.</p>
                </div>
            </div>
            <div class="benefit">
                <img src="<?= BASEURL . '/assets/images/www.jpeg'?>" alt="Durability">
                <div>
                    <h3>Durability</h3>
                    <p>Our products ensure long-lasting protection.</p>
                </div>
            </div>
            <div class="benefit">
                <img src="<?= BASEURL . '/assets/images/versatile.jpeg'?>" alt="Versatility">
                <div>
                    <h3>Versatility</h3>
                    <p>Suitable for various applications in construction.</p>
                </div>
            </div>
            <div class="benefit">
                <img src="<?= BASEURL . '/assets/images/quality-assurance.jpeg'?>" alt="Quality Assurance">
                <div>
                    <h3>Quality Assurance</h3>
                    <p>Guaranteed quality with each product.</p>
                </div>
            </div>
        </div>
    </section>



    <section id="testimonials">
        <div class="container clearfix">
            <h1>What Our Customers Say</h1>
            <div class="testimonial-item">
                <p>"Duraface adhesives made my tile installation a breeze! The strong bond and easy application saved me so much time and effort." - John D.</p>
            </div>
            <div class="testimonial-item">
                <p>"I was impressed by the durability of Duraface's products. My exterior tiles have withstood harsh weather conditions without any issues." - Rao M.</p>
            </div>
        </div>
    </section>

    <!-- Call to Action & Contact Section -->
  
    <section id="contact">
        <div class="container">
            <h1>Contact Us Today</h1>
            <p>Have a question or need assistance with your project? Our team is here to help!</p>
            <form action="contact" method="post">
                <input type="text" name="name" placeholder="Your Name"  required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
   
            <p>Reach out to us for expert advice, product recommendations, or to place an order. We're committed to providing you with the best possible service.</p>
        </div>
        </section>

        
    <?php $this->view('Footer')?>
</body>
</html>
