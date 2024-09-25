<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us | Duraface Solutions</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL . '/assets/css/style.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL . '/assets/css/viewstyle.css' ?>">
   
</head>
<body>
    <?php $this->view('Header')?>
    <section id="contact">
        <div class="container">
            <h1>Contact Us Today</h1>
            <p>Have a question or need assistance with your project? Our team is here to help!</p>
            <form action="contact" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
            <p>Reach out to us for expert advice, product recommendations, or to place an order. We're committed to providing you with the best possible service.</p>
        </div>
    </section>
    
            <!-- Contact Details Section -->
            <?php $this->view('Footer')?>
</body>
</html>
