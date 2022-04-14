<?php    

class BootstrapForm extends Form {
    protected function surround($html){
        return "<div class=\"mb-3\">{$html}</div>";

    }

    public function input($name) {
        '<label>' . $name . '</label>' . 
        '<input type="password" name=""' . $name . '" value="' . $this-> getValue($name) . '" class="form-control"';
    }
}