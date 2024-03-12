<?php declare(strict_types=1);
/*
 * Class representing arrays as instances
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/WebP5
 * @package WebP5
 * @version 0.1
 * @since 2024-01-09
 */

namespace SchrodtSven\WebP5\Type;
use SchrodtSven\WebP5\Type\Dry\ArrayAccessTrait;
use SchrodtSven\WebP5\Type\Dry\IteratorTrait;
use SchrodtSven\WebP5\Type\Dry\StackOperationTrait;
use Stringable;

class ArrayClass implements \ArrayAccess, \Iterator, \Countable
{
    use ArrayAccessTrait;   
    use IteratorTrait;
    use StackOperationTrait;

    public function __construct(private array $content = [])
    {
        
    }

    public function count(): int
    {
        return count($this->content);
    }

    public function join(string $glue = ', ') : StringClass 
    {
        return new StringClass(implode($glue, $this->content));    
    }

    /**
     * Interceptor for usage in string context
     * 
     * @TODO format string representation according to $mode 
     *
     * @param string $mode
     * @return Stringable
     */
    public function __toString(string $mode = 'Foo'): Stringable
    {
        return $this->join();
    }

    public function trim(): self
    {
        if(empty($this->content[0])) {
            $this->shift();
        }
        if(empty($this->content[$this->count()-1])) {
            $this->pop();
        }
        return $this;
    }
}