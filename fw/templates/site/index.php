<?php

class Index_tpl {
    protected $tpl = null;
    protected $webpage = null;
    
    public function prepare() {
        $this->tpl = Template_manager::LoadTemplate('index');
    }
    
    public function fill($data) {
        if(isset($data) && is_array($data) )
            $this->tpl->fill($data);
    }
    
    public function show() {
        if(!is_null($this->webpage) )
            echo $this->webpage;
    }
}

?>