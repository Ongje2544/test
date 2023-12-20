<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .login {
            margin: 4px 2px;
            padding: 4.5px 10px;
            border: 1px;
            border-radius: 6px;
            border-style: solid;
            cursor: pointer;
            display: inline-block;
            background-color: white;
            color: red;
            transition: 0.3s;
        }

        .login:hover {
            background-color: red;
            color: white;
        }
    </style>

</head>

<body>
    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-md  navbar-light bg-primary fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/test/index.php/Backend/">หน้าแรก</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/test/index.php/News/index">ข่าวสาร</a>
                        </li>
                    </ul>
                    <a class="text-decoration-none login" href="/test/index.php/Home/">ออกจากระบบ</a>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>