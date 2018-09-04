<?php
require_once('mysqli_connect.php');


    $query = "SELECT user_id, nom, prenom, email FROM user";

    $response = @mysqli_query($dbc, $query);

  if($response){

       echo '<table align="center"
      cellspacing="5" cellpadding="8">

        <tr>
            <td align="center">
                <b>user_id</b>
            </td>
            <td align="center">
                <b>nom</b>
            </td>
            <td align="center">
                <b>prenom</b>
            </td>
           <td align="center">
               <b>email</b>
           </td>
        </tr>
        ';

            while ($row = mysqli_fetch_array($response)) {
                echo '<tr><td align="center">' .
                $row['user_id'] . '</td><td align="center">' .
                $row['nom'] . '</td><td align="center">' .
                $row['prenom'] . '</td><td align="center">' .
                $row['email'] . '</td><td align="center">';

                echo '</tr>
                ';
        }

 echo '</table>';

    } else {

        echo "Could t issue database query";
        echo mysqli_error($dbc);
    }

    mysqli_close($dbc);

    
?>