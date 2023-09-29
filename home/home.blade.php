<!-- require_once入れる　-->

<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <h2>Calculator</h2>
            <p><?php if(empty($displayNum)){echo 0;}else{echo $displayNum;} ?></p>
        <form action="?" method="post">
            <input type="hidden" name="displayNum" value="<?php echo $displayNum;?>"/>
            <input type="hidden" name="pre_button" value="<?php echo $pre_button;?>"/>
            <input type="hidden" name="ope" value="<?php echo $ope;?>"/>
            <input type="hidden" name="pre_num" value="<?php echo $pre_num;?>"/>
            <input type="hidden" name="input_num" value="<?php echo $input_num;?>"/>


            <table>
                <tr align="center">
                    <td><button type="submit" name="button" value="e^x">e^x</button></td>
                    <td><button type="submit" name="button" value="x^y">x^y</button></td>
                    <td><button type="submit" name="button" value="10^x">10^x</button></td>
                    <td><button type="submit" name="button" value="x^2">x^2</button></td>
                </tr>
                <tr align="center">
                    <td><button type="submit" name="button" value="AC">AC</button></td>
                    <td><button type="submit" name="button" value="C">C</button></td>
                    <td><button type="submit" name="button" value="%">%</button></td>
                    <td><button type="submit" name="button" value="÷">÷</button></td>
                </tr>
                <tr align="center">
                    <td><button type="submit" name="button" value="7">7</button></td>
                    <td><button type="submit" name="button" value="8">8</button></td>
                    <td><button type="submit" name="button" value="9">9</button></td>
                    <td><button type="submit" name="button" value="×">×</button></td>
                </tr>
                <tr align="center">
                    <td><button type="submit" name="button" value="4">4</button></td>
                    <td><button type="submit" name="button" value="5">5</button></td>
                    <td><button type="submit" name="button" value="6">6</button></td>
                    <td><button type="submit" name="button" value="-">-</button></td>
                </tr>
                <tr align="center">
                    <td><button type="submit" name="button" value="1">1</button></td>
                    <td><button type="submit" name="button" value="2">2</button></td>
                    <td><button type="submit" name="button" value="3">3</button></td>
                    <td><button type="submit" name="button" value="+">+</button></td>
                </tr>
                <tr align="center">
                    <td><button type="submit" name="button" value="0">0</button></td>
                    <td><button type="submit" name="button" value="+/-">+/-</button></td>
                    <td><button type="submit" name="button" value="e">e</button></td>
                    <td><button type="submit" name="button" value="=">=</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>