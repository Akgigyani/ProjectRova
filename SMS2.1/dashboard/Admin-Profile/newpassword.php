<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Aamir Khan, Ali Malak, and Project Rova Team" />
    <meta name="generator" content="Hugo 0.80.0" />

    <title>Admin Profile | Project Rova </title>
    <link rel="icon" href="../assets/Favicon/rova-favicon-2.PNG" type="image/gif" size="70x110">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Bootstrap core CSS -->
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet" />


    <!-- Custom styles for this template -->
    <link href="../dashboard.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />

</head>

<body>

    <?php

    include_once "navbar.php";

    ?>

    <div class="container-fluid">
        <div class="row">

            <?php

            include_once "../sidebar.php";

            ?>

            <!--  -->

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <div id="main-content">
                    <h1 class="h3 mb-3">Settings</h1>

                    <div class="row">
                        <div class="col-md-3 col-xl-2">

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Profile Settings</h5>
                                </div>

                                <div class="list-group list-group-flush" role="tablist">
                                    <a class="list-group-item list-group-item-action " data-toggle="list" href="index.php" role="tab">
                                        Account
                                    </a>
                                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="newpassword.php" role="tab">
                                        Password
                                    </a>
                                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                                        Privacy and safety
                                    </a>
                                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                                        Email notifications
                                    </a>
                                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                                        Web notifications
                                    </a>
                                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                                        School Information
                                    </a>
                                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                                        Your data
                                    </a>
                                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                                        Delete account
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9 col-xl-10">
                            <div class="tab-content">

                                <div class="password-tab" id="password">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Password</h5>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-field m-2">
                                                    <label for="inputPasswordCurrent">Current password</label>
                                                    <input type="password" class="form-control" id="inputPasswordCurrent">
                                                    <small><a href="#">Forgot your password?</a></small>
                                                </div>
                                                <div class="form-field m-2 mb-3">
                                                    <label for="inputPasswordNew">New password</label>
                                                    <input type="password" class="form-control" id="inputPasswordNew">
                                                </div>
                                                <div class="form-field m-2 mb-3">
                                                    <label for="inputPasswordNew2">Verify password</label>
                                                    <input type="password" class="form-control" id="inputPasswordNew2">
                                                </div>
                                                <button type="submit" class="btn btn-primary m-2">Save changes</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FOOTER -->

                    <hr>
                    <footer class="footer mt-4">
                        <div class="container">
                            <div class="row text-muted">
                                <div class="col-6 text-left" style="float: left;">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="text-muted" href="#">Support</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="text-muted" href="#">Help Center</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="text-muted" href="#">Privacy</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="text-muted" href="#">Terms of Service</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 text-right" style="text-align: right;">
                                    <p class="mb-0">
                                        &copy; 2021 - <a href="index.php" class="text-muted">Rova Software</a>
                                    </p>
                                    <p class="mb-0">
                                        <a href="index.php" class="text-muted">Subsidiary of Alarway Corp</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </footer>

                </div>
            </main>


        </div>
    </div>

    <!--  -->
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>

    <!-- USER IMAGE UPLOAD -->
    <script>
        function chooseFile() {
            document.getElementById("fileInput").click();
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

</body>

</html>