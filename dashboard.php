<?php 
require 'connection.php';
session_start();
if (isset($_SESSION['user_id'])) {
    echo $_SESSION['user_id'];
    $id = $_SESSION['user_id'];

    $query = "SELECT * FROM staffs WHERE staff_id = $id";

    $queryCon = $dbconnection->query($query);
    // print_r ($queryCon);

    $userName = $queryCon->fetch_assoc();
    // print_r($userName);
    $image = $userName['staff_dp'];
    echo $image;



};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>DashBoard</title>
</head>
<body>


<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white shadow-lg">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
          <i class=" me-3 bg-warning"></i><span>Catalog</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-lock fa-fw me-3"></i><span>Password</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-globe fa-fw me-3"></i><span>International</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-building fa-fw me-3"></i><span>Partners</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-users fa-fw me-3"></i><span>Users</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a>
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-dark  fixed-top p-3">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand text-white fw-bold" href="#">
      Hello, welcome <strong class="fst-italic"><?php echo $userName['first_name']?></strong>
        <img src="./images/<?php echo $userName['staff_dp'];?>" height="25" alt="MDB Logo"
          loading="lazy" />
      </a>
      <!-- Search form -->
      <form class="d-none d-md-flex input-group w-auto my-auto">
        <input autocomplete="off" type="search" class="form-control rounded"
          placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px;" />
        <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
      </form>

      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row">
        <!-- Notification dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-bell"></i>
            <span class="badge rounded-pill badge-notification bg-danger">1</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="#">Some news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Another news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </li>

        <!-- Icon -->
        <li class="nav-item">
          <a class="nav-link me-3 me-lg-0" href="#">
            <i class="fas fa-fill-drip"></i>
          </a>
        </li>
        <!-- Icon -->
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#">
            <i class="fab fa-github"></i>
          </a>
        </li>

        <!-- Icon dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown"
            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            <i class="united kingdom flag m-0"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English
                <i class="fa fa-check text-success ms-2"></i></a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
            </li>
          </ul>
        </li>

        <!-- Avatar -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            <img src="./images/<?php echo $userName['staff_dp'];?>"  class="rounded-circle"
              height="22" alt="Avatar" loading="lazy" />
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="#">My profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4"></div>
</main>
<!--Main layout-->


    

   
    <div  class=" pictureUpdate border row p-4 user-list " >


    <div class="user-list col-md-12">
        Hello, welcome to the dashboard <strong><?php echo $userName['first_name']?></strong><br>
        <p class="fw-bold">Add or Change Image Here</p>
    
        <!-- <img src="./images/<?php echo $userName['staff_dp'];?>" alt="" > -->
        <form  action="fileupload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="profile_pic" class="form-control my-2 ">
            <button type="submit"  name="submit" class="btn btn-outline-warning fw-bold ">submit</button>
        </form>

    </div>
    
    </div>

    <nav class="pictureUpdate  user-list w-75 mt-5 ">

    <div class="row d-flex justify-content-around align-items-center flex-wrap ">
  
  <div class="card col-md-3 ">
        <img   id="imageTwo" src="https://ng.jumia.is/cms/0-0-black-friday/2023/generic/ezgif.com-optimize.gif" class="card-img-top mx-auto" alt="..." />
        <div class="card-body">
          <p class="card-text text-center">
            Some quick example text to build on the card title and make up
            the bulk of the card's content.
          </p>
        </div>
      </div>

      <div class="card col-md-3 ">
        <img   id="imageTwo" src="https://ng.jumia.is/cms/0-0-black-friday/2023/Initiative/Treasure-hunt/thumbnails.gif" class="card-img-top mx-auto" alt="..." />
        <div class="card-body">
          <p class="card-text text-center">
            Some quick example text to build on the card title and make up
            the bulk of the card's content.
          </p>
        </div>
      </div>
      <div class="card col-md-3 ">
        <img   id="imageTwo" src="https://ng.jumia.is/cms/0-0-black-friday/2023/generic/BF-Countdown-live-now.gif" class="card-img-top mx-auto" alt="..." />
        <div class="card-body">
          <p class="card-text text-center">
            Some quick example text to build on the card title and make up
            the bulk of the card's content.
          </p>
        </div>
      </div>

  </div>


      <div class="row d-flex justify-content-around align-items-center flex-wrap mt-3">
      <div class="card col-md-3 ">
            <img   id="imageTwo" src="https://i.pinimg.com/564x/25/80/ed/2580ed352090d47b1a01b644423b48fd.jpg" class="card-img-top mx-auto" alt="..." />
            <div class="card-body">
              <p class="card-text text-center">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>

          <div class="card col-md-3 ">
            <img   id="imageTwo" src="https://i.pinimg.com/564x/dd/23/a8/dd23a879fcaf7cd4e9cf6d739a23b5a7.jpg" class="card-img-top mx-auto" alt="..." />
            <div class="card-body">
              <p class="card-text text-center">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
          <div class="card col-md-3 ">
            <img   id="imageTwo" src="https://i.pinimg.com/564x/c4/c6/7b/c4c67b510b0d1b28da4d5d295fb128c0.jpg" class="card-img-top mx-auto" alt="..." />
            <div class="card-body">
              <p class="card-text text-center">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>

      </div>
    
      </nav>
</body>
</html>