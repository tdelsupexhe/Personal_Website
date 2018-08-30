<?php
/**
 * Created by PhpStorm.
 * User: tdels
 * Date: 30-08-18
 * Time: 13:47
 */


/* RAJOUTER LES REQUIRED */
class Form
{
    private $datas = [];

    public function __construct($datas = [])
    {
        $this->datas = $datas;
    }


    public function input($type, $name, $label)
    {
        $value = "";
        if(isset($this->datas[$name])){
            $value = $this->datas[$name];
        }


        if($type == 'textarea'){
            $input = "<textarea id=\"$name\" name=\"$name\">$value</textarea>";
        } else{
            $input = "<input type=\"$type\" id=\"$name\" name=\"$name\" value=\"$value\">";
        }




        return "
                <label for=\"$name\">$label</label>
                $input";
    }


    public function inputText($name, $label)
    {
        return $this->input('text', $name, $label);
    }


    public function inputEmail($name, $label)
    {
        return $this->input('email', $name, $label);
    }


    public function inputTextArea($name, $label)
    {
        return $this->input('textarea', $name, $label);
    }


    public function buttonSubmit($label)
    {
        return "<button type=\"submit\" id=\"submit\">$label</button>";
    }
}