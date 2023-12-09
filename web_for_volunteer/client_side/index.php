<?php
require_once "functions.php";




//check whether the button has been click or not
if(isset($_POST['submit'])){

    
    //check the progress
    if (tambahVolunteer($_POST)>0){
        echo "
            <script>
            alert('data succesfully added');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo " <script>
        alert('data failed to add');
        document.location.href = 'index.php';
        </script>
    ";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body {
            padding: 20px; /* Add some padding to the body */
        }
        form {
            max-width: 600px; /* Set a maximum width for the form */
            margin: 0 auto; /* Center the form on the page */
        }
        h1{
            text-align: center;
        }
        a{
            text-align: center;
        }
    </style>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h1 class="mt-4">Welcome to my beginner program</h1>

    <form action="" method="post">
        <div class="form-group">
            <label for="name">Name :</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Nationality">Nationality :</label>
            <input type="text" name="nationality" id="Nationality" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="volunteering_history">Please tell us about your volunteering history (ignore this if you have none) :</label>
            <input type="text" name="volunteering_history" id="volunteering_history" class="form-control">
        </div>
        <div class="form-group">
            <label for="volunteering_start">When will you be ready to volunteer? (please tell us the date and month)</label>
            <input type="text" name="volunteering_start" id="volunteering_start" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="volunteering_period">For how long will you do the volunteering? (please tell us the date and month)</label>
            <input type="text" name="volunteering_period" id="volunteering_period" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Post</button>
    </form>

    <a href="preview.php" class="mt-3 d-block">Preview your submitted answers</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>