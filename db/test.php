<style>
    table {
        border: 1px solid black;
    }
    td{
        border: 1px solid black;
    }
    td {
        border: 1px solid black;
    }
</style>

<table>
<thead>
    <tr>
        <th>№</th>
        <th>Имя</th>
        <th>Логин</th>
        <th>Группа</th>
        <th>Возраст</th>

    </tr>
</thead>
<tbody>
<?php
	$host = 'my_db'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '1234';          // пароль
	$name = 'animeeeee';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);

    $query = 'SELECT `ID`, `NAME`, `LOGIN`, `ID_GROUP`, `AGE` FROM `students`';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
    while ($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>'. $row ['ID'].'</td>';
        echo '<td>'. $row ['NAME'].'</td>';
        echo '<td>'. $row ['LOGIN'].'</td>';
        echo '<td>'. $row ['ID_GROUP'].'</td>';
        echo '<td>'. $row ['AGE'].'</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>