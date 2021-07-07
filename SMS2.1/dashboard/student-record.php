<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.80.0" />
  <title>Student Record</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/" />

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/admission.css">

  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    /* STUDENT RECORD */
    /* width */
    ::-webkit-scrollbar {
      width: 20px;
      height: 15px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey;
      border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #1f4092;
      border-radius: 10px;

    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #5069aa;
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
        <div>

          <div class="row">
            <div class="col-8">
              <div class="page-title">
                <h1>Student Record</h1>
              </div>
            </div>
            <div class="col-4">
              <div class="school-logo">
                <img src="assets/EMS.png" class="main-page-logo">
              </div>
            </div>
          </div>


          <div class="form-group col-md-2">
            <label for="search-by">Search By</label>
            <select name="search-by" id="search-by" class="form-control">
              <!-- <option value="search">Search-By</option> -->
              <option value="student-id">Student ID</option>
              <option value="student-name">Student Name</option>
              <option value="parent-name">Parent Name</option>
              <option value="class">Class</option>
            </select>
            <!-- <input type="text" id="school-name" name="school-name" class="form-control"> -->
          </div>
          <!-- <div class="form-group col-md-4">
              <label for="school-name">School Name</label>
              <input type="text" id="school-name" name="school-name" class="form-control">
            </div> -->


          <div class="form-group col-md-4" id="s-id">
            <label for="id">Student ID</label>
            <input type="text" id="id" name="id" class="form-control">
          </div>

          <div class="form-group col-md-4" id="s-name" style="display: none;">
            <label for="sname">Student Name</label>
            <input type="text" id="sname" name="sname" class="form-control">
          </div>

          <div class="form-group col-md-4" id="p-name" style="display: none;">
            <label for="pname">Parents Name</label>
            <input type="text" id="pname" name="pname" class="form-control">
          </div>

          <div class="form-group col-md-4" id="s-class" style="display: none;">
            <label for="class">Class</label>
            <input type="text" id="class" name="class" class="form-control">
          </div>

          <!--  -->
          <br>
          <hr>


          <div style="overflow-x:auto;">
            <table id="student-table">

              <!--  -->
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Last Class</th>
                <th>New Class</th>
                <th>Last School</th>
                <th>Gender</th>
                <th>Admission Date</th>
                <th>Student Current Status</th>
                <th>Student Payment Status</th>
                <th>Custodian Name</th>
                <th>Relationship</th>
                <th>ID Card No.</th>
                <th>Occupation</th>
                <th>Current Address</th>
                <th>Permanent Address</th>
                <th>Mother Education</th>
                <th>Mobile No.</th>
                <th>Home City / Town</th>
                <th>Home Province</th>
                <th>Website for Parent</th>
                <th>Age</th>
                <th>Physical Condition</th>
                <th>Emergency Contact </th>
                <th>Contact Status</th>
                <th>Mr / Mrs</th>
                <th>S/D of</th>
                <th>Promotion Fee</th>
                <th>Admission Fee</th>
                <th>Registration Fee</th>
                <th>Officer</th>
                <th>Document</th>
                <th>Note</th>
              </tr>


              <?php

              include("connect.php");

              $selectquery1 = "SELECT * FROM `admission_full`";
              // $selectquery2 = "SELECT * FROM `admission_parent`";
              // $selectquery3 = "SELECT * FROM `admission_office_work`";

              $query = mysqli_query($con, $selectquery1);


              while ($res = mysqli_fetch_array($query)) {

              ?>


                <tr>

                  <td><?php echo $res['admission_no'] ?></td>
                  <td><?php echo $res['dob'] ?></td>
                  <td><?php echo $res['first_name'] ?></td>
                  <td><?php echo $res['last_name'] ?></td>
                  <td><?php echo $res['last_class'] ?></td>
                  <td><?php echo $res['new_class'] ?></td>
                  <td><?php echo $res['last_school'] ?></td>
                  <td><?php echo $res['gender'] ?></td>
                  <td><?php echo $res['student_payment_status'] ?></td>
                  <td><?php echo $res['student_current_status'] ?></td>
                  <td><?php echo $res['admission_date'] ?></td>
                  <td><?php echo $res['physical_condition'] ?></td>
                  <td><?php echo $res['emergency_contact'] ?></td>
                  <td><?php echo $res['contact_status'] ?></td>
                  <td><?php echo $res['notes'] ?></td>
                  <td><?php echo $res['custodian_name'] ?></td>
                  <td><?php echo $res['relationship'] ?></td>
                  <td><?php echo $res['id_card'] ?></td>
                  <td><?php echo $res['email_id'] ?></td>
                  <td><?php echo $res['occupation'] ?></td>
                  <td><?php echo $res['current_address'] ?></td>
                  <td><?php echo $res['home_phone'] ?></td>
                  <td><?php echo $res['mobile_no'] ?></td>
                  <td><?php echo $res['home_city'] ?></td>
                  <td><?php echo $res['province'] ?></td>
                  <td><?php echo $res['web_link'] ?></td>
                  <td><?php echo $res['title'] ?></td>
                  <td><?php echo $res['in_class'] ?></td>
                  <td><?php echo $res['promotion_fee'] ?></td>
                  <td><?php echo $res['child_of'] ?></td>
                  <td><?php echo $res['admission_fee'] ?></td>
                  <td><?php echo $res['registration_fee'] ?></td>
                  <td><?php echo $res['officer'] ?></td>
                  <td><?php echo $res['principle_signature'] ?></td>
                </tr>

              <?php

              }

              ?>



              <tr>
                <td>Eve</td>
                <td>Jackson</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
              </tr>
              <tr>
                <td>Adam</td>
                <td>Johnson</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
              </tr>
              <!--  -->
              <!--  -->

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
  <!--  -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $("#search-by").change(function() {
        if ($("#search-by").val() == "student-id") {
          $("#s-id").show();
          $("#s-name").hide();
          $("#p-name").hide();
          $("#s-class").hide();
        } else if ($("#search-by").val() == "student-name") {
          $("#s-id").hide();
          $("#s-name").show();
          $("#p-name").hide();
          $("#s-class").hide();
        } else if ($("#search-by").val() == "parent-name") {
          $("#s-id").hide();
          $("#s-name").hide();
          $("#p-name").show();
          $("#s-class").hide();
        } else if ($("#search-by").val() == "class") {
          $("#s-id").hide();
          $("#s-name").hide();
          $("#p-name").hide();
          $("#s-class").show();
        } else if ($("#search-by").val() == "search") {
          $("#s-id").hide();
          $("#s-name").hide();
          $("#p-name").hide();
          $("#s-class").hide();
        }
      });
    });
  </script>
</body>

</html>