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
    $res = $this->dbh->query('SELECT p.pr_category, p.pr_nom, p.desc_pro, i.image, s.quant_stock_mag, s.quant_stock_int, p.lieu_stock, p.pr_uht FROM produits p join image_produits i on p.id_pro = i.fk_id_pro join stocker s on p.id_pro = s.fk_id_pro;', PDO::FETCH_ASSOC);
    return $res->fetchAll();
  }


  public function giveBadminton(){
    $res = $this->dbh->query('SELECT p.pr_category, p.pr_nom, p.desc_pro, i.image, s.quant_stock_mag, s.quant_stock_int, p.lieu_stock, p.pr_uht FROM produits p join image_produits i on p.id_pro = i.fk_id_pro join stocker s on p.id_pro = s.fk_id_pro where p.pr_category="Badminton";', PDO::FETCH_ASSOC);
    return $res->fetchAll();
  }
  public function giveBoxe(){
    $res = $this->dbh->query('SELECT p.pr_category, p.pr_nom, p.desc_pro, i.image, s.quant_stock_mag, s.quant_stock_int, p.lieu_stock, p.pr_uht FROM produits p join image_produits i on p.id_pro = i.fk_id_pro join stocker s on p.id_pro = s.fk_id_pro where p.pr_category="Boxe";', PDO::FETCH_ASSOC);
    return $res->fetchAll();
  }
  public function giveEquitation(){
    $res = $this->dbh->query('SELECT p.pr_category, p.pr_nom, p.desc_pro, i.image, s.quant_stock_mag, s.quant_stock_int, p.lieu_stock, p.pr_uht FROM produits p join image_produits i on p.id_pro = i.fk_id_pro join stocker s on p.id_pro = s.fk_id_pro where p.pr_category="Equitation";', PDO::FETCH_ASSOC);
    return $res->fetchAll();
  }
  public function giveNatation(){
    $res = $this->dbh->query('SELECT p.pr_category, p.pr_nom, p.desc_pro, i.image, s.quant_stock_mag, s.quant_stock_int, p.lieu_stock, p.pr_uht FROM produits p join image_produits i on p.id_pro = i.fk_id_pro join stocker s on p.id_pro = s.fk_id_pro where p.pr_category="Natation";', PDO::FETCH_ASSOC);
    return $res->fetchAll();
  }
  public function giveVelo(){
    $res = $this->dbh->query('SELECT p.pr_category, p.pr_nom, p.desc_pro, i.image, s.quant_stock_mag, s.quant_stock_int, p.lieu_stock, p.pr_uht FROM produits p join image_produits i on p.id_pro = i.fk_id_pro join stocker s on p.id_pro = s.fk_id_pro where p.pr_category="Velo";', PDO::FETCH_ASSOC);
    return $res->fetchAll();
  }


}






