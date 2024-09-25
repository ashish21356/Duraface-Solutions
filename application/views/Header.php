<nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASEURL . '/HomeCtr' ?>">Homepage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL . '/HomeCtr/ProductPage' ?>">Product Page</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?= BASEURL . '/HomeCtr/AboutUsPage' ?>">About Us</a>


        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL . '/HomeCtr/ContactUsPage' ?>">Contact Us</a>
        </li> 
      </ul>
      <ul class="navbar-nav ms-auto"> <!-- ms-auto pushes this ul to the right -->
        <li class="nav-item">
          <a class="btn btn-outline-info" href="<?= BASEURL . '/AdminCtr' ?>"><strong>Admin User</strong></a>
        </li>
      </ul>
    </div>
  </div>
</nav>