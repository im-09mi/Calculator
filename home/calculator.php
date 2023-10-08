<!DOCTYPE html>
<html>
<head>
    <title>メモリ付き電卓結果</title>
</head>
<body>
    <h1>計算結果</h1>
    <?php
    session_start();
    
    if (!isset($_SESSION['memory'])) {
        $_SESSION['memory'] = 0;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $display = $_POST["display"];
        $num = $_POST["num"];
        $operator = $_POST["operator"];
        $memoryOperation = $_POST["memory"];

        if ($memoryOperation === "store") {
            $_SESSION['memory'] = $display;
            echo "メモリに保存しました。";
        } elseif ($memoryOperation === "recall") {
            $display = $_SESSION['memory'];
        } elseif ($memoryOperation === "clear") {
            $_SESSION['memory'] = 0;
            echo "メモリをクリアしました。";
        } elseif ($num !== "" && is_numeric($num)) {
            if ($operator === "+") {
                $result = $display + $num;
            } elseif ($operator === "-") {
                $result = $display - $num;
            } elseif ($operator === "*") {
                $result = $display * $num;
            } elseif ($operator === "/" && $num != 0) {
                $result = $display / $num;
            } else {
                echo "エラー：無効な操作または0で割り算はできません。";
            }
        } else {
            echo "エラー：無効な数値が入力されました。";
        }
    }
    ?>
    <form method="post" action="calculator.php">
        <input type="text" name="display" value="<?php echo isset($result) ? $result : ''; ?>" readonly>
        <input type="text" name="num" placeholder="数値">
        <button type="submit" name="operator" value="+" >+</button>
        <button type="submit" name="operator" value="-" >-</button>
        <button type="submit" name="operator" value="*" >*</button>
        <button type="submit" name="operator" value="/" >/</button>
        <br>
        <button type="submit" name="memory" value="store">M→</button>
        <button type="submit" name="memory" value="recall">MR</button>
        <button type="submit" name="memory" value="clear">MC</button>
    </form>
</body>
</html>