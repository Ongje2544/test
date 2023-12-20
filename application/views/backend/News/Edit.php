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
</style>

<body>
    <?php
    echo br(5);
    echo "<a class='m-3' href=\"javascript:history.go(-1)\"><svg xmlns= 'http://www.w3.org/2000/svg' width='35' height='35' fill='currentColor' class='bi bi-arrow-left-circle' viewBox='0 0 16 16'>
      <path fill-rule='evenodd' d='M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z' />
  </svg></a>";
    ?>
    <h1>Edit News</h1>
    <center>
        <form method="post" action="<?= site_url('News/update/')?>">
        <input type="hidden" name="Id" value="<?= $news_item->Id; ?>">
            <div class="mb-3 c_a">
                <label for="exampleFormControlInput1" class="form-label">หัวข้อข่าว</label>
                <input type="text" name="Head" class="form-control news" id="exampleFormControlInput1" placeholder="ใส่หัวข้อข่าว" value="<?= $news_item->Head; ?>" required>
            </div>
            <div class="mb-3 c_a">
                <label for="exampleFormControlTextarea1" class="form-label">เนื้อหาข่าว</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Info" required><?= $news_item->Info; ?></textarea>
            </div>
            <input type="submit" value="Update" class="btn btn-warning">
        </form>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>