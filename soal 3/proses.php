<?php
    $bil = $_POST['bilangan'];

    echo "<table>";
    echo "<form action='output.php' method='post'>";

    for ($i = 0; $i < $bil; $i++) {
        $a=$i+1;
        echo " <tr>
                <td>Bil ke -$a</td>
                <td><input type='text' name='nilai$i'></td>
               </tr>";
    }
    echo "</table>";
    echo "<input type='hidden' name='jum' id='' value='$bil'>";

    echo "<input type='submit' name='Submit' id='' value='Submit'>
    </form>";