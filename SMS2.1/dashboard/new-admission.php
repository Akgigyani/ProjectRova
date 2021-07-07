<?php

include("connect.php");

if (isset($_POST["submit"])) {

  $admission_no = $_POST['admission-no'];
  $dob = $_POST['dob'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $last_class = $_POST['last-class'];
  $new_class = $_POST['new-class'];
  $last_school = $_POST['last-school'];
  $gender = $_POST['gender'];
  $sps = $_POST['sps'];
  $scs = $_POST['scs'];
  $admission_date = $_POST['admission-date'];
  //Health Information
  $physical_condition = $_POST['physical-condition'];
  $notes = $_POST['notes'];
  $emergency_contact = $_POST['emergency-contact'];
  $contact_status = $_POST['contact-status'];

  //Parent Information

  $cname = $_POST['cname'];
  $relationship = $_POST['relationship'];
  $cnic = $_POST['cnic'];
  $email_id = $_POST['email-id'];
  $occupation = $_POST['occupation'];
  $current_address = $_POST['current-address'];
  $home_phone = $_POST['home-phone'];
  $mobile_no = $_POST['mobile-no'];
  $home_city = $_POST['home-city'];
  $home_province = $_POST['home-province'];
  $web_link = $_POST['web-link'];

  //Office Use

  $title = $_POST['title'];
  $in_class = $_POST['in-class'];
  $promotion_fee = $_POST['promotion-fee'];
  $child_of = $_POST['child-of'];
  $admission_fee = $_POST['admission-fee'];
  $registration_fee = $_POST['registration-fee'];
  $officer = $_POST['officer'];
  $principle_signature = $_POST['principle-signature'];
  $picture = $_POST['picture'];
  $parent_id = $_POST['parent-id'];
  $birth_certificate = $_POST['birth-certificate'];
  $other_document = $_POST['other-document'];


  $sql1 = "INSERT INTO `admission_full`(`admission_no`, `dob`, `first_name`, `last_name`, `last_class`, `new_class`, `last_school`, `gender`, `student_payment_status`, `student_current_status`, `admission_date`, `custodian_name`, `relationship`, `id_card`, `email_id`, `occupation`, `current_address`, `home_phone`, `mobile_no`, `home_city`, `province`, `web_link`, `physical_condition`, `emergency_contact`, `contact_status`, `notes`, `title`, `in_class`, `promotion_fee`, `child_of`, `admission_fee`, `registration_fee`, `officer`, `principle_signature`, `image`, `parent_id` ,`birth_certificate`, `other_document`)
  VALUES ('$admission_no','$dob', '$fname', '$lname', '$last_class', '$new_class', '$last_school', '$gender', '$sps', '$scs', '$admission_date', '$cname', '$relationship', '$cnic', '$email_id', '$occupation', '$current_address', '$home_phone', '$mobile_no', '$home_city', '$home_province', '$web_link', '$physical_condition', '$emergency_contact', '$contact_status', '$notes', '$title', '$in_class', '$promotion_fee', '$child_of', '$admission_fee', '$registration_fee', '$officer', '$principle_signature', '$picture', '$parent_id', '$birth_certificate', '$other_document')";

  // $sql2 = "INSERT INTO `admission_parent`(`custodian_name`, `relationship`, `id_card`, `email_id`, `occupation`, `current_address`, `home_phone`, `mobile_no`, `home_city`, `province`, `web_link`)
  // VALUES ('$cname', '$relationship', '$cnic', '$email_id', '$occupation', '$current_address', '$home_phone', '$mobile_no', '$home_city', '$home_province', '$web_link')";

  // $sql3 = "INSERT INTO `admission_office_use`(`title`, `in_class`, `promotion_fee`, `child_of`, `admission_fee`, `registration_fee`, `officer`, `principle_signature`, `image`, `parent_id` ,`birth_certificate`, `other_document`)
  // VALUES ('$title', '$in_class', '$promotion_fee', '$child_of', '$admission_fee', '$registration_fee', '$officer', '$principle_signature', '$picture', '$parent_id', '$birth_certificate', '$other_document')";

  $result = mysqli_query($con, $sql1);
}

$con->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.80.0" />
  <title>New Admission</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/" />

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/admission.css">

  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />


  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet" />
</head>

<body>
  <header class="navbar sticky-top flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php"><img src="assets/rovasms.PNG" class="logo" />
    </a>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" id="Search" />


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
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div>

          <div class="row">
            <div class="col-8">
              <div class="page-title">
                <h1>New Admission</h1>
              </div>
            </div>
            <div class="col-4">
              <div class="school-logo">
                <img src="assets/EMS.png" class="main-page-logo">
              </div>
            </div>
          </div>

          <form action="" method="POST" enctype="multipart/form-data">

            <div class="form-group col-md-4">
              <label for="admission-no">Admission No.</label>
              <input type="text" id="admission-no" name="admission-no" form class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="dob">Date of Birth</label>
              <input type="date" id="dob" name="dob" class="form-control">
            </div>


            <div class="form-group col-md-4">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="fname" class="form-control">
            </div>


            <div class="form-group col-md-4">
              <label for="name">Last Name</label>
              <input type="text" id="lname" name="lname" class="form-control">
            </div>


            <div class="form-group col-md-4">
              <label for="lclass" id="lclassfield">Last Class</label>
              <input type="text" id="last-class" name="last-class" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="new-class">New Class</label>
              <select name="new-class" id="new-class" class="form-control">
                <option value="playgroup">Playgroup</option>
                <option value="prep">Prep</option>
                <option value="first">First</option>
                <option value="second">Second</option>
                <option value="third">Third</option>
                <option value="fourth">Fourth</option>
                <option value="fifth">Fifth</option>
                <option value="sixth">Sixth</option>
                <option value="seventh">Seventh</option>
                <option value="eight">Eight</option>
                <option value="ninth">Ninth</option>
                <option value="tenth">Tenth</option>
              </select>
            </div>


            <div class="form-group col-md-4">
              <label for="last-school">Last School</label>
              <input type="text" id="last-school" name="last-school" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="gender">Gender</label>
              <select name="gender" id="gender" class="form-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="sps">Student Payment Status</label>
              <select name="sps" id="sps" class="form-control">
                <option value="paid">Paid</option>
                <option value="free">Free</option>
                <option value="staff-quota">Staff Quota</option>
                <option value="scholarship">Scholarship</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="scs">Student Current Status</label>
              <select name="scs" id="scs" class="form-control">
                <option value="continued">Continued</option>
                <option value="quit">Quit</option>
                <option value="rusticated">Rusticated</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="admission-date">Admission Date</label>
              <input type="date" id="admission-date" name="admission-date" class="form-control">
            </div>
            <br>

            <hr>
            <h2>Parent or Guardian Information</h2>

            <div class="form-group col-md-4">
              <label for="cname">Custodian Name</label>
              <input type="text" id="cname" name="cname" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="relationship">Relationship</label>
              <select name="relationship" id="relationship" class="form-control">
                <option value="parent">Parent</option>
                <option value="sibling">Sibling</option>
                <option value="guardian">Guardian</option>
                <option value="child">Child</option>
                <option value="other">Other</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="cnic">ID Card No.</label>
              <input type="text" id="cnic" name="cnic" class="form-control">
            </div>


            <div class="form-group col-md-4">
              <label for="e-id">Email ID</label>
              <input type="email" id="email-id" name="email-id" class="form-control">
            </div>


            <div class="form-group col-md-4">
              <label for="occupation">Occupation</label>
              <input type="text" id="occupation" name="occupation" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="current-address">Current Address</label>
              <input type="text" id="current-address" name="current-address" class="form-control">
            </div>


            <div class="form-group col-md-4">
              <label for="home-phone">Home Phone</label>
              <input type="text" id="home-phone" name="home-phone" class="form-control">
            </div>


            <div class="form-group col-md-4">
              <label for="mobile-no">Mobile No.</label>
              <input type="text" id="mobile-no" name="mobile-no" class="form-control">
            </div>


            <!-- <div class="form-group col-md-4">
              <label for="permanent-address">Permanent Address</label>
              <input type="text" id="permanent-address" name="permanent-address" class="form-control">
            </div> -->

            <div class="form-group col-md-4">
              <label for="home-city">Home City</label>
              <input type="text" id="home-city" name="home-city" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="home-province">Home Province</label>
              <select name="home-province" id="home-province" class="form-control">
                <option value="ict">Islamabad ICT</option>
                <option value="punjab">Punjab</option>
                <option value="kpk">KPK</option>
                <option value="balochistan">Balochistan</option>
                <option value="sindh">Sindh</option>
                <option value="gilgit-baltistan">Gilgit-Baltistan</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="web-link">Web Link</label>
              <input type="text" id="web-link" name="web-link" class="form-control">
            </div>



            <hr>
            <h3>Health or Physical Information</h3>


            <div class="form-group col-md-4">
              <label for="physical-condition">Physical Condition</label>
              <select name="physical-condition" id="physical-condition" class="form-control">
                <option value="normal">Normal</option>
                <option value="disable">Disable</option>
                <option value="special-attention">Special Attention</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="notes">Notes</label>
              <input type="text" id="notes" name="notes" class="form-control">
            </div>


            <div class="form-group col-md-4">
              <label for="emergency-contact">Emergency Contact</label>
              <input type="text" id="emergency-contact" name="emergency-contact" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="contact-status">Contact Status</label>
              <select name="contact-status" id="contact-status" class="form-control">
                <option value="parent">Parent</option>
                <option value="sibling">Sibling</option>
                <option value="guardian">Guardian</option>
                <option value="child">Child</option>
                <option value="other">Other</option>
              </select>
            </div>

            <hr>
            <h3>Office Use Only</h3>

            <div class="form-group col-md-4">
              <label for="title">Mr / Mrs</label>
              <input type="text" id="title" name="title" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="in-class">In Class</label>
              <select name="in-class" id="in-class" class="form-control">
                <option value="playgroup">Playgroup</option>
                <option value="prep">Prep</option>
                <option value="first">First</option>
                <option value="second">Second</option>
                <option value="third">Third</option>
                <option value="fourth">Fourth</option>
                <option value="fifth">Fifth</option>
                <option value="sixth">Sixth</option>
                <option value="seventh">Seventh</option>
                <option value="eight">Eight</option>
                <option value="ninth">Ninth</option>
                <option value="tenth">Tenth</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="prome-fee">Promotion Fee</label>
              <input type="text" id="promotion-fee" name="promotion-fee" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="s/d-of">S / D of</label>
              <input type="text" id="s/d-of" name="child-of" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="admission-fee">Admission Fee</label>
              <input type="text" id="admission-fee" name="admission-fee" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="registration-fee">Registration Fee</label>
              <input type="text" id="registration-Fee" name="registration-fee" class="form-control">
            </div>


            <div class="form-group col-md-4">
              <label for="officer">Officer</label>
              <input type="text" id="officer" name="officer" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="principle-signature">Principle Signature</label>
              <input type="text" id="principle-signature" name="principle-signature" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="picture">Picture</label>
              <input type="file" id="picture" name="picture" value="Upload Picture" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="parent-id">Parent ID</label>
              <input type="radio" id="document" name="document">


              <label for="birth-certificate">Birth Certificate</label>
              <input type="radio" id="document" name="document">
            </div>

            <!-- <div class="form-group col-md-4">
              <label for="parent-id">Parent ID</label>
              <input type="text" id="parent-id" name="parent-id" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="birth-certificate">Birth Certificate</label>
              <input type="text" id="birth-certificate" name="birth-certificate" class="form-control">
            </div> -->

            <div class="form-group col-md-4">
              <label for="other-document">Other Document</label>
              <input type="text" id="other-document" name="other-document" class="form-control">
            </div>



            <br>
            <div class="submit-button">
              <input type="submit" id="submit" name="submit" class="btn btn-primary">
            </div>

          </form>
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