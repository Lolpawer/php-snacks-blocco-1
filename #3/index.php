<?php

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    $keys = array_keys($posts);

    for ($i = 0; $i < count($posts); $i++) {
        $key = $keys[$i];
        $element = $posts[$key];

        echo "<h1> $key </h1>";

        echo "<div>";

        for ($x = 0; $x < count($element); $x++) {

            $post = $element[$x];

            echo "<h3>" . $post["title"] . "</h3>";
            echo "<p>" . $post["text"] . "</p>";
            echo "<p>" . $post["author"] . "</p>";

        }

        echo "</div>";

    };
    
?>