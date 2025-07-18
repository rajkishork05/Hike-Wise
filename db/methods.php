<?php
// these are the functions to insert into the tables

// generate random 12 digit id
function generateRandomID($length = 12) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $randomID = '';
    $maxIndex = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $randomID .= $characters[random_int(0, $maxIndex)];
    }

    return $randomID;
}

// for users
function insertUser($conn, $id, $name, $password, $email, $contactNumber) {
    $sql = "INSERT INTO users (id, name, password, email, contactNumber) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $id, $name, $password, $email, $contactNumber);
    if ($stmt->execute()) {
        echo "User added successfully.\n";
    } else {
        echo "Error: " . $stmt->error . "\n";
    }
    $stmt->close();
}

// for guide 
function insertGuide($conn, $id, $name, $email, $password, $contactNumber, $image) {
    $sql = "INSERT INTO guide (id, name, email, password,  contactNumber, image) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $id, $name, $email, $password, $contactNumber, $image);
    if ($stmt->execute()) {
        echo "Guide added successfully.\n";
    } else {
        echo "Error: " . $stmt->error . "\n";
    }
    $stmt->close();
}

// for trek
function insertTrek($conn, $id, $name, $from, $to, $km, $day, $night, $image) {
    $sql = "INSERT INTO trek (id, name, `from`, `to`, `km`, `day`, `night`, `image`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $id, $name, $from, $to, $km, $day, $night, $image);

    if ($stmt->execute()) {
        echo "Trek added successfully.\n";
    } else {
        echo "Error: " . $stmt->error . "\n";
    }

    $stmt->close();
}

//for guide trek
function insertGuideTrek($conn, $id, $guide_id, $trek_id) {
    $sql = "INSERT INTO guide_trek (id, guide_id, trek_id) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $id, $guide_id, $trek_id);
    if ($stmt->execute()) {
        echo "Guide-Trek relation added successfully.\n";
    } else {
        echo "Error: " . $stmt->error . "\n";
    }
    $stmt->close();
}

//for booking
function insertBooking($conn, $id, $name, $email, $date, $people, $guide, $trek) {
    $sql = "INSERT INTO booking (id, name, email, date, people, trek_id, guide_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $id, $name, $email, $date, $people, $guide, $trek);
    if ($stmt->execute()) {
    } else {
        echo "Error: " . $stmt->error . "\n";
    }
    $stmt->close();
}

?>