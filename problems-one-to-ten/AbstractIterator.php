<?php

/**
 * Contains the AbstractIterator class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class AbstractIterator implements Iterator
{

    /**
     *
     * @var ArrayIterator
     */
    protected $iterator;
    
    /*
     * (non-PHPdoc) @see Iterator::current()
     */
    public function current()
    {
        return call_user_func(array(
            $this->iterator,
            __FUNCTION__
        ));
    }
    
    /*
     * (non-PHPdoc) @see Iterator::key()
     */
    public function key()
    {
        return call_user_func(array(
            $this->iterator,
            __FUNCTION__
        ));
    }
    
    /*
     * (non-PHPdoc) @see Iterator::next()
     */
    public function next()
    {
        return call_user_func(array(
            $this->iterator,
            __FUNCTION__
        ));
    }
    
    /*
     * (non-PHPdoc) @see Iterator::rewind()
     */
    public function rewind()
    {
        return call_user_func(array(
            $this->iterator,
            __FUNCTION__
        ));
    }
    
    /*
     * (non-PHPdoc) @see Iterator::valid()
     */
    public function valid()
    {
        return call_user_func(array(
            $this->iterator,
            __FUNCTION__
        ));
    }
}