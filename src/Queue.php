<?php

/**
 * Queue
 *
 * A first-in, first-out data structure
 */
class Queue
{
    /**
     * MAX_ITEMS in Queue
     */
    public const MAX_ITEMS = 5;

    /**
     * Queue items
     *
     * @var array
     */
    private $items = [];

    /**
     * Add an item to the end of the queue
     *
     * @param mixed $item The item
     * @throws \QueueException
     */
    public function push($item): void
    {
        if ($this->getCount() === static::MAX_ITEMS) {
            throw new QueueException('Queue is full');
        }

        $this->items[] = $item;
    }

    /**
     * Take an item off the head of the queue
     *
     * @return mixed The item
     */
    public function pop()
    {
        return array_shift($this->items);
    }

    /**
     * Get the total number of items in the queue
     *
     * @return integer The number of items
     */
    public function getCount(): int
    {
        return count($this->items);
    }

    /**
     * clear data
     */
    public function clear(): void
    {
        $this->items = [];
    }
}
