<?php
function getRow($conn, $tableName, $columnName, $value) {
    // Prepare the SQL query
    $sql = "SELECT * FROM $tableName WHERE $columnName = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Preparation failed: " . $conn->error);
    }

    // Bind the parameter
    $stmt->bind_param("s", $value);

    // Execute the query
    if ($stmt->execute()) {
        // Get the result
        $result = $stmt->get_result();

        // Check if a row was found
        if ($result->num_rows > 0) {
            return $result->fetch_assoc(); // Return the row as an associative array
        } else {
            return null; // No row found
        }
    } else {
        echo "Error: " . $stmt->error . "\n";
        return null;
    }

    $stmt->close();
}

function getAll($conn, $tableName){
    // Prepare the SQL query
    $sql = "SELECT * FROM $tableName";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Preparation failed: " . $conn->error);
    }

    // Execute the query
    if ($stmt->execute()) {
        // Get the result
        $result = $stmt->get_result();

        // Fetch all rows
        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows; // Return all rows as an array
    } else {
        echo "Error: " . $stmt->error . "\n";
        return [];
    }

    $stmt->close();
}

?>
