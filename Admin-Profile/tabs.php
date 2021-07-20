<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap core CSS -->
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../dashboard.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <!-- Page Specific CSS -->
    <link href="assets/stylesheets/custom.css" rel="stylesheet" />

</head>

<body>
    <?php
    include_once "navbar.php";
    ?>
    <!--  -->
    <div class="container-fluid">
        <div class="row">

            <?php
            include_once "../sidebar.php";
            ?>
            <!-- SIDEBAR LINK -->

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <div id="main-content">

                    <h1 class="h3 mb-3">Settings</h1>

                    <div class="tabs">
                        <div class="tabs__sidebar">
                            <button class="tabs__button tabs__button--active" data-for-tab="1">Tab #1</button>
                            <button class="tabs__button" data-for-tab="2">Tab #2</button>
                            <button class="tabs__button" data-for-tab="3">Tab #3</button>
                        </div>
                        <div class="content fade show">
                            <div class="tabs__content tabs__content--active" data-tab="1">
                                <h2>Tab # 1</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, optio. Voluptatem laudantium veritatis beatae assumenda, voluptate et accusantium exercitationem natus fugit nobis inventore pariatur dolor unde similique at cum neque?</p>
                            </div>
                            <div class="tabs__content" data-tab="2">
                                <h2>Tab # 2</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, optio. Voluptatem laudantium veritatis beatae assumenda, voluptate et accusantium exercitationem natus fugit nobis inventore pariatur dolor unde similique at cum neque?</p>
                            </div>
                            <div class="tabs__content" data-tab="3">
                                <h2>Tab # 3</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, optio. Voluptatem laudantium veritatis beatae assumenda, voluptate et accusantium exercitationem natus fugit nobis inventore pariatur dolor unde similique at cum neque?</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </main>

        </div>
    </div>

    <script>
        function setupTabs() {
            document.querySelectorAll(".tabs__button").forEach(button => {
                button.addEventListener("click", () => {
                    const sideBar = button.parentElement;
                    const tabsContainer = sideBar.parentElement;
                    const tabNumber = button.dataset.forTab;
                    const tabToActivate = tabsContainer.querySelector(`.tabs__content[data-tab="${tabNumber}"]`);

                    sideBar.querySelectorAll(".tabs__button").forEach(button => {
                        button.classList.remove("tabs__button--active");
                    });

                    tabsContainer.querySelectorAll(".tabs__content").forEach(tab => {
                        tab.classList.remove("tabs__content--active");
                    });

                    button.classList.add("tabs__button--active");
                    tabToActivate.classList.add("tabs__content--active");
                });
            });
        }


        document.addEventListener("DOMContentLoaded", () => {
            setupTabs();

            document.querySelectorAll(".tabs").forEach(tabsContainer => {
                tabContainer.querySelector(".tabs__sidebar .tabs__button").click();
            })
        });
    </script>

</body>

</html>