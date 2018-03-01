<?php


class View
{
    protected $data = [];

    public function add($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        include $template;
    }

}