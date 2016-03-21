<?php

namespace RamRacing\Mustache;

class FileArrayLoaderTest extends \PHPUnit_Framework_TestCase
{
    public function testException()
    {
        $this->setExpectedException("Mustache_Exception_UnknownTemplateException");

        $loader = new FileArrayLoader([]);
        $loader->load('a');
    }
}
