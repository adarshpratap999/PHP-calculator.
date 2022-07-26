<style>
.blinking{
    animation: blinkingText 1.2s infinite;
}
@keyframes blinkingText {
      0% { color: red;}
      49%{ color: green;}
      60%{color: pink;}
      99%{color: orange;}
      100%{color: #FFF;}
    
}

</style>


<body style="background: #9e9e9e99">
<h1 class="blinking">PHP CALCULATOR</h1>
<form method="post">
    <input type="text" name="num1" placeholder="enter your number"> <br><br>
    <input type="text" name="num2" placeholder="enter your number"> <br><br>

  <!--  <select name="operation" style="width: 170px;"></select>    -->

<select name="operation">
    <option></option>

    <option value="add">Add</option>
    <option value="sub">substract</option>
    <option value="multi">multiply</option>
    <option value="divide">Divide</option>

</select><br><br>

<input type="submit" name="sub" style="background: #2196F3; border: 0px; padding: 3px 9px; color:white; ">
</form>
<div align = "center">
<?php

if(isset ($_POST['sub'])) {
    $val1 = $_POST['num1'];
    $val2 =$_POST['num2'];
    $action = $_POST['operation'];

    switch ($action) {
        case "add":
            $val =$val  +  $val2;
            echo "Add the two number result: ".$val;
            break;
            case "sub":
                $val = $val1 - $val2;
                echo "substract the two number result : " .$val;
                break;

                case "multi":
                    $val = $val1 * $val2;
                    echo "multiplication the two number result : " .$val;
                    break;

                    case "divide":
                        $val = $val1 / $val2;
                        echo "substract the two number result : " .$val;
                        break;
    }
}





?>






</div>