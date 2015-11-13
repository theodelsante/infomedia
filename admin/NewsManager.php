<?php
class NewsManager {
    private $_db;
    
    public function __construct($db){
        $this->setDb($db);
    }
    
    public function setDb(PDO $db){
        $this->_db = $db;
    }
    
    public function getNews(News $news){
        
    }
    
    public function updateNews(){
        
    }
    
    public function addNews(News $nouvellenews){
        $q = $this->_db->prepare('INSERT INTO news SET titre_news = :titre, texte_news = :texte, date_publication = :publication, date_creation = :creation, date_modification = :modification, nom_img = :img, importance = :importance');
        $q->bindValue(':titre', $nouvellenews->titrenews());
        $q->bindValue(':texte', $nouvellenews->textenews());
        $q->bindValue(':publication', $nouvellenews->datepublication());
        $q->bindValue(':creation', $nouvellenews->datecreation());
        $q->bindValue(':modification', $nouvellenews->datemodification());
        $q->bindValue(':img', $nouvellenews->nomimg());
        $q->bindValue(':importance', $nouvellenews->importance());
        $q->execute();
    }
    
    public function deleteNews(News $supprimenews){
        $q = $this->_db->prepare('DELETE FROM personnages WHERE id_news = :id ');
        $q->bindValue(':id', $supprimenews->idnews());
    }
}
?>