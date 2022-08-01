<nav class="navbar navbar-expand-lg bg-light">
  <div class="container d-lg-flex justify-content-between">

    <a class="navbar-brand" href="#">Sayang Mamah Services</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <?php if(!isset($_SESSION['user_id'])) { ?>
          <li class="nav-item">
            <a class="nav-link btn btn-info text-center w-full mb-2 nav-mobile" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-info text-center w-full nav-mobile" href="/register">Register</a>
          </li>
          <?php }else { ?>
            <?php if($_SESSION['roles'] == 'company' || $_SESSION['roles'] == 'superadmin') { ?>
              <li class="nav-item">
                <a class="nav-link btn btn-info text-center w-full nav-mobile mb-2 py-2" href="/dashboard">Dashboard</a>
                <a class="nav-link btn btn-info text-center w-full nav-mobile py-2" href="/logout">Logout</a>
              </li>
            <?php } else {  ?>
              <li class="nav-item">
                <a class="nav-link btn btn-info text-center w-full nav-mobile mb-2 py-2" href="/data-checkout">Checkout</a>
                <a class="nav-link btn btn-info text-center w-full nav-mobile mb-2 py-2" href="/pengaturan">Pengaturan</a>
                <a class="nav-link btn btn-info text-center w-full nav-mobile py-2" href="/logout">Logout</a>
              </li>
            <?php } ?>
        <?php } ?>
      </ul>
    </div>

    <div class="position-relative nav-users">
      <button class="nav-link nav-user position-relative">
        <i class='bx bxs-user nav-buying' ></i>
      </button>
  
      <div class="card position-absolute nav-login">
        <div class="card-body">
          <?php if(!isset($_SESSION['user_id'])) { ?>
            <a href="/login" class="btn btn-info w-100 mb-3">Login</a>
            <a href="/register" class="btn btn-info w-100">Register</a>
          <?php } else { ?>
            <h1 class="user-name-title mb-3 mt-2 rounded py-3 px-2 text-center border">Hello, <?= $_SESSION['name'] ?></h1>
            <?php if($_SESSION['roles'] == 'company' || $_SESSION['roles'] == 'superadmin') { ?>
                <a class="nav-link btn btn-info text-center w-full mb-2 py-2" href="/dashboard">Dashboard</a>
                <a class="nav-link btn btn-info text-center w-full py-2" href="/logout">Logout</a>
                <?php } else { ?>
                  <a class="nav-link btn btn-info text-center w-full mb-2 py-2" href="/data-checkout">Checkout</a>
                  <a class="nav-link btn btn-info text-center w-full mb-2 py-2" href="/pengaturan">Pengaturan</a>
                  <a class="nav-link btn btn-info text-center w-full py-2" href="/logout">Logout</a>
            <?php } ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</nav>

<script>
  let button = document.querySelector('.nav-user');
  let cardLogin = document.querySelector('.nav-login');

  button.addEventListener('click', () => {
    cardLogin.classList.toggle('reveal');
  });
</script>