<?php
$records = [
   [ 
    'title' => 'The Queen in dead',
    'author' => '1986',
    'year' => 'The Smiths'
    ],
    [ 
        'title' => 'Back to Black',
    'author' => 'Amy Winehouse',
    'year' => '2006'
    ],
    [ 
        'title' => 'Norman Fucking Rockwell',
    'author' => 'Lana del Rey',
    'year' => '2019'
    ],
];
header ('Content-Type: application/json');

echo json_encode($records);
?>