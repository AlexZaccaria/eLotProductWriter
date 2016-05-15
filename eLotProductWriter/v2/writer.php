<?php
   if ($_POST['pass'] != "tuapass")
   { echo "Password errata!"; die(); }

   if (empty($_GET['t']))
   { echo "Parametro Mancante: template"; die(); }
   
   if (empty($_POST['datalot']))
   { echo "Parametro Mancante: datalot"; die(); }
   
   if (empty($_POST['dest']))
   { echo "Parametro Mancante: destinatario"; die(); }
   
   if (empty($_POST['tipologia']))
   { echo "Parametro Mancante: tipologia"; die(); }
   
   if (empty($_POST['file']))
   { echo "Parametro Mancante: file"; die(); }
   
   if (empty($_POST['descr']))
   { echo "Parametro Mancante: descrizione"; die(); }
   
   if (empty($_POST['dedica']))
   { echo "Parametro Mancante: dedica"; die(); }
   
   $filepath = "./certificati/".str_replace(" ", "_", $_POST['dest'])."_".time().".php";
   $scheda = fopen($filepath, "w") or die("Impossibile scrivere la scheda!");
   
   fwrite($scheda, "<?php\n");
   fwrite($scheda, "\$datalot='".str_replace("'", "\'", $_POST['datalot'])."';\n");
   fwrite($scheda, "\$dest='".str_replace("'", "\'", $_POST['dest'])."';\n");
   fwrite($scheda, "\$tipologia='".str_replace("'", "\'", $_POST['tipologia'])."';\n");
   fwrite($scheda, "\$file='".str_replace("'", "\'", $_POST['file'])."';\n");
   fwrite($scheda, "\$descr='".str_replace("'", "\'", $_POST['descr'])."';\n");
   fwrite($scheda, "\$reg='".str_replace("'", "\'", $_POST['reg'])."';\n");
   fwrite($scheda, "\$dedica='".str_replace("'", "\'", $_POST['dedica'])."';\n");
   fwrite($scheda, "include './../templates/".$_GET['t']."/template.php';\n");
   fclose($scheda); 
   
   header("location: ".$filepath);
?>