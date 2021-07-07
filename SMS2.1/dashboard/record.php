<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.80.0" />
  <title>Record</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/" />

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/expenditure.css">

  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

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
        <div>

          <div class="row">
            <div class="col-8">
              <div class="page-title">
                <h1>Record</h1>
              </div>
            </div>
            <div class="col-4">
              <div class="school-logo">
                <img src="assets/EMS.png" class="main-page-logo">
              </div>
            </div>
          </div>

          <form>

            <div class="form-group col-md-4">
              <label for="id">ID</label>
              <input type="text" id="id" name="id" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="date">Date</label>
              <input type="date" id="date" name="date" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="ftm">For the Month</label>
              <select name="ftm" id="ftm" class="form-control">
                <option value="jan">January</option>
                <option value="feb">Feburary</option>
                <option value="mar">March</option>
                <option value="apr">April</option>
                <option value="may">May</option>
                <option value="jun">June</option>
                <option value="jul">July</option>
                <option value="aug">August</option>
                <option value="sep">September</option>
                <option value="oct">October</option>
                <option value="nov">November</option>
                <option value="dec">December</option>
              </select>
            </div>


          </form>

          <table>

            <tr>

              <th>School Rent</th>
              <th>Electricity Bill</th>
              <th>Water Bill</th>
              <th>Gas Bill</th>
              <th>Phone Bill</th>

            </tr>

            <tr>

              <td>
                <input type="text" id="school-rent" name="school-rent" class="form-control">
              </td>

              <td>
                <input type="text" id="electricity-bill" name="electricity-bill" class="form-control">
              </td>

              <td>
                <input type="text" id="water-bill" name="water-bill" class="form-control">
              </td>

              <td>
                <input type="text" id="gas-bill" name="gas-bill" class="form-control">
              </td>

              <td>
                <input type="text" id="phone-bill" name="phone-bill" class="form-control">
              </td>

            </tr>

          </table>

          <hr>

          <table>

            <tr>

              <th>School Procurement</th>
              <th>Qty</th>
              <th>Cost</th>
              <th>Students Procurement</th>
              <th>Qty 1</th>
              <th>Cost 1</th>

            </tr>

            <tr>

              <td>
                <label for="generator">Generator</label>
                <input type="text" id="generator" name="generator" class="form-control">
              </td>

              <td>
                <input type="text" id="qty" name="qty" class="form-control">
              </td>

              <td>
                <input type="text" id="cost" name="cost" class="form-control">
              </td>

              <td>
                <label for="books">Books</label>
                <input type="text" id="books" name="books" class="form-control">
              </td>

              <td>
                <input type="text" id="qty-1" name="qty-1" class="form-control">
              </td>

              <td>
                <input type="text" id="cost-1" name="cost-1" class="form-control">
              </td>

            </tr>

            <br>

            <tr>

              <td>
                <label for="electrician-work">Electrician Work</label>
                <input type="text" id="electrician-work" name="electrician-work" class="form-control">
              </td>

              <td>
                <input type="text" id="qty" name="qty" class="form-control">
              </td>

              <td>
                <input type="text" id="cost" name="cost" class="form-control">
              </td>

              <td>
                <label for="copies">Copies</label>
                <input type="text" id="copies" name="copies" class="form-control">
              </td>

              <td>
                <input type="text" id="qty-1" name="qty-1" class="form-control">
              </td>

              <td>
                <input type="text" id="cost-1" name="cost-1" class="form-control">
              </td>

            </tr>

            <tr>

              <td>
                <label for="tsf">Tea Sugar Food</label>
                <input type="text" id="tsf" name="tsf" class="form-control">
              </td>

              <td>
                <input type="text" id="qty" name="qty" class="form-control">
              </td>

              <td>
                <input type="text" id="cost" name="cost" class="form-control">
              </td>


              <td>
                <label for="dairies">Dairies</label>
                <input type="text" id="dairies" name="dairies" class="form-control">
              </td>

              <td>
                <input type="text" id="qty-1" name="qty-1" class="form-control">
              </td>

              <td>
                <input type="text" id="cost-1" name="cost-1" class="form-control">
              </td>

            </tr>

            <tr>

              <td>
                <label for="furniture-chair">Furniture Chair</label>
                <input type="text" id="furniture-chair" name="furnitue-chair" class="form-control">
              </td>

              <td>
                <input type="text" id="qty" name="qty" class="form-control">
              </td>

              <td>
                <input type="text" id="cost" name="cost" class="form-control">
              </td>

              <td>
                <label for="uniform">Uniform</label>
                <input type="text" id="uniform" name="uniform" class="form-control">
              </td>

              <td>
                <input type="text" id="qty-1" name="qty-1" class="form-control">
              </td>

              <td>
                <input type="text" id="cost-1" name="cost-1" class="form-control">
              </td>

            </tr>

            <tr>

              <td>
                <label for="furnirue-table">Furniture Table</label>
                <input type="text" id="furniture-table" name="furniture-table" class="form-control">
              </td>

              <td>
                <input type="text" id="qty" name="qty" class="form-control">
              </td>

              <td>
                <input type="text" id="cost" name="cost" class="form-control">
              </td>



              <td>
                <label for="stationary">Stationary</label>
                <input type="text" id="stationary" name="stationary" class="form-control">
              </td>

              <td>
                <input type="text" id="qty-1" name="qty-1" class="form-control">
              </td>

              <td>
                <input type="text" id="cost-1" name="cost-1" class="form-control">
              </td>

            </tr>

            <tr>

              <td>
                <label for="furnirue-repair">Furniture Repair</label>
                <input type="text" id="furniture-repair" name="furniture-repair" class="form-control">
              </td>

              <td>
                <input type="text" id="qty" name="qty" class="form-control">
              </td>

              <td>
                <input type="text" id="cost" name="cost" class="form-control">
              </td>

              <td>
                <label for="exp">Exp</label>
                <input type="text" id="exp" name="exp" class="form-control">
              </td>

              <td>
                <input type="text" id="qty-1" name="qty-1" class="form-control">
              </td>

              <td>
                <input type="text" id="cost-1" name="cost-1" class="form-control">
              </td>

            </tr>

            <tr>

              <td>
                <label for="writing-boards">Writing Boards</label>
                <input type="text" id="writing-boards" name="writing-boards" class="form-control">
              </td>

              <td>
                <input type="text" id="qty" name="qty" class="form-control">
              </td>

              <td>
                <input type="text" id="cost" name="cost" class="form-control">
              </td>

              <td>
                <label for="exp">Exp</label>
                <input type="text" id="exp" name="exp" class="form-control">
              </td>

              <td>
                <input type="text" id="qty-1" name="qty-1" class="form-control">
              </td>

              <td>
                <input type="text" id="cost-1" name="cost-1" class="form-control">
              </td>




            </tr>

            <tr>

              <td>
                <label for="fans">Fans</label>
                <input type="text" id="fans" name="fans" class="form-control">
              </td>

              <td>
                <input type="text" id="qty" name="qty" class="form-control">
              </td>

              <td>
                <input type="text" id="cost" name="cost" class="form-control">
              </td>

              <td>
                <label for="exp">Exp</label>
                <input type="text" id="exp" name="exp" class="form-control">
              </td>

              <td>
                <input type="text" id="qty-1" name="qty-1" class="form-control">
              </td>

              <td>
                <input type="text" id="cost-1" name="cost-1" class="form-control">
              </td>


            </tr>

          </table>
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
</body>

</html>