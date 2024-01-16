<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/style-dashboardAdmin.css') }}">
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
                    <a href="/dashboardAdmin" class="active" data-active="0">
                        <div class="icon">
                            <i class='bx bx-tachometer'></i>
                            <i class='bx bxs-tachometer'></i>
                        </div>
                        <span class="link hide">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboardAdmin/book" data-active="1">
                        <div class="icon">
                            <i class='bx bx-book'></i>
                            <i class='bx bxs-book' ></i>
                        </div>
                        <span class="link hide">Book</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboardAdmin/category" data-active="2">
                        <div class="icon">
                            <i class='bx bx-category' ></i>
                            <i class='bx bxs-category' ></i>
                        </div>
                        <span class="link hide">Categories</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboardAdmin/bookList" data-active="3">
                        <div class="icon">
                            <i class='bx bx-folder'></i>
                            <i class='bx bxs-folder'></i>
                        </div>
                        <span class="link hide">Book List</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboardAdmin/users" data-active="4">
                        <div class="icon">
                            <i class='bx bx-user' ></i>
                            <i class='bx bxs-user' ></i>
                        </div>
                        <span class="link hide">Users</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboardAdmin/returnBook" data-active="5">
                        <div class="icon">
                            <i class='bx bx-folder-minus'></i>
                            <i class='bx bxs-folder-minus'></i>
                        </div>
                        <span class="link hide">Return Book</span>
                    </a>
                </li>
            </ul>
            <h4 class="hide">SHORTCUTS</h4>
            <ul>
                <li>
                    <a href="/" data-active="6">
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
        <ul class="box-info">
            <li>
                <i class='bx bx-book'></i>
                <span class="text">
                    <h3>6</h3>
                    <p>Books</p>
                </span>
            </li>
            <li>
                <i class='bx bx-category' ></i>
                <span class="text">
                    <h3>10</h3>
                    <p>Categories</p>
                </span>
            </li>
            <li>
                <i class='bx bx-user' ></i>
                <span class="text">
                    <h3>6</h3>
                    <p>Users</p>
                </span>
            </li>
        </ul>
        <div class="search-container">
            <p>Rent Log</p>
            <form action="#" method="get" class="search-form">
                <input class="cari" type="text" id="searchInput" placeholder="Search..." name="" autocomplete="off">
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pengguna</th>
                    <th>Judul</th>
                    <th>Tanggal Pinjam</th>
                    <th>Batas Waktu</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Khei</td>
                    <td>Haikyuu!!!</td>
                    <td>12-11-2023</td>
                    <td>01-02-2024</td>
                    <td>20-01-2024</td>
                    <td>Cerita sangat menarik!</td>
                </tr>
            </tbody>
        </table>
        <p class="copyright">
            &copy; 2024 - <span>TOSHOKAN</span> All Rights Reserved
        </p>
    </main>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
