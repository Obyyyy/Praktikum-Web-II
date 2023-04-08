<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text", name="input" id="input">
        <input type="submit", name="submit", value="Submit"><br>
    </form>
    <?php 
    if(isset($_GET['input']) && isset($_GET['submit'])){
        $text = $_GET['input'];
        $textArr = str_split(strtolower($text));
        echo "<h3><b>Input: </b></h3>";
        echo "$text";
        echo "<h3><b>Output: </b></h3>";
        for($i=0; $i<sizeof($textArr); $i++){
            for($j=1; $j<=sizeof($textArr); $j++){
                if($j==1){
                    echo strtoupper($textArr[$i]);
                }else{
                    echo $textArr[$i];
                }
            }
        }
    }
    ?>
</body>
</html>