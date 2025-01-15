<?php
// Include the database connection file
include 'Dcon.php';

$dob = $_POST['dob']; // Make sure to validate and sanitize this input

$conn = openDatabaseConnection(); // Open database connection
echo "<span style='color: rgb(46, 8, 8);;'>မွေးနေ့       :သောကြာ<br><br>";

for ($i = 0; $i < 4; $i++) {
    // Select random bfirst_name which is not null
    $sql1 = "SELECT `bfirst_name` FROM `fri_boy` WHERE `bfirst_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result1 = $conn->query($sql1);

    // Select random bmiddle_double
    $sql2 = "SELECT `bmiddle_double` FROM `fri_boy` WHERE `bmiddle_double` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result2 = $conn->query($sql2);

    // Select random blast_name
    $sql3 = "SELECT `blast_name` FROM `fri_boy` WHERE `blast_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result3 = $conn->query($sql3);

    $bfirst_name = '';
    $bmiddle_double = '';
    $blast_name = '';

    if ($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        $bfirst_name = $row1['bfirst_name'];
    } else {
        echo "No non-null first names found<br>";
    }

    if ($result2->num_rows > 0) {
        $row2 = $result2->fetch_assoc();
        $bmiddle_double = $row2['bmiddle_double'];
    } else {
        echo "No middle double names found<br>";
    }

    if ($result3->num_rows > 0) {
        $row3 = $result3->fetch_assoc();
        $blast_name = $row3['blast_name'];
    } else {
        echo "No last names found<br>";
    }

    // Output random combination of bfirst_name, bmiddle_double, and blast_name
    if (!empty($bfirst_name) && !empty($bmiddle_double) && !empty($blast_name)) {
        $combined_name = 'မောင်' . $bfirst_name . $bmiddle_double . $blast_name;
        echo "$combined_name<br><br>";
    } else {
        echo "One or more names missing for combination.<br>";
    }
}

for ($i = 0; $i < 2; $i++) {
    // Select random bfirst_double
    $sql2 = "SELECT `bfirst_double` FROM `fri_boy` WHERE `bfirst_double` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result2 = $conn->query($sql2);

    // Select random blast_name
    $sql3 = "SELECT `blast_name` FROM `fri_boy` WHERE `blast_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result3 = $conn->query($sql3);

    $bfirst_double = '';
    $blast_name = '';

    if ($result2->num_rows > 0) {
        $row2 = $result2->fetch_assoc();
        $bfirst_double = $row2['bfirst_double'];
    } else {
        echo "No first double names found<br>";
    }

    if ($result3->num_rows > 0) {
        $row3 = $result3->fetch_assoc();
        $blast_name = $row3['blast_name'];
    } else {
        echo "No last names found<br>";
    }

    // Output random combination of bfirst_double and blast_name
    if (!empty($bfirst_double) && !empty($blast_name)) {
        $combined_name = 'မောင်' . $bfirst_double . $blast_name;
        echo "$combined_name<br><br>";
    } else {
        echo "One or more names missing for combination.<br>";
    }
}
//double name 
for ($i = 0; $i < 1; $i++) {
    // Select random bfirst_double
    $sql2 = "SELECT `bfirst_double` FROM `fri_boy` WHERE `bfirst_double` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result2 = $conn->query($sql2);

 

    $bfirst_double = '';
   

    if ($result2->num_rows > 0) {
        $row2 = $result2->fetch_assoc();
        $bfirst_double = $row2['bfirst_double'];
    } else {
        echo "No first double names found<br>";
    }


    // Output random combination of bfirst_double and blast_name
    if (!empty($bfirst_double) && !empty($blast_name)) {
        $combined_name = 'မောင်' . $bfirst_double ;
        echo "$combined_name<br><br>";
    } else {
        echo "One or more names missing for combination.<br>";
    }
}
//double name
for ($i = 0; $i < 1; $i++) {
    // Select random bfirst_name
    $sql1 = "SELECT `bfirst_name` FROM `fri_boy` WHERE `bfirst_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result1 = $conn->query($sql1);

    $bfirst_name = '';
    $blast_name = '';

    if ($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        $bfirst_name = $row1['bfirst_name'];
    } else {
        echo "No non-null first names found<br>";
    }

    // Select random blast_name that is not equal to the selected bfirst_name and does not repeat in the output
    if (!empty($bfirst_name)) {
        $sql3 = "SELECT `blast_name` FROM `fri_boy` WHERE `blast_name` IS NOT NULL 
                 AND `blast_name` != '$bfirst_name' 
                 ORDER BY RAND() LIMIT 1";
        $result3 = $conn->query($sql3);

        if ($result3->num_rows > 0) {
            $row3 = $result3->fetch_assoc();
            $blast_name = $row3['blast_name'];
        } else {
            echo "No last names found or all last names are duplicates of the first name.<br>";
        }
    }

    // Output random combination of bfirst_name and unique blast_name
    if (!empty($bfirst_name) && !empty($blast_name) && $bfirst_name !== $blast_name) {
        $combined_name = 'မောင်' . $bfirst_name . $blast_name;
        echo "$combined_name<br><br>";
    } else {
        echo "One or more names missing for combination or duplicate name found.<br>";
    }
}
for ($i = 0; $i < 1; $i++) {
    // Select random bfirst_name
    $sql1 = "SELECT `bfirst_name` FROM `fri_boy` WHERE `bfirst_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result1 = $conn->query($sql1);

    // Select random blast_name
    $sql3 = "SELECT `blast_name` FROM `fri_boy` WHERE `blast_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result3 = $conn->query($sql3);

    $bfirst_name = '';
    $blast_name = '';

    if ($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        $bfirst_name = $row1['bfirst_name'];
    } else {
        echo "No non-null first names found<br>";
    }

    if ($result3->num_rows > 0) {
        $row3 = $result3->fetch_assoc();
        $blast_name = $row3['blast_name'];
    } else {
        echo "No last names found<br>";
    }

    // Output random combination of bfirst_name and blast_name
    if (!empty($bfirst_name) && !empty($blast_name)) {
        $combined_name = 'မောင်' . $bfirst_name . $bfirst_name . $blast_name;
        echo "$combined_name<br><br>";
    } else {
        echo "One or more names missing for combination.<br>";
    }
}

for ($i = 0; $i < 1; $i++) {
    // Select random bfirst_name
    $sql1 = "SELECT `bfirst_name` FROM `fri_boy` WHERE `bfirst_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result1 = $conn->query($sql1);

    $bfirst_name = '';
    $blast_name = '';

    if ($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        $bfirst_name = $row1['bfirst_name'];
    } else {
        echo "No non-null first names found<br>";
    }

    // Select random blast_name that is not equal to the selected bfirst_name and does not repeat in the output
    if (!empty($bfirst_name)) {
        $sql3 = "SELECT `blast_name` FROM `fri_boy` WHERE `blast_name` IS NOT NULL 
                 AND `blast_name` != '$bfirst_name' 
                 ORDER BY RAND() LIMIT 1";
        $result3 = $conn->query($sql3);

        if ($result3->num_rows > 0) {
            $row3 = $result3->fetch_assoc();
            $blast_name = $row3['blast_name'];
        } else {
            echo "No last names found or all last names are duplicates of the first name.<br>";
        }
    }

    // Output random combination of bfirst_name and unique blast_name
    if (!empty($bfirst_name) && !empty($blast_name) && $bfirst_name !== $blast_name) {
        $combined_name = 'မောင်' . $bfirst_name . $blast_name.$blast_name;
        echo "$combined_name<br><br>";
    } else {
        echo "One or more names missing for combination or duplicate name found.<br>";
    }
}
closeDatabaseConnection($conn); // Close database connection
?>