<?php



class bookshelf
{
    public $books = array(), $magazines = array(), $notebooks = array(), $capacity;
    private $owner;

    function __construct($capacity)
    {
        $this->capacity = $capacity;
    }

    function store($type, $title, $author = null)
    {
        if ($type == 'book') {

            $this->books[str_replace(' ', '-', strtolower($title))] = array("title" => $title, "author" => $author);
        } else if ($type == 'magazine') {

            $this->magazines[str_replace(' ', '-', strtolower($title))] = array("title" => $title);
        } else if ($type == 'notebook') {

            $this->notebooks[str_replace(' ', '-', strtolower($title))] = array("title" => $title, "owner" => $author);
        }
    }

    function retrieve($type, $title, $page_number = null)
    {
        // I have assumed the books are in pdf format and I am using pdf2text library to extract specific part.
        // for the simplicity I am just printing the name and details of all items here.
        // include('class.pdf2text.php');
        // $pdf = new PDF2Text('sample.pdf');
        // $a = new PDF2Text();
        // $a->setFilename('sample.pdf');
        // $a->decodePDF();
        // echo $a->output();

        if ($type == 'book') {

            echo (array_search($title, array_column($this->books, 'title', 'title'))) . " Authored by " . (array_search($title, array_column($this->books, 'title', 'author'))) . " book is in the bookshelf.";
        } else if ($type == 'magazine') {

            echo (array_search($title, array_column($this->magazines, 'title', 'title'))) . " Magzine is in the bookshelf.";
        } else if ($type == 'notebook') {

            echo (array_search($title, array_column($this->notebooks, 'title', 'title'))) . " Owned by " . (array_search($title, array_column($this->notebooks, 'title', 'owner'))) . " notebook is in the bookshelf.";
        }
    }

    function count()
    {
        echo "The bookshelf cuurently have " . count($this->books) . " books, " . count($this->magazines) . " magazines, and " . count($this->notebooks) . " notebooks. \n";
    }

    function capacity_left()
    {
        echo "The bookshelf can store " . $this->capacity - count($this->books) + count($this->magazines) + count($this->notebooks) . " more items. \n";
    }

    function total_capacity()
    {
        echo "\nThe bookshelf total capacity is " . $this->capacity . ". \n";
    }
}

$dominic = new bookshelf(4);

echo $dominic->total_capacity() . "\n";

echo $dominic->count() . "\n";

$dominic->store('book', 'What everbody is saying', 'Joe Navarro');
$dominic->store('magazine', 'time');
$dominic->store('notebook', 'C++ Notes', 'Dominic');

echo $dominic->capacity_left() . "\n";

echo $dominic->retrieve('book', "What everbody is saying") . "\n";
echo $dominic->retrieve('notebook', "C++ Notes") . "\n";
