<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebLb3</title>
</head>
<body>
  <h1> Лабораторна робота №3 Омельченко </h1>
    <form action="get_1.php" method="get">
    <label for="wardName">Медсестра:</label>
        <select name="nurseName" id="nurseName">
            <?php
            include('connect.php');

            $sqlSelect = "SELECT name FROM nurse";
            $dbh = new PDO($dsn, $user, $pass);

            foreach($dbh->query($sqlSelect) as $row)
            {
                echo "<option value='$row[0]'>$row[0]</option>";
            }

            $dbh = null;
            ?>
        </select>
        <input type="submit" value="Почати пошук">
    </form>

    <form action="get_2.php" method="get">
        <label for="wardName">Палата:</label>
        <select name="wardName" id="wardName">
            <?php
            include('connect.php');
            $sqlSelect = "SELECT name FROM ward";
            foreach($dbh->query($sqlSelect) as $row)
            {
                echo "<option value='$row[0]'>$row[0]</option>";
            }
            $dbh = null;
            ?>
        </select>
        <input type="submit" value="Почати пошук">
    </form>

    <form action="get_3.php" method="get">
        <label for="shift">Зміна:</label>
        <select name="shift" id="shift">
            <option value="First">First</option>
            <option value="Second">Second</option>
            <option value="Third">Third</option>
        </select>
        <input type="submit" value="Почати пошук">
    </form>
</body>
</html>
