<html>
    <body>
        <?php
        $idc=mysql_connect("localhost","root","");
        $c=mysql_select_db("scolarite");
        $requete="delete from eleves where Num=$c";
        echo $requete;
        $resultat=mysql_query($requete);
        if (! $resultat )
        {
                echo "<h1> echec de la requete $requete </h1>";
                echo mysql_error();
        }
        else
            if ( mysql_affected_rows())
                echo "<h1>suppression effectuée</h1>";
        echo "<h3><a href='index.html'> RETOUR au menu </a></h3>";
        mysql_close($idc);
        ?>
    </body>
</html>