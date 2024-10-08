<?php

class BsForm{

    protected $components = [];
    protected $action = '';
    protected $method = 'get';

    public function setInputText($id, $name, $label){
        $iText ='<div class="mb-3">
                        <label for="'.$id.'">'.$label.'</label>
                        <input class="form-control" type="text" name="'.$name.'" id="'.$id.'">
</div>';
array_push($this->components, $iText);

    }

    public function setInputTextarea(){

    }

    public function setButton($label){
        $btn= '<div class="mb-3">
                        <button type="button" class="btn btn-primary">'.$label.'</button>
                </div>';

    }

    public function setFrom($action, $method){
        $this->action = $action;
        $this->method = $method;

    }

    public function showForm(){
        echo'
            <form action="'.$this->action.'"method="'.$this->method.'">';

        foreach($this->components as $item){
            echo $item;

    }

    echo'</from>';
    }

}