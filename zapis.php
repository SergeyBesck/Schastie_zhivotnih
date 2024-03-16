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
            <form action="priem.php" class="form-inline" role="form" name="form" method="POST">
                <h3>Новая запись</h3>
                <label for="nomer" class="form-label" id="">Выберите номер медкарты</label>
                <select name="nomer" class="form-select" id="">
                    <?php
                    foreach($result as $list){
                        echo "<option value=".$list['id_karta'].">".$list['id_karta']."</option>";
                    }
                    ?>
                </select><br>
                <input type="submit" class="btn btn-primary" href="priem.php" value="Отправить">
            </form>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<?php include 'template/footer.php'; ?>