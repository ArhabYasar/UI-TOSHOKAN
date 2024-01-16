<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="dark">
    <header>
        <div class="container">
            <ul>
                <li>
                    <a href="" class="logo">
                        <div class="images">
                            <img src="{{ asset('img/toshokan_logo.png') }}" title="TOSHOKAN" class="logo-forlight">
                        </div>
                        <h2>TOSHOKAN</h2>
                    </a>
                </li>
                <li>
                    <a href="/register" class="nav-link">Register</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <section class="login">
            <div class="container">
                <div class="left">
                    <div class="form-wrapper">
                        <div class="login-heading">
                            <h1>Login</h1>
                            <p class="text">Silahkan diisi dengan benar!</p>
                        </div>
                        <div class="login-form">
                            <div class="input-wrap">
                                <input type="text" class="login-input" autocomplete="off" required name="username" id="username">
                                <label for="username">Username</label>
                                <i class="icon fa-solid fa-user"></i>
                            </div>
                            <div class="input-wrap">
                                <input type="password" class="login-input" autocomplete="off" required name="password" id="password">
                                <label for="password">Password</label>
                                <i class="icon fa-solid fa-lock"></i>
                            </div>
                            <a href="/dashboardAdmin">
                                <div class="register-button w-100">
                                    <input type="submit" value="Submit" class="btn">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div class="image-wrapper">
                        <img src="{{ asset('img/wave.jpeg') }}" class="img">
                    </div>
                    <div class="wave">
                        <svg class="wave" viewBox="0 0 1171 1024" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="wave" d="M0 1024V0H1171C1092.7 14.3194 1027.73 22 1011.5 62C995.268 102 1053 109 1045 171.5C1037 234 916.5 267 897.5 338C878.5 409 1009 486 995 531C981 576 927 585 932 654C937 723 1017 1024 797.5 1024.5C578 1025 0 1024 0 1024Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
