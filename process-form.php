<?php
session_start();

// Validate form inputs
if ( empty( $_POST['name'] ) || empty( $_POST['email'] ) || empty( $_POST['password'] ) ) {
    die( 'Please fill out all fields' );
}

if ( !filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ) {
    die( 'Invalid email format' );
}

// Save profile picture to server
$uploads_dir = 'uploads/';
$unique_filename = uniqid() . '_' . basename( $_FILES['profile-picture']['name'] );

if ( move_uploaded_file( $_FILES['profile-picture']['tmp_name'], $uploads_dir . $unique_filename ) ) {
    echo 'Profile picture uploaded successfully';
} else {
    die( 'Error uploading profile picture' );
}

// Save user details to CSV file
$data = [$_POST['name'], $_POST['email'], $unique_filename, date( 'Y-m-d H:i:s' )];
$fp = fopen( 'users.csv', 'a' );
fputcsv( $fp, $data );
fclose( $fp );

// Set cookie with user's name
setcookie( 'user_name', $_POST['name'], time() + 3600 );

header( 'Location: users.php' );
