<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard')</title>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


</head>

<body>

    <x-navbar />


    <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

    <!-- Main Container -->
    <div class="main-wrapper">
        <!-- Sidebar -->

        <x-style />

        <!-- Content Area -->
        <main class="main-content">
            {{-- Optional Breadcrumb --}}
            @hasSection('breadcrumb')
            <div class="breadcrumb-custom">
                @yield('breadcrumb')
            </div>
            @endif

            {{-- Optional Content Header --}}
            @hasSection('header')
            <div class="content-header">
                @yield('header')
            </div>
            @endif

            {{-- Main Content --}}
            <div class="content">
                @yield('content')
            </div>
        </main>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId);
                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener("click", () => {
                        // show navbar
                        nav.classList.toggle("sidebarshow");
                        // change icon
                        toggle.classList.toggle("bx-x");
                        // add padding to body
                        bodypd.classList.toggle("body-pd");
                        // add padding to header
                        headerpd.classList.toggle("body-pd");
                    });
                }
            };
            showNavbar("header-toggle", "nav-bar", "body-pd", "header");
            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll(".nav_link");

            function colorLink() {
                if (linkColor) {
                    linkColor.forEach((l) => l.classList.remove("active"));
                    this.classList.add("active");
                }
            }
            linkColor.forEach((l) => l.addEventListener("click", colorLink));
            // Your code to run since DOM is loaded and ready
        });
    </script>

</body>

</html>