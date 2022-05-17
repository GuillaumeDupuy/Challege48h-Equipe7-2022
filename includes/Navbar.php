<?php 

if (isset($_SESSION['auth'])){
  $roleUser=$_SESSION['role'];
}
?>

<style>
  .navbar-collapse {
    background-color: white;
    border-radius: 25px;
  }
  .nav-link {
    padding: 5px;
    margin: 5px;
    color : black;
    background-color: white;
    border-style: solid;
    border-color: hsl(210, 100%, 80%);
    border-radius: 20px;
  }

  @media (max-width: 991.98px) {
    .navbar-collapse {
    background-color: transparent;
    border-radius: 25px;
  }

  }

</style>

<nav class="navbar navbar-expand-lg bg-light text-center" style="background-image: url(../assets/images/header-bg.jpg)">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link btn-primary" aria-current="page" href="../views/index.php" style="color:white">Home</a>
        </li>
        <?php if (isset( $roleUser) AND ($roleUser=="organisateur" or $roleUser=="admin")){ ?>
        <li class="nav-item">
          <a class="nav-link btn-success" href="../views/createEvent.php" style="color:white">Créer un évenement</a>
        </li>
        <?php } ?>
        <?php if (isset( $roleUser) AND $roleUser=="admin"){ ?>
        <li class="nav-item">
          <a class="nav-link btn-warning" href="../views/backOffice.php" style="color:white">BackOffice</a>
        </li>
        <?php } ?>
        <?php if (isset($roleUser)){ ?>
        <li class="nav-item">
          <a class="nav-link btn-danger" href="../Actions/users/logOutAction.php" >Deconnexion</a>
        </li>
        <?php }else{ ?>
        <li class="nav-item">
          <a class="nav-link" href="../views/register.php" >Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../views/login.php" >Connexion</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>