<?php
$records = [
   [ 
    'title' => 'The Queen in dead',
    'author' => 'The Smiths',
    'year' => '1986',
    'img' => 'https://www.lindiceonline.com/wp-content/uploads/2016/06/smiths-queen-is-dead.jpg'
    ],
    [ 
        'title' => 'Back to Black',
    'author' => 'Amy Winehouse',
    'year' => '2006',
    'img' => 'https://www.evoluzionehifi.it/amplificatori/image/cache/catalog/Immagini_nuovo_sito/Giradischi_accessori/Vinili/71Y55FU5VGL._AC_SL1000_-1000x1000.jpg'
    ],
    [ 
        'title' => 'Norman Fucking Rockwell',
    'author' => 'Lana del Rey',
    'year' => '2019',
    'img' => 'https://media.pitchfork.com/photos/5d5ec71f8aeb9e0008ccf296/1:1/w_800,h_800,c_limit/LanaDelRey_NormalFuckingRockwell.jpg'
    ],
];
header ('Content-Type: application/json');

echo json_encode($records);
?>