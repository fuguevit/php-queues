<?php

namespace Fuguevit\Queues;

abstract class Consumer
{
    protected $queue;

    protected $options;

    public function __construct($queue, $logCbFunction = null, $isPrintConsumeLog = false, $options)
    {
        $this->queue = $queue;
        $this->options = $options;

    }
}