<?php
include "./Phone.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php

$phone = new Phone;
$phone->manufacturer = "Sony";
$phone->year = 2020;
$phone->model = false;


// $phone = new Phone("Sony", "2020", true);
$phone1 = new Phone("IPhone",  false, "2020");
$phone2 = new Phone("Nokia",  true,"2020");
$phone3 = new Phone("Samsung",  false, "2020");
$phones = [$phone,$phone1,$phone2, $phone3];



?>



<table class="table">
    <thead>
        <tr>
            <?php
                    foreach ($phones[0] as $key => $value) {
                        echo "<th>".$key."</th>";
                    }

            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($phones as $phone) {
                echo "<tr>";
                    echo "<td>". $phone->manufacturer."</td>";
                    echo "<td>". ( ($phone->model) ? "naujas" : "devetas" )."</td>";
                    echo "<td>".$phone->year."</td>";
                  echo "</tr>";
            }

        ?>
    </tbody>
</table>


</body>
</html>