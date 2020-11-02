<?php
class Bdd{
  
  private $dbh;

public function __construct(){
      try {
        $dsn = 'mysql:dbname=ventes;host=127.0.0.1:3308';
        $this->dbh = new PDO($dsn, 'root', '');
      } catch (PDOException $e){
        echo 'connexion échouée : '.$e->getMessage();
      }
}

  public function getAllSport(){
    $res = $this->dbh->query('SELECT id_pro, p.pr_category as Rayon , p.pr_nom as `Nom du produit`, p.desc_pro as `Description du produit`, image as ` Cliché`, SUM(s.quant_stock) OVER(PARTITION BY p.pr_category) as quantité, nom_mag as magasin, p.pr_uht as Prix  From produits p join image_produits i on p.id_pro = i.fk_id_pro join stocker s on  s.fk_id_pro = p.id_pro join magasin on fk_id_mag = id_mag where s.quant_stock >= 0;', PDO::FETCH_ASSOC);
    return $res->fetchALL();
  }

  public function getPrixDESC(){
    $res = $this->dbh->query('SELECT p.pr_category as Rayon,
                                    p.pr_nom as `Nom du produit`,
                                    p.desc_pro as `Description du produit`,
                                    image as ` Cliché`, 
                                  SUM(s.quant_stock) OVER(PARTITION BY p.pr_category) as quantité, p.pr_uht as Prix 
                                  From produits p
                                    join image_produits i on p.id_pro = i.fk_id_pro
                                    join stocker s on  s.fk_id_pro = p.id_pro
                                    join magasin on fk_id_mag = id_mag 
                                    where s.quant_stock >= 0
                                  order by p.pr_uht desc;', PDO::FETCH_ASSOC);
    return $res->fetchAll();
  }
  public function getPrixASC(){
    $res = $this->dbh->query('SELECT p.pr_category as Rayon,
                                    p.pr_nom as `Nom du produit`,
                                    p.desc_pro as `Description du produit`,
                                    image as ` Cliché`, 
                                  SUM(s.quant_stock) OVER(PARTITION BY p.pr_category) as quantité, p.pr_uht as Prix 
                                  From produits p
                                    join image_produits i on p.id_pro = i.fk_id_pro
                                    join stocker s on  s.fk_id_pro = p.id_pro
                                    join magasin on fk_id_mag = id_mag 
                                    where s.quant_stock >= 0
                                  order by p.pr_uht asc;', PDO::FETCH_ASSOC);
    return $res->fetchAll();
  }


  

  public function giveBadminton(){
    $res = $this->dbh->query('SELECT p.pr_category as Rayon,
                                    p.pr_nom as `Nom du produit`,
                                    p.desc_pro as `Description du produit`,
                                    image as ` Cliché`, 
                                  SUM(s.quant_stock) OVER(PARTITION BY p.pr_category) as quantité , 
                                  nom_mag as magasin,
                                   p.pr_uht as Prix 
                                  From produits p
                                    join image_produits i on p.id_pro = i.fk_id_pro
                                    join stocker s on  s.fk_id_pro = p.id_pro
                                    join magasin on fk_id_mag = id_mag 
                                    where s.quant_stock >= 0
                                    and p.pr_category="Badminton";', PDO::FETCH_ASSOC);
    return $res->fetchAll();
  }
  public function giveBoxe(){
    $res = $this->dbh->query('SELECT p.pr_category as Rayon,
                                    p.pr_nom as `Nom du produit`,
                                    p.desc_pro as `Description du produit`,
                                    image as ` Cliché`, 
                                  SUM(s.quant_stock) OVER(PARTITION BY p.pr_category) as quantité , 
                                  nom_mag as magasin,
                                  p.pr_uht as Prix 
                                  From produits p
                                    join image_produits i on p.id_pro = i.fk_id_pro
                                    join stocker s on  s.fk_id_pro = p.id_pro
                                    join magasin on fk_id_mag = id_mag 
                                    where s.quant_stock >= 0
                                    and p.pr_category="Boxe";', PDO::FETCH_ASSOC);
    return $res->fetchAll();
  }
  public function giveEquitation(){
    $res = $this->dbh->query('SELECT p.pr_category as Rayon,
                                    p.pr_nom as `Nom du produit`,
                                    p.desc_pro as `Description du produit`,
                                    image as ` Cliché`, 
                                  SUM(s.quant_stock) OVER(PARTITION BY p.pr_category) as quantité , 
                                  nom_mag as magasin,
                                  p.pr_uht as Prix 
                                  From produits p
                                    join image_produits i on p.id_pro = i.fk_id_pro
                                    join stocker s on  s.fk_id_pro = p.id_pro
                                    join magasin on fk_id_mag = id_mag 
                                    where s.quant_stock >= 0
                                    and p.pr_category="Equitation";', PDO::FETCH_ASSOC);
    return $res->fetchAll();
  }
  public function giveNatation(){
    $res = $this->dbh->query('SELECT p.pr_category as Rayon,
                                    p.pr_nom as `Nom du produit`,
                                    p.desc_pro as `Description du produit`,
                                    image as ` Cliché`, 
                                  SUM(s.quant_stock) OVER(PARTITION BY p.pr_category) as quantité , 
                                  nom_mag as magasin,
                                  p.pr_uht as Prix 
                                  From produits p
                                    join image_produits i on p.id_pro = i.fk_id_pro
                                    join stocker s on  s.fk_id_pro = p.id_pro
                                    join magasin on fk_id_mag = id_mag 
                                    where s.quant_stock >= 0
                                    and p.pr_category="Natation";', PDO::FETCH_ASSOC);
    return $res->fetchAll();
  }
  public function giveVelo(){
    $res = $this->dbh->query('SELECT p.pr_category as Rayon,
                                    p.pr_nom as `Nom du produit`,
                                    p.desc_pro as `Description du produit`,
                                    image as ` Cliché`, 
                                  SUM(s.quant_stock) OVER(PARTITION BY p.pr_category) as quantité , 
                                  nom_mag as magasin,
                                  p.pr_uht as Prix 
                                  From produits p
                                    join image_produits i on p.id_pro = i.fk_id_pro
                                    join stocker s on  s.fk_id_pro = p.id_pro
                                    join magasin on fk_id_mag = id_mag 
                                    where s.quant_stock >= 0
                                    and p.pr_category="Velo";', PDO::FETCH_ASSOC);
    return $res->fetchAll();
  }





  public function getDetail($idPro) {
    $res = $this->dbh->prepare('SELECT p.id_pro , 
                                      p.pr_category as Rayon,
                                      p.pr_nom as `Nom du produit`,
                                      p.desc_pro as `Description du produit`,
                                      image as ` Cliché`, 
                                    SUM(s.quant_stock) OVER(PARTITION BY p.pr_category) as quantité , 
                                    nom_mag as magasin,
                                    p.pr_uht as Prix 
                                    From produits p
                                      join image_produits i on p.id_pro = i.fk_id_pro
                                      join stocker s on  s.fk_id_pro = p.id_pro
                                      join magasin on fk_id_mag = id_mag 
                                      where s.quant_stock >= 0
                                      and p.id_pro = ?');
    
    $res->execute(array($idPro));
    return $res->fetch();
}


}






