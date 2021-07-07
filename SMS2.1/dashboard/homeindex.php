<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.80.0" />
  <title>Index</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/" />

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      font-family: "Raleway", sans-serif;
      background-color: rgb(10, 31, 68);
      /* font-weight: 500; */
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    /*  */


    #sidebarMenu ul {
      border-bottom: 1px solid rgb(192, 192, 192);
      height: 100%;
      width: 100%;
    }

    #sidebarMenu ul li {
      font-size: 17px;
      line-height: 40px;
      /* text-align: center; */
      list-style: none;
    }

    #sidebarMenu ul li a {
      position: relative;
      color: #ccc;
      text-decoration: none;
      padding-left: 10px;
      font-weight: 400;
      display: block;
      width: 100%;
      border-left: 3px solid transparent;
    }

    #sidebarMenu ul li a:hover {
      color: #3e7da1;
      background: #1e1e1e;
      border-left-color: #3e7da1;
    }

    #sidebarMenu ul ul {
      position: static;
      display: none;
    }

    #sidebarMenu ul .admission-show.show {
      display: block;
    }

    #sidebarMenu ul .fee-show.show1 {
      display: block;
    }

    #sidebarMenu ul .expense-show.show2 {
      display: block;
    }

    #sidebarMenu ul .salary-show.show3 {
      display: block;
    }

    #sidebarMenu ul .visitor-show.show4 {
      display: block;
    }

    #sidebarMenu ul ul li {
      line-height: 40px;
      border-bottom: none;
    }

    #sidebarMenu ul ul li a {
      font-size: 15px;
      color: #e6e6e6;
      padding-left: 10px;
    }

    #sidebarMenu ul ul li a i {
      position: absolute;
      top: 50%;
      right: 20px;
      transform: translateY(-50%);
      font-size: 22px;
      transition: transform 0.4s;
    }

    /* 
      #sidebarMenu ul li a:active i{ 
  transform: translateY(-10%) rotate(-180deg);
      }  */

    /*  */

    .user-menu {
      /* padding-left: 10px; */
      text-decoration: none;
      margin-left: 10px;
    }

    .user-menu:active {
      outline: none;
    }

    .user-menu :focus {
      border: none;
      outline: none;
    }

    .user-menu span {
      font-style: italic;
      color: white;
      font-size: 16px
    }

    .dropdown-menu {
      align-items: left;
      text-align: left;
      overflow: hidden;
    }

    .dropdown-menu .dropdown-item:hover {
      background-color: black;
    }

    .dropdown-menu .dropdown-item {
      color: white;
    }

    .dropdown-menu .week-drop {
      color: rgb(0, 0, 0);
    }

    .dropdown-menu .week-drop:hover {
      background-color: rgb(143, 143, 143);
    }

    .btn-check:focus+.btn,
    .btn:focus {
      outline: 0;
      box-shadow: none;
    }

    main {
      background: #f3f4f6;
      grid-area: main;
      overflow-y: auto;
    }

    .main__container {
      padding: 20px 55px;
    }

    .main__title {
      display: flex;
      align-items: center;
      padding-bottom: 20px;
    }

    .main__title>img {
      max-height: 100px;
      object-fit: contain;
      margin-right: 20px;
    }

    .main__greeting>h1 {
      font-size: 24px;
      color: #2e4a66;
      margin-bottom: 5px;
    }

    .main__greeting>p {
      font-size: 14px;
      font-weight: 550;
      color: #a5aaad;
    }

    .card2 {
      margin: 10px;
      margin-right: -5px;
      height: 250px;
      background: #ff2d54 !important;
    }

    .card3 {
      margin: 10px;
      margin-left: -5px;
      height: 180px;
      background: #5856d6 !important;
    }

    .card4 {
      margin: 10px;
      margin-right: -5px;
      height: 200px;
      background: #50e3c3 !important;
    }

    .card5 {
      margin: 10px;
      margin-left: -5px;
      height: 270px;
      background: #ff8c00 !important;
    }

    /* .head{
      text-align: center;
      font-family: 'Raleway', sans-serif;
      padding: 15px;
      } */
  </style>

  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet" />

</head>

<body>
  <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php"><img src="assets/rovasms.PNG" class="logo" />
    </a>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" />


    <div class="dropdown">
      <button type="button" class="btn btn-sm dropdown-toggle user-btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <a href="#" class="user-menu">
          <img width="40" src="assets/avatar.svg" class="user-menu" alt="" />
          <span>Username</span>
          <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
        </a>

      </button>
      <ul class="dropdown-menu bg-dark mr-2" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><a class="dropdown-item" href="#">Notification</a></li>
        <li>
          <a class="dropdown-item" href="#">Settings</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">Sign Out</a>
        </li>
      </ul>
      <!-- </div> -->
      <!-- </div> -->
    </div>



    <!-- <a href="#" class="user-menu">
        <img width="35" src="assets/avatar.svg" alt="" />
         <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->

    <!-- <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul> -->
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">
                <span data-feather="home"></span>
                Home
              </a>
            </li>
            <li>
              <a href="#" class="admission-btn">Admissions
                <i class="fa fa-caret-down first"></i>
              </a>
              <ul class="admission-show">
                <li><a href="new-admission.php">New Admission</a></li>
                <li><a href="student-record.php">Student Record</a></li>
              </ul>
            </li>
            <li>
              <a href="fee-record.php" class="fee-btn">Student Fee
                <!-- <i class="fa fa-caret-down second"></i> -->
              </a>
              <!-- <ul class="fee-show">
                  <li><a href="student-fee.php">Add Student Form</a></li>
                  <li>
                    <a href="student-fee-record.php">View Student Form</a>
                  </li>
                </ul> -->
            </li>
            <li>
              <a href="#" class="expense-btn">Staff
                <i class="fa fa-caret-down third"></i>
              </a>
              <ul class="expense-show">
                <li><a href="register-staff.php">Register Staff</a></li>
                <li>
                  <a href="staff-record.php">Staff Record</a>
                </li>
                <li>
                  <a href="salary.php">Salary</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#" class="salary-btn">Monthly Expenditure
                <i class="fa fa-caret-down fourth"></i>
              </a>
              <ul class="salary-show">
                <li><a href="expence.php">Expense</a></li>
                <li><a href="record.php">Record</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="visitor-btn">Visitor
                <i class="fa fa-caret-down fifth"></i>
              </a>
              <ul class="visitor-show">
                <li><a href="visitor-information.php">Visitor Information</a></li>
                <li><a href="visitor-record.php">Visitor Record</a></li>
              </ul>
            </li>
          </ul>

          <!-- <h6
              class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"
            >
              <span>Saved reports</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div> -->
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="main__container"></div>
        <div class="main__title">
          <img src="assets/hello.svg" alt="" />
          <div class="main__greeting">
            <h1>School Management System</h1>
            <p>Welcome to your Admin Dashboard</p>
          </div>
        </div>
        <!--  -->
        <section>
          <div class="analytics">
            <div class="row">
              <div class="col-6">
                <div class="card2 card"></div>
                <div class="card4 card"></div>
              </div>
              <div class="col-6">
                <div class="card3 card"></div>
                <div class="card5 card"></div>
              </div>
            </div>
          </div>
        </section>
        <!--  -->
      </main>
    </div>
  </div>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script>
    $(".admission-btn").click(function() {
      $("#sidebarMenu ul .admission-show").toggleClass("show");
      // $("#sidebarMenu ul .first").toggleClass("rotate");
    });

    $(".fee-btn").click(function() {
      $("#sidebarMenu ul .fee-show").toggleClass("show1");
    });

    $(".expense-btn").click(function() {
      $("#sidebarMenu ul .expense-show").toggleClass("show2");
    });

    $(".salary-btn").click(function() {
      $("#sidebarMenu ul .salary-show").toggleClass("show3");
    });

    $(".visitor-btn").click(function() {
      $("#sidebarMenu ul .visitor-show").toggleClass("show4");
    });
  </script>
</body>

</html>