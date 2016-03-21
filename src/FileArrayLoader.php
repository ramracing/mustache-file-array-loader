<?php

namespace RamRacing\Mustache;

use Mustache_Exception_UnknownTemplateException;
use Mustache_Loader;

class FileArrayLoader implements Mustache_Loader
{
    /**
     * @property string
     */
    protected $base_dir;

    /**
     * @property string
     */
    protected $extension = '.mustache';
    
    /**
     * @property array
     */
    protected $files;

    /**
     * @param array $files
     */
    public function __construct(array $files, array $options = array())
    {
        $this->files = $files;
        
        if (array_key_exists('base_dir', $options)) {
            $this->base_dir = $options['base_dir'];
        }
        
        if (array_key_exists('extension', $options)) {
            if (empty($options['extension'])) {
                $this->extension = '';
            } else {
                $this->extension = '.' . ltrim($options['extension'], '.');
            }
        }
    }

    /**
     * Load a Template by name.
     *
     * @throws Mustache_Exception_UnknownTemplateException If a template file is not found.
     *
     * @param string $name
     *
     * @return string Mustache Template source
     */
    public function load($name)
    {
        $key = $this->getFileName($name);
        
        if (!isset($this->files[$key]) || !file_exists($this->files[$key])) {
            throw new Mustache_Exception_UnknownTemplateException($name);
        }

        return file_get_contents($this->files[$key]);
    }
    
    /**
     * @param string $name
     */
    protected function getFileName($name)
    {
        $file = $name . $this->extension;
        
        if ($this->base_dir) {
            $file = $this->base_dir . '/' . $key;
        }
        
        return $file;
    }
}
