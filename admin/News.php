<?php
class News {
    private $_idnews;
    private $_titrenews;
    private $_textenews;
    private $_datepublication;
    private $_datecreation;
    private $_datemodification;
    private $_nomimg;
    private $_importance;
        
        
    public function __construct(array $donnees) {
        $this -> hydrate($donnees);
    }
    
    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if  (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
    
    // Getters de la classe News
    public function idnews(){
        return $this->_idnews;
    }
    
    public function titrenews(){
        return $this->_titrenews;
    }
    
    public function textenews(){
        return $this->_textenews;
    }
    
    public function datepublication(){
        return $this->_datepublication;
    }
    
    public function datecreation(){
        return $this->_datecreation;
    }
    
    public function datemodification(){
        return $this->_datemodification;
    }
    
    public function nomimg(){
        return $this->_nomimg;
    }
    
    public function importance(){
        return $this->_importance;
    }
    
    // Setters de la classe News
    public function setIdnews($idnews){
        $idnews = (int) $idnews;
        $this->_idnews=$idnews;
    }
    
    public function setTitrenews($titrenews){
        $titrenews = (string) $titrenews;
        $this->_titrenews=$titrenews;
    }
    
    public function setTextenews($textenews){
        $this->_textenews=$textenews;
    }
    
    public function setDatepublication($datepublication){
        $this->_datepublication=$datepublication;
    }
    
    public function setDatecreation($datecreation){
        $this->_datecreation=$datecreation;
    }
    
    public function setDatemodification($datemodification){
        $this->_datemodification=$datemodification;
    }
    
    public function setNomimg($nomimg){
        $this->_nomimg=$nomimg;
    }
    
    public function setImportance($importance){
        $importance = (int) $importance;
        $this->_importance=$importance;
    }
}
?>