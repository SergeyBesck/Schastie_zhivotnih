<nav>
    <?php session_start();?>
    <ul>
        <?php
            if(!empty($_SESSION)){
            if($_session["role"] == 1){
                echo '
                <li><a href="#">Записаться на прием</a></li>
                <li><a href="#">Пожаловаться</a></li>';
            }
            else if($_session["role"] == 2){
                echo '
                <li><a href="#">список приемов</a></li>';
            }
            else if($_session["role"] == 3){
                echo '
                <li><a href="#">доходы</a></li>';
            }
            else{
                echo '
                <li><a href="#">отчеты</a></li>';
            }}
            else{
                echo '
                <li><a href="#">Вход</a></li>
                <li><a href="#">Регистрация</a></li>';
            }
        ?>
    </ul>
</nav>
<div class="content">