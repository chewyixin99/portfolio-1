<?php

class Comment { // pageid, parentid, name, content, submitdate
    private $id;
    private $page_id; 
    private $parent_id; 
    private $name; 
    private $content; 
    private $submit_date;
    
    function __construct($page_id, $parent_id, $name, $content, $submit_date) {
        $this->page_id = $page_id;
        $this->parent_id = $parent_id;
        $this->name = $name;
        $this->content = $content;
        $this->submit_date = $submit_date;
    }

    public function getPageID() {
        return $this->page_id;
    }

    public function getParentID() {
        return $this->parent_id;
    }

    public function getName() {
        return $this->name;
    }
    
    public function getContent() {
        return $this->content;
    }

    public function getSubmitDate() {
        return $this->submit_date;
    }

    public function getID() {
        return $this->id;
    }


}

?>