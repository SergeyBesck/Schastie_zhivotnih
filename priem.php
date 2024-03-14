<?php 
include 'template/head.php';
include 'template/nav.php';
include 'template/database.php';
$result1 = $mysqli->query("select * from med_karta");
?>
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h2>Записи на прием</h2>
            <form action="" class="form-inline" role="form" name="form" method="POST">
                <h3>Новая запись</h3>
                <label for="nomer" class="form-label" id="">Выберите номер медкарты</label>
                <select name="nomer" class="form-select" id="">
                    <?php
                    foreach($result1 as $list){
                        echo "<option value=".$list['id_karta'].">".$list['id_karta']."</option>";
                    }
                    ?>
                </select>
                <label for="zhaloba" class="form-label" id="">Жалоба пациента</label>
                <input type="text" class="form-control" id="jaloba" required>
                <label for="descripton" class="form-label" id="" >Данные осмотра</label>
                <textarea class="form-control" id="description" rows="5" required></textarea>
                <label for="diagnoz" class="form-label" id="">Диагноз</label>
                <input type="text" class="form-control" id="diagnoz" required>
                <label for="naznachenie" class="form-label" id="">Назначение</label>
                <input type="text" class="form-control" id="naznachenie" required>
                <input type="submit" class="btn btn-primary" value="Отправить">
            </form>
            <?php
            if(!empty($_POST)){
                $id_karta=$_POST['id_karta'];
                $jaloba=$_POST['jaloba'];
                $descripton=$_POST['description'];
                $diagnoz=$_POST['diagnoz'];
                $naznachenie=$_POST['naznachenie'];
                $sql="update med_karta set jaloba=$jaloba, description=$description, diagnoz=$diagnoz, naznachenie=$naznachenie where id_karta=$id_karta";
                $result2 = $mysqli->query($sql);
            }
            ?>
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
            foreach($table as $row){
                $table = $mysqli->query("select * from med_karta");
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