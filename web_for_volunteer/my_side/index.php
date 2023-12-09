<?php

require_once "../client_side/functions.php";

$volunteer = query("SELECT * FROM volunteer_data");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    
<h1>Daftar Volunteer</h1>

        <table border="1" cellpadding = '10' cellspacing = '0'>
        <tr>
            <th> Number</th>
            <th> Name</th>
            <th> Nationality</th>
            <th> Volunteering Experiences</th>
            <th> Arrival Date</th>
            <th> Volunteering Period</th>
        </tr>
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
        </table>

</body>
</html>
