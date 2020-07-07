<?php
$db = mysqli_connect("localhost", "root", "m8ts8hito", "banque");
if(isset($_POST["query"]))
{
    $output = '';
    $query = "SELECT * FROM client_physique WHERE numCni LIKE '%".$_POST["query"]."%' ";
    $result = mysqli_query($db, $query);
    $output = '<ul class="list-unstyled">';
    if(mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_array($result)) {
            $output .= '<li>'.$row["numCni"].'</li>';
            $output .= '<li>'.$row["prenom"].' '.$row["nom"].'</li><br />';
        }
    }
    else {
        $output .= '<li>Prenom not found</li>';
    }
    $output .= '</ul>';
    echo $output;
}
?>