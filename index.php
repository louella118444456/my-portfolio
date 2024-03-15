<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>LOADOUT</title>
</head>

<body>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Loadout Number</th>
                    <th scope="col">Soldier</th>
                    <th scope="col">Primary Weapon</th>
                    <th scope="col">Secondary Weapon</th>
                    <th scope="col">Opertor Skill</th>
                    <th scope="col">Lethal</th>
                    <th scope="col">Tactical</th>
                    <th scope="col">Scorestreak</th>
                    <th scope="col">Perk</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $hostName = "localhost";
                $dbUser = "root";
                $dbPass = "";
                $dbName = "loadout";
                $con = mysqli_connect($hostName, $dbUser, $dbPass, $dbName);
                if (!$con) {
                    die ("connection is not successful");
                }
                $sql = "SELECT * FROM loadout";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    $loadoutnum = $row["loadout number"];
                    $soldier = $row["soldier"];
                    $primaryweapon = $row["primary weapon"];
                    $secondaryweapon = $row["secondary weapon"];
                    $operatorskill = $row["operator skill"];
                    $lethal = $row["lethal"];
                    $tactical = $row["tactical"];
                    $scorestreaks = $row["scorestreaks"];
                    $perk = $row["perk"];
                    echo "<tr>
        <th scope='row'>$loadoutnum</th>
        <td>$soldier</td>
        <td>$primaryweapon</td>
        <td>$secondaryweapon</td>
        <td>$operatorskill</td>
        <td>$lethal</td>
        <td>$tactical</td>
        <td>$scorestreaks</td>
        <td>$perk</td>
      </tr> ";
                }
                ?>
            </tbody>
    </div>
</body>

</html>