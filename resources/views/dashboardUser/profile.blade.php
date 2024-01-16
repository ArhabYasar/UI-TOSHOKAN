<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/style-profile-user.css') }}">
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
                    <a href="/dashboardAdmin/profile" class="active" data-active="0">
                        <div class="icon">
                            <i class='bx bxs-user-rectangle'></i>
                            <i class='bx bxs-user-rectangle'></i>
                        </div>
                        <span class="link hide">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboardUser/listBook" data-active="1">
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
            <p>Profile</p>
        </div>
        <form action="#" method="get" class="input-detail">
            <div class="input-row">
                <label for="username">NIS:</label>
                <input type="text" id="username" name="username" required autocomplete="off" value="2122020203">
            </div>

            <div class="input-row">
                <label for="phone">Nama:</label>
                <input type="text" id="phone" name="phone" required autocomplete="off" value="Arhub">
            </div>

            <div class="input-row">
                <label for="status">Jenis Kelamin:</label>
                <input type="text" id="status" name="status" required autocomplete="off" value="Laki-Laki">
            </div>

            <div class="input-row">
                <label for="status">No Handphone:</label>
                <input type="text" id="status" name="status" required autocomplete="off" value="08923232423">
            </div>

            <button type="submit" class="tombol">Update</button>
        </form>
        <p class="copyright">
            &copy; 2024 - <span>TOSHOKAN</span> All Rights Reserved
        </p>
    </main>
    <script src="{{ asset('js/user.js') }}"></script>
</body>
</html>
