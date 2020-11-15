<?php
class db{

  private $dbh;


  public function __construct(){
    try {
      $dsn = 'mysql:dbname=ventes;host=127.0.0.1:33';

      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e){
      echo 'connexion échouée : '.$e->getMessage();
    }
  }


  public function getImage_produits(){
    $res = $this->dbh->query("SELECT id_img, image, fk_nom_four, fk_id_ray, fk_id_pro FROM image_produits", PDO::FETCH_ASSOC);
    return $res->fetchAll();
  }

  public function insertImage($id_img, $img_blob, $nom_four, $id_ray, $id_pro) {
    $sql = "INSERT INTO image_produits(id_img, image, fk_nom_four,fk_id_ray, fk_id_pro) VALUES (:id_img, :image, :fk_nom_four, :fk_id_ray, :fk_id_pro)";
    $req = $this->dbh->prepare($sql);
    $req->execute(array(":id_img" => $id_img, ":image" => $img_blob, ":fk_nom_four" =>$nom_four, ":fk_id_ray" => $id_ray, ":fk_id_pro" => $id_pro));
  }

  public function lireImage($id){
    $req = $this->dbh->query("SELECT image FROM image_produits WHERE id_img =".$id, PDO::FETCH_ASSOC);
    return $req->fetch();
  }
}

?>
