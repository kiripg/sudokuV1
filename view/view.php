<?php
include_once 'forms.php';


function openHeader() {
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Title</title>
        <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
    </head>
    <body>
        
        
        
<?php
}

function closeHeader() {
    ?>
        </body>
</html>
<?php
}

function showBoard($board) {
    echo "<table border='1'>\n";
    // rows
    for ($i = 0; $i < 9; $i++) {
        echo "<tr>";
        // cols
        for ($j = 0; $j < 9; $j++) {
            echo "<td>";
            if ($board[$i][$j] == 0){
                echo "&nbsp;&nbsp;&nbsp;";
            }else{
                echo '&nbsp;' . $board[$i][$j] . '&nbsp;';
            }
            echo "</td>";
        }
        echo "</tr>\n";
    }
    echo '</table>';
}

function br(){
    echo '<br>';
}

    ?>
  

