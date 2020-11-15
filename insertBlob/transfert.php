<?php
    function transfert($db){
        $ret        = false;
        $img_blob   = '';
        $img_taille = 0;
        $img_type   = '';
        $img_nom    = '';
        $taille_max = 250000;
        $ret        = is_uploaded_file($_FILES['fic']['tmp_name']);

        if (!$ret) {
            echo "Problème de transfert";
            return false;
        } else {
            // Le fichier a bien été reçu
            $img_taille = $_FILES['fic']['size'];

            if ($img_taille > $taille_max) {
                echo "Trop gros !";
                return false;
            }

            $img_type = $_FILES['fic']['type'];
            $img_nom  = $_FILES['fic']['name'];


            $img_blob = file_get_contents ($_FILES['fic']['tmp_name']);
            $id_img = $_POST["id_img"];
            $nom_four = $_POST["fk_nom_four"];
            $id_ray = $_POST["fk_id_ray"];
            $id_pro = $_POST["fk_id_pro"];
            $insert = $db->insertImage($id_img, $img_blob, $nom_four, $id_ray, $id_pro);
            return true;
        }
    }
?>
