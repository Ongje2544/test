<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    .c_a {
        width: 55%;
        justify-content: left;
        text-align: left;
        object-position: left;

    }

    label {
        font-size: 20px;
        font-weight: bold;
    }

    .c_t {
        background-color: rgb(220, 220, 220);
        border-radius: 7px;
        padding: 5px 15px;
    }

    .c_te {
        background-color: rgb(220, 220, 220);
        border-radius: 7px;
        padding: 5px 15px;
        word-wrap: break-word;
    }
</style>

<body>
    <?php
    echo br(5);
    echo "<a class='m-3' href=\"javascript:history.go(-1)\"><svg xmlns= 'http://www.w3.org/2000/svg' width='35' height='35' fill='currentColor' class='bi bi-arrow-left-circle' viewBox='0 0 16 16'>
      <path fill-rule='evenodd' d='M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z' />
  </svg></a>";
    ?>
    <h1>View News</h1>
    <center>
            <div class="mb-3 c_a">
                <label for="exampleFormNews" class="form-label">หัวข้อข่าว</label>
                <div class="c_t">
                    <?= $news->Head; ?>
                </div>
            </div>

            <div class="mb-3 c_a">
                <label for="exampleFormDate" class="form-label">เวลา</label>
                <div class="c_t">
                    <?= $news->Date; ?>
                </div>
            </div>

            <div class="mb-3 c_a">
                <label for="exampleFormInfo" class="form-label">เนื้อหาข่าว</label>
                <div class="c_te">
                    <?= $news->Info; ?>
                </div>
            </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>