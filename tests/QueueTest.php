<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    private $queue;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $this->queue = new Queue;
    }

    /**
     * New Queue Is Empty
     */
    public function testNewQueueIsEmpty(): \Queue
    {
        $this->assertEquals(0, $this->queue->getCount());

        return $this->queue;
    }

    /**
     * An Item Is Added To The Queue
     *
     * @depends testNewQueueIsEmpty
     * @param \Queue $queue
     */
    public function testAnItemIsAddedToTheQueue(Queue $queue): void
    {
        $queue->push('green');

        $this->assertEquals(1, $queue->getCount());
    }

    /**
     * An Item Is Removed From The Queue
     */
    public function testAnItemIsRemovedFromTheQueue(): void
    {
        $this->queue->push('green');

        $item = $this->queue->pop();

        $this->assertEquals(0, $this->queue->getCount());

        $this->assertEquals('green', $item);
    }

    /**
     * An Item Is Removed From The Front Of The Queue
     */
    public function testAnItemIsRemovedFromTheFrontOfTheQueue(): void
    {
        $this->queue->push('red');
        $this->queue->push('orange');

        $this->assertEquals('red', $this->queue->pop());
    }

    /**
     * Clear All Items Of The Queue
     */
    public function testClearAllItemsOfTheQueue(): void
    {
        $this->queue->push('red');
        $this->queue->push('orange');
        $this->queue->clear();

        $this->assertEquals(0, $this->queue->getCount());
    }

    /**
     * Max Number Of Items Can Be Added
     */
    public function testMaxNumberOfItemsCanBeAdded(): \Queue
    {
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++) {
            $this->queue->push($i);
        }

        $this->assertEquals(Queue::MAX_ITEMS, $this->queue->getCount());

        return $this->queue;
    }

    /**
     * Exception Throw When Adding An Item To A Full Queue
     *
     * @depends testMaxNumberOfItemsCanBeAdded
     * @param \Queue $queue
     */
    public function testExceptionThrowWhenAddingAnItemToAFullQueue(Queue $queue): void
    {
        $this->expectException(QueueException::class);

        $this->expectExceptionMessage('Queue is full');

        $queue->push('black');
    }

}