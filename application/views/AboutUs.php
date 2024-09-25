<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us | Duraface Solutions</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL . '/assets/css/style.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL . '/assets/css/viewstyle.css' ?>">

</head>
<body>
<?php $this->view('Header');?>
    <section id="about">
        <div class="container">
            <h1>About Duraface Solutions</h1>
            <p>Duraface Solutions is a leading provider of high-quality tile and stone fixing solutions. We are committed to delivering products that ensure safe, durable, and aesthetically pleasing installations. Our team of experts has years of experience in the industry, and we are dedicated to providing exceptional customer service. We are proud to be an ISO-certified company, ensuring that our products meet the highest international quality standards.</p>
            <p>At Duraface Solutions, we understand that the success of any tile or stone installation lies in the quality of the adhesive used. That's why we've developed a range of innovative products that cater to various applications, from interior walls and floors to exterior facades and swimming pools. Our adhesives are formulated to provide superior bonding strength, ensuring that your tiles and stones stay in place for years to come.</p>
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

	<div class="cta">
                <a href="<?= BASEURL . '/HomeCtr/ProductPage' ?>">View All Products</a>
            </div>
	<section>

	</section>

    <section id="why-choose-duraface">
    <div class="container">
        <h1>Why Choose Duraface?</h1>
        <div class="benefits">
            <div class="benefit-item">
                
                <h3>Easy Application</h3>
                <p>Our products are formulated for hassle-free and efficient installation, saving you time and effort.</p>
            </div>
            <div class="benefit-item">
              
                <h3>Strong Bonding</h3>
                <p>Duraface adhesives provide exceptional bonding strength, ensuring that your tiles and stones remain securely in place, even in challenging environments.</p>
            </div>
            <div class="benefit-item">
               
                <h3>Durability</h3>
                <p>Our products are engineered to withstand heavy use, extreme weather conditions, and the test of time, providing long-lasting performance.</p>
            </div>
          
            <div class="benefit-item">
              
                <h3>Quality Assurance</h3>
                <p>All our products are ISO-certified, guaranteeing consistent quality, reliability, and adherence to international standards.</p>
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
                <p>"I was impressed by the durability of Duraface's products. My exterior tiles have withstood harsh weather conditions without any issues." - Sarah M.</p>
            </div>
        </div>
    </section>

    <?php $this->view('Footer');?>

</body>
</html>

