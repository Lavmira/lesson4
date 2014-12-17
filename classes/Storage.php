<?php
class Storage
    implements Countable, Iterator
{
    protected $data;
    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }


    public function count()
    {
        return count($this->data);
    }


    public function current()
    {
        return current($this->data);
    }


    public function next()
    {
        next($this->data);
    }


    public function key()
    {
        return key($this->data);
    }


    public function valid()
    {
        return null !== key($this->data);
    }


    public function rewind()
    {
        reset($this->data);
    }
}