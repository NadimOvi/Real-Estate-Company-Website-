<?php
// Inserting data manually
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "real_estate";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

for($i=1; $i<=10; $i++) {

    $sql = "INSERT INTO real_estate (name, monthly_charges, images, address, access, floor_space, utility, description)
            VALUES ('nadim', '18000', '$i.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Road no: 01,House no: 56,Prosanti R/A,Cornelhat,Chittagong',
           'Access info','1600' ,'Utility info', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    }
}

mysqli_close($conn);
?>