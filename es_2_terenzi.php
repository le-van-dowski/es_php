<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        

    </div>

    <?php 
        function isPalindrome($str){
        $reversed = $strrev($str);
        if($str == $reversed) return true;
        return false;
        }

        function removeVoc($str){
            $remPattern = '/[aeiouàèìòù]/i';
            return preg_replace($remPattern, '', $str);
        }

    ?>
</body>
</html>