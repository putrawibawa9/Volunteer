<?php
// cari volunteer

require_once "functions.php";

$volunteer = [];
if(isset($_POST['cari'])){
    $volunteer = cariVolunteer($_POST['keyword']);
    $keyword = $_POST['keyword'];
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        /* Add any custom styles here */
        body {
            padding: 20px; /* Add some padding to the body */
        }
        .form {
            margin-bottom: 20px; /* Add some margin below the form */
        }
    </style>
</head>

<p class="lead">TO PREVIEW YOUR SUBMITTED ANSWERS, PLEASE WRITE YOUR NAME AGAIN</p>

<form action="" method="post" class="form">
    <div class="input-group">
        <input type="text" name="keyword" class="form-control" autofocus placeholder="Search your name" autocomplete="off">
        <div class="input-group-append">
            <button type="submit" name="cari" class="btn btn-primary">Search</button>
        </div>
    </div>
</form>

<h1 class="mt-4">Volunteer</h1>

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Nationality</th>
                <th>Volunteering Experiences</th>
                <th>Arrival Date</th>
                <th>Volunteering Period</th>
            </tr>
        </thead>
        <tbody>
            <!-- create the loop -->
            <?php foreach($volunteer as $row): ?>
                <tr>
                    <td><?= $row['number']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['nationality']; ?></td>
                    <td><?= $row['volunteering_history']; ?></td>
                    <td><?= $row['volunteering_start']; ?></td>
                    <td><?= $row['volunteering_period']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<p>Thank you</p>
<a href="index.php" class="btn btn-secondary">Back</a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>