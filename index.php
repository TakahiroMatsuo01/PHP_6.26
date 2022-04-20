<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function sum(){
        $result = 0;
        for($i = 0; $i < func_num_args(); $i++){
            $result += func_num_args($i);
        }
        return $result;
    }?>
</body>
</html>