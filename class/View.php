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

    public function render($template): string
    {
        ob_start();
        $this->display($template);
        $out = ob_get_contents();
        ob_end_clean();

        return $out;
    }

}