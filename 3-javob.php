<?php

class Book
{
  public $books;

  public function __construct($books)
  {
    $this->books = $books;

    foreach ($books as $book) {
      echo "
          <h3>{$book['name']}</h3>
          <p>{$book['author']} | {$book['year']}</p>
        ";
    }
  }
}

$data = array(
  0 => array(
    'name' => 'Shaytanat',
    'author' => 'Toxir Malik',
    'year' => 2006
  ),
  1 => array(
    'name' => 'Zulmatdagi saltanat',
    'author' => 'Abdurahimov O‘tkir',
    'year' => 2019
  ),
  2 => array(
    'name' => 'Двойник',
    'author' => 'Фёдор Достоевский',
    'year' => 1846,
  ),
);

$book = new Book($data);
