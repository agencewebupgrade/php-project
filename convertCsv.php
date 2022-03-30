<h2>Note à l'utilisateur</h2>
<p>Sélectionne un fichier CSV</p>
<p>Sélectionne le séparateur du CSV , ou ;</p>
<h2>Note au testeur</h2>
<p>Il y a des fichiers pour le test dans /uploads</p>


<div class="">
    <form method="post" enctype="multipart/form-data"> 
    
    <div>
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />  <!-- 10 Mo -->  
        <input type="file" name="csv" required/>  
    </div>
    <p>Select a sign ; ou ,:</p>

    <div>
        <input type="radio" id=";" name="sign" value=";"
         checked>
    <label for=";">;</label>
    </div>

    <div>
        <input type="radio" id="," name="sign" value=",">
     <label for=",">,</label>
    </div>
    <div class="form-example">
        <input type="submit" value="Envoyer!">
    </div>
    </form>
</div>

<?PHP
// Répertoire pour les csv
$uploads_dir = 'uploads';
// Si il n'y a pas de dossier uploads il est créer
if (!is_dir($uploads_dir)) {
    mkdir($uploads_dir, 0777, true);
}


if (isset($_FILES['csv']) && isset($_POST['sign'])){  
    $sign = $_POST['sign'];                           //Test isset
    if (!empty($_FILES['csv']['name'])){                //Test vide
        if (($_FILES['csv']['type'] == 'text/csv' )){   //Test si c'est bien un CSV
            // Je recupere tmp_name
            $tmp_name = $_FILES["csv"]["tmp_name"];
            // Je recupere le nom de $_FILES['csv']
            $name = basename($_FILES["csv"]["name"]);
            // ******************* Test si le fichier existe déjà ***********************
            if (file_exists("$uploads_dir/$name")) {
                // Je recupere l'extension de mon fichier
                $ext = pathinfo($name, PATHINFO_EXTENSION);
                // J'explose $name
                $nameArray = explode('.',$name);
                // J'utilise la premiere partie de $name
                $name = $nameArray[0];
                // Je récupere la date à cet instant
                $date = dateNow();
                // Je renomme mon fichier avec ma fonction date aleatoire
                $name = $name."_".$date.".".$ext;
                // Je déplace la csv dans mon dossier
                $move = move_uploaded_file($tmp_name, "$uploads_dir/$name");
            } else {
                // Je déplace la csv dans mon dossier
                $move = move_uploaded_file($tmp_name, "$uploads_dir/$name");
            }

            // ****************** /Test si le fichier existe déjà ***********************

            // ************************* Traitement du CSV *****************************

            $cvs_path = "$uploads_dir/$name"; 
            $touteslignes = file($cvs_path);                //Recupere le nombre de ligne du fichier
            $longFLign =strlen($touteslignes[0]);           // Recupere la longueur de la premiere ligne
            $tab = [];                                      // Tableau vide pour push dedans
            // Test l'existence du fichier et l'ouvre en lecture seule s'il existe.
            if(($handle = @fopen($cvs_path, "r")) !== false)// Le @ sert à ne pas afficher le E_WARNING relatif à une ouverture de fichier qui rate.
            {
                
            // Passe en revue chaque ligne du fichier CSV et la stocke dans $data puis push dans tab.
            while(($datas = fgetcsv($handle, $longFLign,$sign)) !== false){
                array_push($tab, $datas);
                }
            }
            echo '<pre>';
            print_r($tab);
            echo '</pre>';

            // ************************* /Traitement du CSV *****************************

        }else{
            echo '<p>Le fichier doit être au format csv.</p>';
        }
    }else{
        echo '<p>Il n\'y a rien a envoyé</p>';
    } 
}
/********************************************************************
***************************  Fonctions  *****************************
*********************************************************************/
//   Fonction pour renvoyer une date
function dateNow(){
    $now = date("m-d-y-His");
    return $now;
}

