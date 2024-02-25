<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('sqlite_database/schooldb');
    }
}
$db = new MyDB();