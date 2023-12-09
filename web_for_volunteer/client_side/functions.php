<?php
$conn =mysqli_connect("localhost","root","","volunteer");


function query($query){
    global $conn;
    $result =mysqli_query($conn, $query);
    
    //make an empty array
    $rows = [];

    //loop the $result

    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambahVolunteer($data) {
    global $conn;
  
    $name = $data['name'];
    $nationality = $data['nationality'];
    $volunteering_history = $data['volunteering_history'];
    $volunteering_start = $data['volunteering_start'];
    $volunteering_period = $data['volunteering_period'];

//make the insert syntax
$query = "INSERT INTO volunteer_data VALUES 
            ('','$name','$nationality','$volunteering_history','$volunteering_start','$volunteering_period')";

mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}


function cariVolunteer($keyword){
    $query = "SELECT * FROM volunteer_data
              WHERE
              name like '%$keyword%'";
        return query($query);
  }

?>