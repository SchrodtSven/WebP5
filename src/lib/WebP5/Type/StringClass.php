<?php declare(strict_types=1);
/*
 * Class representing strings as instances
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/WebP5
 * @package WebP5
 * @version 0.1
 * @since 2024-01-09
 */

namespace SchrodtSven\WebP5\Type;

class StringClass
{
    public function __construct(private string $content = '')
    {
        
    }

    public function splitBy(string $separator = ' '): ArrayClass
    {
        return new ArrayClass(explode($separator, $this->content));
    }

    public function trim(string $characters = ' \n\r\t\v\x00'): self
    {
        $this->content = trim($this->content);
        return $this;
    }

    public function __toString(): string
    {
        return $this->content;
    }
}