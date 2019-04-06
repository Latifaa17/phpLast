<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Page Title</title>
</head>
<body>
    <?php
        //inclure un fichier
        include "config.php";

        //appel fonction
        $base=connect();


        $req="SELECT * from users";

        //avec select: query
        $result=$base->query($req);
    ?>

    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Mot de passe </th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($user=$result->fetchObject())  //fetchobject: retourne la ligne sous forme d'un objet
                {
            ?>
            <tr>    
                <td><?php echo $user->email ?></td>
                <td><?php echo $user->password ?></td>
             </tr>
            <?php 
                } 
            ?>
        </tbody>
    </table>
        
</body>
</html>





 <!--echo $user->email." ".$user->password."<br/>";-->
 
