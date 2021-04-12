<?php
require_once 'Queue.php';

$queue = new Queue();

$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);

for ($i = 0; $i < 2; $i++) {
    $queue->dequeue();
}

var_dump($queue->isEmpty());

$queue->enqueue(4);
$queue->enqueue(5);

for ($i = 0; $i < 3; $i++) {
    $queue->dequeue();
}

var_dump($queue->isEmpty());
