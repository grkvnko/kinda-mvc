<?php

abstract class View
{
    /**
     * Список шаблонов входящих в представление
     * @var array
     */
    protected $templates = [];

    /**
     * Имя компонента
     * @var string
     */
    protected $module_name;

    public function render($view_data = [])
    {
        if (!is_array($view_data) ) {
            throw new NoDataException($this->module_name, ERR::NO_DATA_FOR_VIEW);
        }
        
        foreach ($this->templates as $item) {
            include "app/templates/$item";
        }
    }
}