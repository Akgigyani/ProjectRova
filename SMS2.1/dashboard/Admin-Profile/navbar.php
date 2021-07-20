<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header class="navbar navbar-primary sticky-top flex-md-nowrap p-0 shadow" style="background-color:#121212">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../index.php"><img src="../assets/rova2.0.PNG" class="logo" />
        </a>

        <!-- <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->

        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" />

        <!-- ICONS -->


        <div class="dropdown">
            <div class="menu-icons">
                <i class='bx bxs-caret-down-square bx-sm m-2' style="color:skyblue"></i>
            </div>
        </div>

        <div class="dropdown">
            <div class="menu-icons">
                <i class='bx bx-library bx-sm m-2' style="color:skyblue"></i>
            </div>
        </div>

        <div class="dropdown">
            <button type="button" class="btn btn-sm dropdown-toggle user-btn m-0 gap-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <a href="#" class="user-menu">
                    <img width="40" src="../assets/avatar.svg" class="user-menu" alt="" id="user-menu" />
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

</body>

</html>