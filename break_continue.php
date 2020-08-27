<?php

$paises = array(
    'México', 'España', 'Colombia',
    'Argentina', 'Costa Rica', 'Ecuador'
);

// foreach($paises as $pais)
// {
//     if($pais == 'Argentina')
//     {
//     break;
//     }
//     echo $pais . '<br />';
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paises latinoamericanos</title>
</head>

<body>
    <ul>
    <?php

    foreach($paises as $pais)
    {
        if($pais == 'España')
        {
            continue;
        }

        echo '<li>' . $pais . '</li>';
    }

    ?>
    </ul>
</body>
</html>