<?php
// This script would fetch results based on the course and year selected.
// For simplicity, this example uses static data. You can replace it with database queries.

$course = $_POST['course'];
$year = $_POST['year'];

// Example of fetched results
$results = [
    'phd' => [
        '2022' => ['A+', 'B', 'A'],
        '2023' => ['A', 'A', 'A-'],
    ],
    'data_science' => [
        '2022' => ['A', 'B+', 'A'],
        '2023' => ['B', 'B+', 'A-'],
    ]
];

// Fetch results for the selected course and year
if (isset($results[$course][$year])) {
    $course_results = $results[$course][$year];
    // Display the results (this can be formatted as a table or list)
    echo '<h3>Your Results for ' . ucfirst($course) . ' - ' . $year . '</h3>';
    echo '<ul>';
    foreach ($course_results as $result) {
        echo '<li>' . $result . '</li>';
    }
    echo '</ul>';
} else {
    echo 'No results found.';
}
?>
