<?php

function displayTable($file) {
    // Get the table header
    $headers = fgetcsv($file, 1000, ",");
    
    // Table start
    echo "<table border=";">\n";
    echo "<thead><tr>";
    foreach ($headers as $header) {

        // Displaying table column headings
        echo "<th>$header</th>";
    }
    echo "</tr></thead>";
    echo "<tbody>";
    
    // Reading the rest of the lines in the file
    while (($row = fgetcsv($file, 1000, ",")) !== false) {
        echo "<tr>";
        foreach ($row as $cell) {
            // Displaying table cell values
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    // Finishing the HTML table
    echo "</tbody>";
    echo "</table>";
    fclose($file);
}

if ($_FILES['csv_file']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['csv_file']['tmp_name'])) {
        $file = fopen($_FILES['csv_file']['tmp_name'], 'r'); 
    }
    else {
        $file = fopen("file.csv", "r");
    }
displayTable($file);
