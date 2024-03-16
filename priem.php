<?php 
include 'template/head.php';
include 'template/nav.php';
include 'template/database.php';
if(!empty($_POST)){
    $id_karta = $_POST['id_karta'];
    $sql = "SELECT * FROM med_karta WHERE id_karta=$id_karta";
    $result1 = $mysqli->query($sql);
}
else{
    $sql = "SELECT * FROM med_karta";
    $result1 = $mysqli->query($sql);
}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h2>Записи на прием</h2>
            <table class="table">
                <tr>
                    <td>№ медкарты</td>
                    <td>Животное</td>
                    <td>Хозяин животного</td>
                    <td>Врач</td> 
                    <td>Услуга</td>
                    <td>Диагноз</td>  
                    <td>Описание</td>
                    <td>Назначение</td>
                    <td>Дата записи на прием</td>         
                </tr>
            <?php
            foreach($result1 as $row){
                echo '<tr><td>'.$row['id_karta'].'</td>
	            <td>'.$row['id_zhivotnie'].'</td>
	            <td>'.$row['id_hoziain_zhivotnogo'].'</td>
                <td>'.$row['id_vrach'].'</td>
                <td>'.$row['id_uslugi'].'</td>
                <td>'.$row['diagnoz'].'</td>
                <td>'.$row['description'].'</td>
                <td>'.$row['naznachenie'].'</td>
	            <td>'.$row['data'].'</td></tr>';
            }
            $result->free(); //освободить память, занятую результатом
            $mysqli->close(); //закрыть соединение с БД
            ?> 
        </table>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<?php include 'template/footer.php'; ?>