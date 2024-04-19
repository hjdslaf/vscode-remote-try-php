<!DOCTYPE html>
<html>
<head>
    <title>Hiển thị số từ 1 đến 200</title>
    <style>
        .red {
            color: red;
            font-weight: bold;
        }
        .blue {
            color: blue;
            font-style: italic;
        }
    </style>
</head>
<body>
    <?php
    for ($i = 1; $i <= 200; $i++) {
        if ($i % 2 == 0) {
            echo '<span class="red">' . $i . '</span> ';
        } else {
            echo '<span class="blue">' . $i . '</span> ';
        }
    }
    ?>
    
</body>
</html>
