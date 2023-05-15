<?php

// require_once means the rest of the code will run only if the specified file has been loaded. It will also not load the file again if it has been loaded before
require_once(get_path("app/classes/carousel-cell.php"));

// Declares a new object using the carousel cell class template. Properties are written as an associative array for more versatility and easier integration of future objects

// An associative array is a collection of key value pairs with the key usually describing the value's purpose.
$snowglobe = new cell([
    "heading" => "Be sure not to miss out on this Year’s 2023 Snow Globe Design",
    "subHeading" => "Winter City Lights Annual Snowglobe Design",
    "copy" => "Each year Winter City lights is run, we offer an opportunity to create a unique snow globe specific to that year. Don’t miss out on this opportunity to get this beautiful design for a limited time, Once this is gone it will never be featured again so get it while you can!",
    "image" => "snowglobeDesign-winter-city-lights.jpg",
    "placeholder" => "loading-snowglobeDesign-winter-city-lights.jpg",
    "imageAlt" => "2023 Winter City Lights snowglobe design"
]);

$multicultral = new cell([
    "heading" => "Experience Vancouver's Multicultural Winter Festival",
    "subHeading" => "Plenty of vendors showing off Vancouver's diverse winter food and traditions",
    "copy" => "At our winter festival, we take pride in highlighting the unique contributions of Vancouver's multicultural communities, fostering greater understanding and appreciation of the city's diverse heritage. Here you can celebrate the rich diversity of Vancouver's communities and experience a range of unique winter traditions, customs, and artistic expressions from around the world.",
    "image" => "multicultural-winter-city-lights.jpg",
    "placeholder" => "loading-multicultural-winter-city-lights.jpg",
    "imageAlt" => "Two women enjoying a hot drink by a vendor stand"
]);

$events = new cell([
    "heading" => "Make new winter memories this year in Vancouver",
    "subHeading" => "Create unforgettable winter memories this year",
    "copy" => "Experience the wonder of Vancouver's Multicultural Winter Festival with ice sculptures, a multicultural vendor area, and stunning light displays. And be sure not to miss our unforgettable fireworks show!",
    "image" => "events-winter-city-lights.jpg",
    "placeholder" => "loading-events-winter-city-lights.jpg",
    "imageAlt" => "A spinning carousel"
    
]);

$merchandise = new cell([
    
    "heading" => "Grab something to remember the fun times",
    "subHeading" => "A wide range of merch celebrating Vancouver's diverse winter customs",
    "copy" => "Discover unique multicultural merchandise at our winter festival, from winter-themed handmade crafts to stylish clothing and accessories, showcasing the talents and traditions of Vancouver's diverse communities. Take home a piece of the city's culture and treasure it as a reminder of your unforgettable winter festival experience.",
    "image" => "merchandise-winter-city-lights.jpg",
    "placeholder" => "loading-merchandise-winter-city-lights.jpg",
    "imageAlt" => "Merchandise box propped up against a tree"
]);


// All objects are added into an array to be implemented into a loop later on
$cells = [$snowglobe,$multicultral,$events,$merchandise];