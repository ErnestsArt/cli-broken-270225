<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$books = [
    1 => [
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald'
    ],
    2 => [
        'title' => '1984',
        'author' => 'George Orwell'
    ],
    3 => [
        'title' => 'Pride and Prejudice',
        'author' => 'Jane Austen'
    ]
];
foreach ($books as $key => $book) {
    echo "ID: ". $key .  " // Title: ". $book['title'] . " // Author: " . $book['author']. "\n\n";
}
    echo "<br>";
    echo 'forma pieteikta ar: <br>'. 'vārdu: '. htmlspecialchars($_POST["name"]);
    echo '<br> emailu: '. htmlspecialchars($_POST["email"]);
    echo '<br> līmeni: '. htmlspecialchars($_POST["level"]);
    
?>
    
    <br>
    <a href="contact.php">Next Page</a>
</body>
</html>