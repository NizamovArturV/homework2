<?php

$result3 = [
    "authors" => [
        "email1@mail.ru" => [
            "fullName" => "Автор 1",
            "email" => "email1@mail.ru",
            "birthday" => "01.01.1977"
        ],
        "email2@mail.ru" => [
            "fullName" => "Автор 2",
            "email" => "email2@mail.ru",
            "birthday" => "02.02.1977"
        ],
    ],
    "books" => [
        [
            "bookName" => "Название 1",
            "email" => "email1@mail.ru"
        ],
        [
            "bookName" => "Название 2",
            "email" => "email2@mail.ru"
        ],
    ],
];

var_dump ($result3);

