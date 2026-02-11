<?php

namespace ThomasHurst\PHPbase;

class File
{
    private string $name;

    public function __construct ($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Alias for setName().
     *
     * @param string $name
     * @return void
     */
    public function rename(string $name): void
    {
        $this->setName($name);
    }

    public function write(string $contents): void
    {
        // Make a FileError Exception/Enum and handle each of these cases
        $handle = fopen($this->name, "w");
        fwrite($handle, $contents);
        fclose($handle);
    }

    public function read(): string
    {
        return file_get_contents($this->name);
    }

    public function delete(): void
    {
        unlink($this->name);
    }
}