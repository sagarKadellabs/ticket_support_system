<?php
 include 'connection.php'; 
 include 'header.php';
 ?>

<head>
    <!-- <link rel="stylesheet" href="assets/css/sidebar.css"> -->
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <?php
    echo str_repeat('&emsp;',80) .$_SESSION['user_name'];
    ?>

        <div class="header_img">
            <img src="assets/images/nav_image.png" alt="Avatar Logo">

        </div>
    </header>
    <div class="l-navbar" id="nav-bar" style="background-color: #F4FBFF">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <img src="assets/images/KL.png" width="22px">
                    <span class="nav_logo-name m-0">
                        <img src="assets/images/logoi.png" height="25px;">
                    </span> </a>
                <div class="nav_list"> <a href="dashboard.php" class="nav_link active"> <i
                            class=' bx bxs-dashboard nav_icon'></i>
                        <span class="nav_name">Dashboard</span> </a> <a href="manage_user.php" class="nav_link"> <i
                            class="iconify nav_icon" data-icon="carbon:user-multiple"></i> Manage Users</span></a> <a
                        href="manage_client.php" class="nav_link"> <i class="iconify nav_icon"
                            data-icon="carbon:user-multiple"></i> Manage Client</span></a> <a href="#"
                        class="nav_link"><i class='bx bx-user nav_icon'></i> <span class="nav_name">Profile</span> </a>
                </div>
                <a href="logout_submit.php" class="nav_link"> <i class='bx bx-log-in nav_icon' style="color:red;"></i>
                    <span class="nav_name">SignOut</span> </a>
            </div>
        </nav>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function(event) {

        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    // show navbar
                    nav.classList.toggle('show')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
    });
    </script>

</body>