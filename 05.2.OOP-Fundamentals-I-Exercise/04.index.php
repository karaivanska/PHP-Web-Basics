<?php
/*
You are working in a library. And you are pissed off by writing descriptions for books by hand,
so you wanted to use the computer to make them faster. So the task is simple. Your program should
have two classes – one for the ordinary books – Book, and another for the special ones –
GoldenEditionBook. So let’s get started! We need two classes:
•	Book - represents a book that holds title, author and price. A book should offer information
about itself in the format shown in the output below.
•	GoldenEditionBook - represents a special book holds the same properties as any Book, but its
price is always 30% higher.

 */

include '04.Book.php';
include '04.GoldenEditionBook.php';
$e = '';

try {
    $author_arr = explode(' ', fgets(STDIN));
    $first_name = $author_arr[0];
    $last_name = $author_arr[1];

    $title = trim(fgets(STDIN));
    $price = floatval(fgets(STDIN));
    $bookType = trim(fgets(STDIN));

    if ($bookType == 'STANDARD') {
        $first_book = new Book($title, $last_name, $price);

    } elseif ($bookType == 'GOLD') {

        $first_book = new GoldenEditionBook($title, $last_name, $price);
    }

    echo 'OK' . PHP_EOL;
    echo $first_book->getPrice();

} catch (Exception $e) {
    echo $e->getMessage();
}



