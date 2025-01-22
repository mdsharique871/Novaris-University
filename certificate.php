<?php
// This script validates the application number and returns the corresponding certificate details.
// For simplicity, we're using hardcoded data. In a real application, data would be fetched from a database.

if (isset($_POST['applicationNumber'])) {
    $applicationNumber = $_POST['applicationNumber'];

    // Example data (in reality, this would be fetched from the database)
    $users = [
        '12345' => ['name' => 'John Doe', 'course' => 'PhD', 'year' => '2023'],
        '67890' => ['name' => 'Jane Smith', 'course' => 'Data Science', 'year' => '2023']
    ];

    if (isset($users[$applicationNumber])) {
        $user = $users[$applicationNumber];
        echo json_encode(['status' => 'success', 'name' => $user['name'], 'course' => $user['course'], 'year' => $user['year']]);
    } else {
        echo json_encode(['status' => 'error']);
    }
}
?>
