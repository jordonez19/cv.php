<?php

/* private = solo puede ser accedido por la misma class
public = puede ser accedida desde cualquier lugar
protected = puede ser solo accedida por sus hij@s */


class baseElement{

    public $title;
    public $description;
    public $visible = true ;
    public $months;

    public function __construct($title,$description){
        $this->setTitle($title);
        $this->description= $description;
        
    }


  /* change content */
    public function setTitle($t){
        if($t == ''){
            $this->title = 'N/A';
        }else {  
            $this->title = $t;  
        }              
    }

/* get content  */
    public function getTitle(){                 
        return $this->title;
    }

    public function getDurationAsString(){
        $years = floor($this->months / 12);  /* meses entre 12 */
        $extraMonths = $this->months % 12;

        return "$years years $extraMonths months";
    }

}
