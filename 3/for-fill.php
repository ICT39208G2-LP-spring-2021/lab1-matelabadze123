
<?php 
    require_once ('base.php');

    $i= 1;
    echo '<tbody>';
    while($row = mysqli_fetch_assoc($value)){
        echo '<tr style="background-color: bisque">';
        echo "<th scope='row'> {$row['Id']} </th>";
        echo "<td> First name : {$row['FirstName']} </td> ";
        echo "<td> Last name : {$row['LastName']} </td> ";
        echo "<td> Personal number : {$row['PersonalNumber']} <span style='color: limegreen'><b>Approved</b></span> </td> ";
        echo "</tr>";
    }
    while($row = mysqli_fetch_assoc($valuee)){
        echo '<tr style="background-color: bisque">';
        echo "<th scope='row'> {$row['Id']} </th>";
        echo "<td> First name : {$row['FirstName']} </td> ";
        echo "<td> Last name : {$row['LastName']} </td> ";
        echo "<td> Personal number : {$row['PersonalNumber']} <span style='color: darkred'><b>Not Approved</b></span> </td> ";
        echo "</tr>";
    }
    echo "</tbody>";

?>