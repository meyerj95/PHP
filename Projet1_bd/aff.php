<html>
<html>
    <head><title> la gestion d'une basse ded donées </title>
</head>
<body>
    <?php
    $idc=mysql_connect("localhost","root","");
    $c=mysql_select_db("scolarite");
    $requete="select * from eleves";
    $resultat=mysql_query($requete);
    echo mysql_num_rows($resultat);
    ?>
    <table border=1>
    <tr> 
        <td> codeeleve </td>
        <td> nomeleve </td> 
        <td> codeeleve </td>
        <td> codeeleve </td>
        
        
    </tr>
    <?php while($enreg=mysql_fetch_array($resultat))
     { 
        ?> <tr>
            <TD> <?php echo $enreg["Num_eleve"];?> </TD>
            <TD> <?php echo $enreg["nom_prenom"];?> </TD>
            <TD> <?php echo $enreg["adresse"];?> </TD>
            <TD> <?php echo $enreg["num_tel"];?> </TD>
     </tr> <?php } ?>
     </table>
     <?php mysql_close ($idc);
     ?>
     </body>
     </html>