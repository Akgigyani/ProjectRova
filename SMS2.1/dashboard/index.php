<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.80.0" />

  <title>Project Rova | The Ultimate CRM</title>
  <link rel="icon" href="assets/Favicon/rova-favicon.PNG" type="image/gif" size="20x30">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/" />

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Digital Clock Font -->
  <link href="https://allfont.net/allfont.css?fonts=digital-7" rel="stylesheet" type="text/css" />

  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet" />
  <link href="css/index.css" rel="stylesheet" />
  <link href="#/stylesheet.css" rel="stylesheet" />

  <!-- Tabulator -->
  <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://unpkg.com/tabulator-tables/dist/js/tabulator.min.js"></script>

</head>

<!--  -->

<body onload="initClock()">
  <header class="navbar sticky-top flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php"><img src="assets/projectrova2.PNG" class="logo" />
    </a>


    <!-- <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

    <!-- Sidebar Toggle Button -->
    <div class="toggle-btn" onclick="togglemenu(); maincontentpush();">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <!--  -->


    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" id="Search" />

    <!--  -->

    <div class="dropdown">
      <button type="button" class="btn btn-sm dropdown-toggle user-btn m-0 gap-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <a href="#" class="user-menu">
          <img width="40" src="assets/avatar.svg" class="user-menu" alt="" id="user-menu" />
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
    </div>
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
              <a href="#" class="admission-btn" onclick="caretRotate();">Admissions
                <img src="assets/Feather SVGS/chevrons-down.svg" id="caret-rotate">
                <!-- <i class="fa fa-caret-down first"></i> -->
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

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
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
        </div>
        </>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
        <div id="main-content">
          <!-- <div> -->

          <section>
            <div class="analytics">
              <div class="row first-row">
                <div class="col-6">
                  <div class="analytics-heading card">
                    <div class="row">
                      <div class="col-10">
                        <h3>Welcome back Admin! </h3>
                        <h3>Excellence Model School</h3>
                      </div>
                      <div class="col-2">
                        <img src="assets/EMS.png" class="welcome-card-img">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="datetime">
                    <div class="date">
                      <span id="dayname">Day</span>,
                      <span id="month">Month</span>
                      <span id="daynum">00</span>,
                      <span id="year">Year</span>
                    </div>
                    <div class="time">
                      <span id="hour">00</span>:
                      <span id="minutes">00</span>:
                      <span id="seconds">00</span>
                      <span id="period">AM</span>
                    </div>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-6">
                  <div class="card2 card">
                    <div id="donutchart" style="width: 100%; height: 500px;"></div>
                  </div>
                  <div class="card4 card">
                    <div id="columnchart_values-teachers" style="width: 100%; height: 100%;"></div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card3 card">
                    <div id="columnchart_values-students" style="width: 100%; height: 100%;"></div>
                  </div>
                  <div class="card5 card"></div>
                </div>
              </div>
            </div>
          </section>

          <!--  -->

          <div class="card flex-fill">
            <div class="card-header">
              <div class="card-actions float-right">
                <div class="dropdown show">
                  <a href="#" data-toggle="dropdown" data-display="static">
                    <i class="align-middle" data-feather="more-horizontal"></i>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
              <h5 class="card-title mb-0">Latest Projects</h5>
            </div>
            <table id="datatables-dashboard-projects" class="table table-striped my-0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th class="d-none d-xl-table-cell">Start Date</th>
                  <th class="d-none d-xl-table-cell">End Date</th>
                  <th>Status</th>
                  <th class="d-none d-md-table-cell">Assignee</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Project Apollo</td>
                  <td class="d-none d-xl-table-cell">01/01/2018</td>
                  <td class="d-none d-xl-table-cell">31/06/2018</td>
                  <td><span class="badge badge-success">Done</span></td>
                  <td class="d-none d-md-table-cell">Carl Jenkins</td>
                </tr>
                <tr>
                  <td>Project Fireball</td>
                  <td class="d-none d-xl-table-cell">01/01/2018</td>
                  <td class="d-none d-xl-table-cell">31/06/2018</td>
                  <td><span class="badge badge-danger">Cancelled</span></td>
                  <td class="d-none d-md-table-cell">Bertha Martin</td>
                </tr>
                <tr>
                  <td>Project Hades</td>
                  <td class="d-none d-xl-table-cell">01/01/2018</td>
                  <td class="d-none d-xl-table-cell">31/06/2018</td>
                  <td><span class="badge badge-success">Done</span></td>
                  <td class="d-none d-md-table-cell">Stacie Hall</td>
                </tr>
                <tr>
                  <td>Project Nitro</td>
                  <td class="d-none d-xl-table-cell">01/01/2018</td>
                  <td class="d-none d-xl-table-cell">31/06/2018</td>
                  <td>
                    <span class="badge badge-warning">In progress</span>
                  </td>
                  <td class="d-none d-md-table-cell">Carl Jenkins</td>
                </tr>
                <tr>
                  <td>Project Phoenix</td>
                  <td class="d-none d-xl-table-cell">01/01/2018</td>
                  <td class="d-none d-xl-table-cell">31/06/2018</td>
                  <td><span class="badge badge-success">Done</span></td>
                  <td class="d-none d-md-table-cell">Bertha Martin</td>
                </tr>
                <tr>
                  <td>Project X</td>
                  <td class="d-none d-xl-table-cell">01/01/2018</td>
                  <td class="d-none d-xl-table-cell">31/06/2018</td>
                  <td><span class="badge badge-success">Done</span></td>
                  <td class="d-none d-md-table-cell">Stacie Hall</td>
                </tr>
                <tr>
                  <td>Project Romeo</td>
                  <td class="d-none d-xl-table-cell">01/01/2018</td>
                  <td class="d-none d-xl-table-cell">31/06/2018</td>
                  <td><span class="badge badge-success">Done</span></td>
                  <td class="d-none d-md-table-cell">Ashley Briggs</td>
                </tr>
                <tr>
                  <td>Project Wombat</td>
                  <td class="d-none d-xl-table-cell">01/01/2018</td>
                  <td class="d-none d-xl-table-cell">31/06/2018</td>
                  <td>
                    <span class="badge badge-warning">In progress</span>
                  </td>
                  <td class="d-none d-md-table-cell">Bertha Martin</td>
                </tr>
                <tr>
                  <td>Project Zircon</td>
                  <td class="d-none d-xl-table-cell">01/01/2018</td>
                  <td class="d-none d-xl-table-cell">31/06/2018</td>
                  <td><span class="badge badge-danger">Cancelled</span></td>
                  <td class="d-none d-md-table-cell">Stacie Hall</td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>

      </main>
    </div>
  </div>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>

  <!-- Sidebar Toggle Script -->
  <script type="text/javascript">
    function togglemenu() {
      document.getElementById("sidebarMenu").classList.toggle("active");
    }

    function maincontentpush() {
      document.getElementById("main-content").classList.toggle("active");
      // if (sidebarMenu.classList.toggle = "active") {
      //   document.getElementById("main-content").style.marginLeft = "-200px";
      // } else if (sidebarMenu.classList.toggle != "active") {
      //   document.getElementById("main-content").style.marginLeft = "0px";
      // }
    }
  </script>

  <!-- Arrow Rotate -->
  <script>
    function caretRotate() {
      document.getElementById("caret-rotate").classList.toggle("active");
    }
  </script>

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
  <script type="text/javascript" src="time.js"></script>
  <!-- Charts -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Work', 11],
        ['Eat', 2],
        ['Commute', 2],
        ['Watch TV', 2],
        ['Sleep', 7]
      ]);

      var options = {
        title: 'My Daily Activities',
        // height: 400,
        pieHole: 0.4,
        backgroundColor: 'transparent',
        titleTextStyle: {
          // color: 'white',
          fontSize: 15,
        },
        legend: {
          position: 'right',
          textStyle: {
            // color: 'white',
            fontSize: 16
          }
        }
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }
  </script>
  <!-- Chart 2 (Bar Chart) -->
  <script type="text/javascript">
    google.charts.load("current", {
      packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", {
          role: "style"
        }],
        // ["Absent", 8.94, "#b87333"],
        // ["Present", 10.49, "silver"],
        ["Absent", 20.30, "color: #d9534f"],
        ["Present", 20.45, "color: #5cb85c"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
        {
          calc: "stringify",
          sourceColumn: 1,
          type: "string",
          role: "annotation"
        },
        2
      ]);

      var options = {
        title: "Student Presence Ratio",
        // width: 600,
        // height: 400,
        backgroundColor: 'transparent',
        titleTextStyle: {
          // color: 'white',
          fontSize: 15,
        },
        bar: {
          groupWidth: "95%"
        },
        legend: {
          position: "none"
        },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values-students"));
      chart.draw(view, options);
    }
  </script>

  <!-- Chart 3 (Bar Chart) -->
  <script type="text/javascript">
    google.charts.load("current", {
      packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", {
          role: "style"
        }],
        // ["Absent", 8.94, "#b87333"],
        // ["Present", 10.49, "silver"],
        ["Absent", 1.4, "color: #d9534f"],
        ["Present", 2.45, "color: #5cb85c"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
        {
          calc: "stringify",
          sourceColumn: 1,
          type: "string",
          role: "annotation"
        },
        2
      ]);

      var options = {
        title: "Teachers Presence Ratio",
        // width: 600,
        // height: 400,
        backgroundColor: 'transparent',
        titleTextStyle: {
          // color: 'white',
          fontSize: 15,
        },

        bar: {
          groupWidth: "95%"
        },
        legend: {
          position: "none"
        },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values-teachers"));
      chart.draw(view, options);
    }
  </script>

</body>

</html>