<?php include "db.php"; //ket noi CSDL?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them sinh vien</title>
    <link rel="stylesheet" href="../css/styleadd.css">
</head>
<body>
    <h1></h1>
        <form action="update.php" method="POST">

        <?php // Nhap them id?>
        <label for="id">Id: </label>
        <input type="text" name="id" placeholder="Nhap ID" required><br>

        <?php // Nhap them ten ?>
        <label for="full_name">Full name: </label>
        <input type="text" name="full_name" placeholder="Nhap name" required><br>

        <?php //Nhap ngaythangnam sinh ?>
        <label for="dob">Dob: </label>
        <input type="date" name="dob" placeholder="Nhap dob" required><br>

        <?php //Them gioi tinh ?>
        <label for="gender">Gender: </label>
        <input type="radio" name = "gender" value = "0" required> Nu
        <input type="radio" name = "gender" value = "1" required> Nam <br>

        <?php //Nhap que quan ?>
        <label for="hometown">Home town: </label>
        <input type="text" name = "hometown" placeholder="Nhap que" required><br>

        <?php //Chon chuc vu ?>
        <label for="level_id">Level: </label>
        <select name="level_id">
            <option value="0">Tien si</option>
            <option value="1">Thac si</option>
            <option value="2">Ky su</option>
            <option value="3">Khac</option>
        </select><br>

        <?php //Chon nhom?>
        <label for="group_id">Group: </label>
        <select name="group_id">
            <option value="1">Nhom 1</option>
            <option value="2">Nhom 2</option>
            <option value="3">Nhom 3</option>
            <option value="4">Nhom 4</option>
            <option value="5">Nhom 5</option>
            <option value="6">Nhom 6</option>
            <option value="7">Nhom 7</option>
            <option value="8">Nhom 8</option>
            <option value="9">Nhom 9</option>
            
        </select><br>
        
        <button type="submit">Luu</button>
    </form>
    <a class="editql"href="index.php" > Quay lai trang chu</a>
</body>
</html>