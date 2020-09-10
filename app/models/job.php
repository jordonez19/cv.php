<?php


require_once 'baseElement.php';

class job extends baseElement{
    
    public function __construct($title, $description )
    {
        $newTitle = 'Job as a '. $title;
        parent::__construct($newTitle, $description );
    }


    public function getDurationAsString(){
        $years = floor($this->months / 12);  /* meses entre 12 */
        $extraMonths = $this->months % 12;

        return "Job duration $years years $extraMonths months";
    }

}