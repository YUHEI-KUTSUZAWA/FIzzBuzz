
<?php
        $a = $_POST['FizzNum'];
        $b = $_POST['BuzzNum'];    
?>

<!DOCTYPE html>
<html lang ="ja">
<header>
    <meta charset = "utf-8">
    <title>FizzBuzz</title>
</header>
<body>

    <h1>FizzBuzz問題</h1>
    <form action = "index.php" method = "post">
        FizzNum:<input type="text" name="FizzNum" placeholder = "整数値を入力してください" value = <?php echo $a; ?>><br>
        BuzzNum:<input type="text" name="BuzzNum" placeholder = "整数値を入力してください" value = <?php echo $b; ?>><br>
        <input type="submit" name="sbmt" value="実行">
    </form>
    <p>【出力】</p>

</body>
</html>

<?php
    if(isset($_POST['sbmt'])){
        if(preg_match("/^[0-9]+$/", $a)){
            for($i = 1; $i <= 99; $i++){
            if($i % $a === 0 && $i % $b === 0){
                echo $i, "FizzBuzz <br>";
            }elseif($i % $a === 0){
                    echo $i, "Fizz <br>";
            }elseif($i % $b === 0){
                    echo $i, "Buzz <br>";
                }
            }       
        }else{
            echo "整数値を入力してください";
        }
    
        }
?>

