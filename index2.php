<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <h1><?php echo "Hello World<br><br>"; ?></h1>
    <?php echo "<h1>Hello World<br><br></h1>" ?>
    <?php $var_a = "SE CAMP" ?>
    <?php echo $var_b = "Hello $var_a" ?>
    <br>
    <?php echo $var_c = "Hello $var_a" ?>
    <br> 
    <?php
    $var_c = $var_b = 1;
    $var_c = '1';
    echo $var_b <=> $var_c;
    echo "<br>";
     if($var_b === $var_c) {
        // true
        echo '$var_b === $var_c';
    }elSe if($var_b <> $var_c) {
        // true
        echo '$var_b <> $var_c';
    }Else{
        // false
        echo 'else';
    }
    ?>
    <br>
    <?php echo $var_c = 2; ?>
    <br>
    <?php 
    echo $var_c
    echo "<br>";
    switch($var_c){
        case 1;
            echo "1";
            break;
        default:
            echo "test";    
    }

    $arry = array(1,2,3);
    $arry1 = [1,2,3]; //{}
    $arry2[] = 1;
    $arry2[] = 2;
    $arry2[] = 3;
    $arry2[] = "Hello";
    $arry2['SE'] = "World" ;
    ?>

    <?php print_r($arry);?>
    <pre><?php print_r($arry);?></pre>
    <pre><?php print_r($arry1);?></pre>
    <pre><?php print_r($arry2);?></pre>
<?php for($i = 0; $i < count($arry2); $i++){
    
}    

    

    
    
</body>

</html>
