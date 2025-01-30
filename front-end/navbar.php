<nav class="navbar navbar-expand-lg py-3 mb-3" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="./home.php">
      <img src="https://i.ibb.co.com/9Kcm93Q/event-Logo.jpg" alt="log" id="logo"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        <?php
        if (isset($_SESSION['email'])) {
          ?>
          <li class="nav-item">
            <a class="nav-link fw-bolder btn btn-danger " href="../back-end/logout.php">Log Out</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold " href="../front-end/dashboard.php">Dashboard</a>
          </li>
        <?php
        } else {
          ?>
          <li class="nav-item"><a class="nav-link" href="./register_page.php">Register</a></li>
          <li class="nav-item"><a class="nav-link" href="./login_page.php">Login</a></li>
          <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>