<?php

class ProductImage
{
    private $name;
    private $url;
    private $prefix;
    private $default_width;
    private $default_height;
    /* private $size = [
        'width' => '100 px',
        'height' => '100 px'
    ];*/
    private $thumbnail;

    private function getName()
    {
        return $this->name;
    }
    private function setName($name)
    {
        $this->name = $name;
    }
    private function getUrl()
    {
        return $this->url;
    }
    private function setUrl($url)
    {
        $this->url = $url;
    }
    private function getPrefix()
    {
        return $this->prefix;
    }
    private function setPrefix($prefix)
    {
        $this->prefix = $prefix;
    }
    private function getDefaultWidth()
    {
        return $this->default_width;
    }
    private function setDefaultWidth($default_width)
    {
        $this->default_width = $default_width;
    }
    private function getDefaultHeight()
    {
        return $this->default_height;
    }
    private function setDefaultHeight($default_height)
    {
        $this->default_height = $default_height;
    }
}
