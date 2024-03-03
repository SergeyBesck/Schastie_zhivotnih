<?php 
include 'template/head.php';
include 'template/nav.php';
include 'template/database.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-6">
            <h2>Записи на прием</h2>
            <table class="table">
                <tr>
                    <th>№ п/п</th>
                    <th>Дата записи на приём</th>
                    <th>Врач</th>
                    <th>Вид животного</th>
                    <th>Кличка</th>
                    <th>Хозяин животного</th>
                    <th>Услуга</th>
                </tr>
            </table>
            <?php
            $result= $mysqli->query("SELECT * FROM <имя_таблицы>");
            foreach( $result as $row){
                echo '<tr><td>'.$row['<имя_столбца>'].'</td>
	            <td>'.$row['<имя_столбца>'].'</td>
	            <td>'.$row['<имя_столбца>'].'</td>
	            <td>'.$row['<имя_столбца>'].'</td>
	            <td>'.$row['<имя_столбца>'].'</td>
	            <td>'.$row['<имя_столбца>'].'</td></tr>';
            }
            $result->free(); //освободить память, занятую результатом
            $mysqli->close(); //закрыть соединение с БД
            ?>
        </div>
    </div>
</div>