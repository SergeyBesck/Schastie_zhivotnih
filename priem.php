<?php 
include 'template/head.php';
include 'template/nav.php';
include 'template/database.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h2>Записи на прием</h2>
            <table class="table">
                <tr>
                    <th>№ медкарты</th>
                    <th>Животное</th>
                    <th>Хозяин животного</th>
                    <th>Врач</th> 
                    <th>Услуга</th>
                    <th>Диагноз</th>  
                    <th>Описание</th>
                    <th>Назначение</th>
                    <th>Дата записи на прием</th>         
                </tr>
            </table>
            <?php
            foreach($result as $row){
                echo '<tr><td>'.$row['id_karta'].'</td>
	            <td>'.$row['id_zhivotnoe'].'</td>
	            <td>'.$row['id_hoziain_zhivotnogo'].'</td>
                <td>'.$row['id_vrach'].'</td>
                <td>'.$row['id_uslugi'].'</td>
                <td>'.$row['diagnoz'].'</td>
                <td>'.$row['description'].'</td>
                <td>'.$row['naznachenie'].'</td>
	            <td>'.$row['data'].'</td></tr>';
            }
            ?>
        </table>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<?php include 'template/footer.php'; ?>