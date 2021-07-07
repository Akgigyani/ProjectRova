<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.80.0" />
  <title>Salary</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/" />

  <link rel="stylesheet" href="style.css">


  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
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

    /* SALARy */
    .staff-selection {
      margin: 20px;
    }

    .staff-show {
      margin: 20px;
    }

    .staff-show input[type=text],
    select {
      width: 50vh;
      padding: 10px;
      font-size: 18px;
      font-family: 'Times New Roman', Times, serif;
      font-weight: 500;
    }
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
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <!--  -->
          <form>
            <!--  -->
            <div class="staff-selection">
              <!-- <label for="staff-selection">Select Staff</label> -->
              <select name="staff" id="staff">
                <option value="select-staff" id="select-staff">Select Staff</option>
                <option value="staff-hm" id="staff-hm">Headmistress</option>
                <option value="staff-t" id="staff-t">Teacher</option>
                <option value="staff-cs" id="staff-cs">Cleaning Staff</option>
                <option value="staff-w" id="staff-w">Watchman</option>
                <option value="staff-ob" id="staff-ob">Office Boy</option>
              </select>
            </div>
            <!--  -->


            <div class="staff-show">
              <div class="head" style="display: none;">
                <!-- <label for="hm">Headmistress</label> -->
                <select name="hm" id="hm">
                  <option value="select-hm">Select Headmistress</option>
                  <option value="hm-1">Headmistress - 1</option>
                  <option value="hm-2">Headmistress - 2</option>
                  <option value="hm-3">Headmistress - 3</option>
                </select>

                <input hidden type="text" id="status" name="status" />

                <input hidden type="text" id="status" name="status" />
              </div>


              <div class="teach" style="display: none;">
                <!-- <label for="teacher">Teacher</label> -->
                <select name="teacher" id="teacher">
                  <option value="select-teacher">Select Teacher</option>
                  <option value="teacher-1">Teacher - 1</option>
                  <option value="teacher-2">Teacher - 2</option>
                  <option value="teacher-3">Teacher - 3</option>
                </select>

                <input hidden type="text" id="status" name="status" />

                <input hidden type="text" id="status" name="status" />
              </div>

              <div class="clean" style="display: none;">
                <!-- <label for="cleaning">Cleaning</label> -->
                <select name="cleaning" id="cleaning">
                  <option value="select-cleaning">Select Cleaning</option>
                  <option value="cleaning-1">Cleaning - 1</option>
                  <option value="cleaning-2">Cleaning - 2</option>
                  <option value="cleaning-3">Cleaning - 3</option>
                </select>

                <input hidden type="text" id="status" name="status" />

                <input hidden type="text" id="status" name="status" />
              </div>


              <div class="watch" style="display: none;">
                <!-- <label for="watchman">Watchman</label> -->
                <select name="watchman" id="watchman">
                  <option value="select-watchman">Select Watchman</option>
                  <option value="watchman-1">Watchman - 1</option>
                  <option value="watchman-2">Watchman - 2</option>
                  <option value="watchman-3">Watchman - 3</option>
                </select>

                <input hidden type="text" id="status" name="status" />

                <input hidden type="text" id="status" name="status" />
              </div>


              <div class="office" style="display: none;">
                <!-- <label for="office-boy">Office Boy</label> -->
                <select name="office-boy" id="office-boy">
                  <option value="select-office-boy">Select Office Boy</option>
                  <option value="office-boy-1">Office Boy - 1</option>
                  <option value="office-boy-2">Office Boy - 2</option>
                  <option value="office-boy-3">Office Boy - 3</option>
                </select>

                <input hidden type="text" id="status" name="status" />

                <input hidden type="text" id="status" name="status" />
              </div>
            </div>

          </form>



          <div id="salary-table" hidden>
            <!-- <table> -->
            <table>
              <tr>
                <th>Month</th>
                <th>Salary</th>
              </tr>

              <tr>
                <td>
                  <label for="jan">January</label>
                </td>

                <td>
                  <input hidden type="text" id="salary" name="salary" />
                </td>


              </tr>
              <!-- </table> -->

              <tr>
                <td>
                  <label for="feb">February</label>
                </td>

                <td>
                  <input hidden type="text" id="salary" name="salary" />
                </td>


              </tr>

              <tr>
                <td>
                  <label for="mar">March</label>
                </td>

                <td>
                  <input hidden type="text" id="salary" name="salary" />
                </td>


              </tr>

              <tr>
                <td>
                  <label for="apr">April</label>
                </td>

                <td>
                  <input hidden type="text" id="salary" name="salary" />
                </td>


              </tr>

              <tr>
                <td>
                  <label for="may">May</label>
                </td>

                <td>
                  <input hidden type="text" id="salary" name="salary" />
                </td>


              </tr>

              <tr>
                <td>
                  <label for="jun">June</label>
                </td>

                <td>
                  <input hidden type="text" id="salary" name="salary" />
                </td>


              </tr>

              <tr>
                <td>
                  <label for="jul">July</label>
                </td>

                <td>
                  <input hidden type="text" id="salary" name="salary" />
                </td>


              </tr>

              <tr>
                <td>
                  <label for="aug">August</label>
                </td>

                <td>
                  <input hidden type="text" id="salary" name="salary" />
                </td>


              </tr>

              <tr>
                <td>
                  <label for="sep">September</label>
                </td>

                <td>
                  <input hidden type="text" id="salary" name="salary" />
                </td>


              </tr>

              <tr>
                <td>
                  <label for="oct">October</label>
                </td>

                <td>
                  <input hidden type="text" id="salary" name="salary" />
                </td>


              </tr>

              <tr>
                <td>
                  <label for="nov">November</label>
                </td>

                <td>
                  <input hidden type="text" id="salary" name="salary" />
                </td>


              </tr>

              <tr>
                <td>
                  <label for="dec">December</label>
                </td>

                <td>
                  <input hidden type="text" id="salary" name="salary" />
                </td>


              </tr>
            </table>
          </div>

          <!--  -->
          <div class="table-responsive" style="display: none;">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Month</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>January</td>
                  <td>random</td>
                </tr>
                <tr>
                  <td>February</td>
                  <td>placeholder</td>
                </tr>
                <tr>
                  <td>March</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>April</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>May</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>June</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>August</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>September</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>October</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>November</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>December</td>
                  <td>data</td>
                </tr>

              </tbody>
            </table>
          </div>
          <!--  -->
          <!-- Enter Here -->
        </div>
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
  <!-- SALARY JQUERY -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $("#staff").change(function() {
        if ($("#staff").val() == "staff-hm") {
          $("div.head").show();
          $("div.teach").hide();
          $("div.clean").hide();
          $("div.watch").hide();
          $("div.office").hide();
          $("#salary-table").show();
        }
        //
        else if ($("#staff").val() == "staff-t") {
          $("div.head").hide();
          $("div.teach").show();
          $("div.clean").hide();
          $("div.watch").hide();
          $("div.office").hide();
          $("#salary-table").show();
        }
        //
        else if ($("#staff").val() == "staff-cs") {
          $("div.head").hide();
          $("div.teach").hide();
          $("div.clean").show();
          $("div.watch").hide();
          $("div.office").hide();
          $("#salary-table").show();
        }
        //
        else if ($("#staff").val() == "staff-w") {
          $("div.head").hide();
          $("div.teach").hide();
          $("div.clean").hide();
          $("div.watch").show();
          $("div.office").hide();
          $("#salary-table").show();
        }
        //
        else if ($("#staff").val() == "staff-ob") {
          $("div.head").hide();
          $("div.teach").hide();
          $("div.clean").hide();
          $("div.watch").hide();
          $("div.office").show();
          $("#salary-table").show();
        } else {
          $("div.head").hide();
          $("div.teach").hide();
          $("div.clean").hide();
          $("div.watch").hide();
          $("div.office").hide();
          $("#salary-table").hide();
        }
      });
      // 
      $("#hm").change(function() {
        if ($("#hm").val() !== "select-hm") {
          $("div.table-responsive").show();
        } else {
          $("div.table-responsive").hide();
        }
      });
      // 
      $("#teacher").change(function() {
        if ($("#teacher").val() !== "select-teacher") {
          $("div.table-responsive").show();
        } else {
          $("div.table-responsive").hide();
        }
      });
      // 
      $("#cleaning").change(function() {
        if ($("#cleaning").val() !== "select-cleaning") {
          $("div.table-responsive").show();
        } else {
          $("div.table-responsive").hide();
        }
      });
      // 
      $("#watchman").change(function() {
        if ($("#watchman").val() !== "select-watchman") {
          $("div.table-responsive").show();
        } else {
          $("div.table-responsive").hide();
        }
      });
      // 
      $("#office-boy").change(function() {
        if ($("#office-boy").val() !== "select-office-boy") {
          $("div.table-responsive").show();
        } else {
          $("div.table-responsive").hide();
        }
      });


    });

    // $(document).ready(function() {
    //  $("#hm").change(function() {
    //     if ($("#hm").val() !==  "select-hm") {
    //       $("div.table-responsive").show();
    //     }
    //     else{
    //       $("div.table-responsive").hide();
    //     }
    //   });
    // });
  </script>
</body>

</html>