<?php  declare(strict_types=1);
/**
 * Trait for classes implementing stack operations
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/WebP5
 * @package WebP5
 * @version 0.1
 * @since 2024-01-09
 */

 namespace SchrodtSven\WebP5\Type\Dry;

trait StackOperationTrait
{
    /**
     * Push elements onto the end of array
     *
     * @param mixed $value
     * @return self
     */   
    public function push(mixed $value): self
    {
        array_push($this->current, $value);
        return $this;
    }
   
    /**
     * Pop the element off the end of array
     *
     * @return mixed
     */
    public function pop(): mixed
    {
        return array_pop($this->current);
    }
 
    /**
     * Prepend elements to the beginning of an array
     *
     * @param mixed $value
     * @return self
     */
    public function unshift(mixed $value): self
    {
        array_unshift($this->current, $value);
        return $this;
    }
    /**
     * Shift an element off the beginning of an array
     *
     * @return mixed
     */
    public function shift(): mixed
    {
        return array_shift($this->current);
    }

    /**
     * Gets the first key|index of an array
     *
     * @return string|integer|null
     */
    public function firstKey(): string|int|null
    {
        return array_key_first($this->current);
    }

    /**
     * Gets the last key|index of an array
     *
     * @return string|integer|null
     */
    public function lastKey(): string|int|null
    {
        return array_key_last($this->current);
    }
}