<?php
    echo('<table border=1px style="border-collapse:collapse;">');
    $name=['A','B','C'];
    $salary=[1000,1200,1400];
    for($i=0;$i<3;$i++)
    {
        echo('<tr>');
            echo('<td style="color:blue;">Salary of Mr.'.$name[$i].'</td>');
            echo('<td>'.$salary[$i].'$</td>');
        echo('</tr>');
    }

    echo('</table>');
?>