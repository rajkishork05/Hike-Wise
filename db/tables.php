<!-- this is the section for users -->
<?php

$sql_user = "CREATE TABLE IF NOT EXISTS users (
    id VARCHAR(255) UNIQUE NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    contactNumber VARCHAR(255) NOT NULL
)";

// this is the section for guide 
$sql_guide = "CREATE TABLE IF NOT EXISTS guide (
    id VARCHAR(255) UNIQUE NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    contactNumber VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    image TEXT NOT NULL
)";

// this is the section for trek
$sql_trek = "CREATE TABLE IF NOT EXISTS trek (
    `id` VARCHAR(255) UNIQUE NOT NULL PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `from` VARCHAR(255) NOT NULL,
    `to` VARCHAR(255) NOT NULL,
    `km` VARCHAR(255) NOT NULL,
    `day` VARCHAR(255) NOT NULL,
    `night` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255)
)";

// this is the section for guide and trek they do
$sql_guide_trek = "CREATE TABLE IF NOT EXISTS guide_trek (
    id VARCHAR(255) UNIQUE NOT NULL PRIMARY KEY,
    guide_id VARCHAR(255) NOT NULL,
    trek_id VARCHAR(255) NOT NULL
    
)";

// this is the section for booking 
$sql_booking = "CREATE TABLE IF NOT EXISTS booking (
    id VARCHAR(255) UNIQUE NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    date VARCHAR(255) NOT NULL,
    people VARCHAR(255) NOT NULL,
    trek_id VARCHAR(255) NOT NULL,
    guide_id VARCHAR(255) NOT NULL
    
)";

$conn->query($sql_user);
$conn->query($sql_guide);
$conn->query($sql_trek);
$conn->query($sql_guide_trek); 
$conn->query($sql_booking);


?>