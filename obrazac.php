<?php
function new_book(array $book,$file_path ): void {
$books =json_decode(file_get_contents("$file_path"), $associative = false);
$books[] = $book;
 file_put_contents($file_path, json_encode($books, JSON_PRETTY_PRINT));
}
 new_book($_POST, "knjige.json");
 header("Location: Knjige.php");
 exit;
