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
                <a class="navbar-brand" href="index">
                    <img src="https://datagov.mot.go.th/uploads/group/2020-10-15-062155.687138logomdth.png" alt="" width="24">
                    กรมเจ้าท่า</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">เกี่ยวกับเรา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">บุคลากร</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                เพิ่มเติม
                            </a>
                            <ul class="dropdown-menu mt-2" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">ข่าวสาร</a></li>
                                <li><a class="dropdown-item" href="#">บริการ</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class="text-decoration-none login" href="login">เข้าสู่ระบบ</a>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>