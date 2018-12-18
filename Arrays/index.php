<?php
$kasutajad = array(
array(
    'alice',
    'Alice',
    'Liddell',
    'female'
),
    array(
        'bob',
        'Bob',
        'Builder',
        'male'
    )
);

echo '<table>';
for ($i = 0; $i < count($kasutajad); $i++){
    if($kasutajad[$i][3] == 'female'){
        echo '<th>'.$kasutajad[$i][3].'</th>';
    } else {

    }
    foreach ($kasutajad[$i] as $info) {
        echo $info.'<br>';
    }
    echo '<hr>';
}