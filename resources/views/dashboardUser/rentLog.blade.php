<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/style-book.css') }}">
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
                    <a href="/dashboardUser/listBook" data-active="1">
                        <div class="icon">
                            <i class='bx bx-folder'></i>
                            <i class='bx bxs-folder'></i>
                        </div>
                        <span class="link hide">Book List</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboardUser/rentLog" class="active" data-active="2">
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
            <p>Rent Book</p>
            <a href="/dashboardAdmin/book" class="tombol">Back</a>
        </div>
        <div class="input-detail">
            <div class="input-row">
                <label for="judul">Nama:</label>
                <input type="text" id="username" name="username" required autocomplete="off" value="Arhab">
            </div>

            <div class="input-row">
                <label for="phone">Buku:</label>
                <input type="text" id="phone" name="phone" required autocomplete="off" value="Critical Thinking">
            </div>
            <button type="submit" class="tombol">Submit</button>
        </div>

        <p class="copyright">
            &copy; 2024 - <span>TOSHOKAN</span> All Rights Reserved
        </p>
    </main>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
