<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/style-bookList-user.css') }}">
</head>
<body>
    <nav>
        <div class="sidebar-top">
            <span class="shrink-btn">
                <i class='bx bx-chevron-left'></i>
            </span>
            <img src="../img/toshokan_logo.png" class="logo" alt="">
            <h3 class="hide">TOSHOKAN</h3>
        </div>
        <div class="sidebar-links">
            <ul>
                <div class="active-tab"></div>
                <li>
                    <a href="/dashboardUser/profile" data-active="0">
                        <div class="icon">
                            <i class='bx bxs-user-rectangle'></i>
                            <i class='bx bxs-user-rectangle'></i>
                        </div>
                        <span class="link hide">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboardUser/listBook" class="active" data-active="1">
                        <div class="icon">
                            <i class='bx bx-folder'></i>
                            <i class='bx bxs-folder'></i>
                        </div>
                        <span class="link hide">Book List</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboardUser/rentLog" data-active="2">
                        <div class="icon">
                            <i class='bx bx-folder'></i>
                            <i class='bx bxs-folder'></i>
                        </div>
                        <span class="link hide">Rent</span>
                    </a>
                </li>
            </ul>
            <h4 class="hide">SHORTCUTS</h4>
            <ul>
                <li>
                    <a href="/" data-active="3">
                        <div class="icon">
                            <i class='bx bx-log-out'></i>
                            <i class='bx bxs-log-out'></i>
                        </div>
                        <span class="link hide">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="search-container">
            <p>Book List</p>
            <form action="#" method="get" class="search-form">
                <input class="cari" type="text" id="searchInput" placeholder="Search..." name="" autocomplete="off">
            </form>
        </div>
        <div class="cards-container">
            <article class="card-article">
                <img src="../img/hoshumin .jpeg" alt="image" class="card-img">
                <div class="card-data">
                    <span class="card-description">asdas sdasd ss</span>
                    <h2 class="card-title">Haikyuu</h2>
                    <a href="#" class="card-button">In Stock</a>
            </div>
        </article>
        <article class="card-article">
            <img src="../img/hinatapp.jpeg" alt="image" class="card-img">
            <div class="card-data">
                <span class="card-description">asdas sdasd ss</span>
                <h2 class="card-title">Haikyuu</h2>
                <a href="#" class="card-button">In Stock</a>
            </div>
        </article>
        <article class="card-article">
            <img src="../img/wave.jpeg" alt="image" class="card-img">
            <div class="card-data">
                <span class="card-description">asdas sdasd ss</span>
                <h2 class="card-title">Haikyuu</h2>
                <a href="#" class="card-button">In Stock</a>
            </div>
        </article>
        <article class="card-article">
            <img src="../img/hkyu.jpg" alt="image" class="card-img">
            <div class="card-data">
                <span class="card-description">asdas sdasd ss</span>
                <h2 class="card-title">Haikyuu</h2>
                <a href="#" class="card-button">In Stock</a>
            </div>
        </article>
    </div>
        <p class="copyright">
            &copy; 2024 - <span>TOSHOKAN</span> All Rights Reserved
        </p>
    </main>
    <script src="{{asset('js/user.js')}}"></script>
</body>
</html>
