<?php


namespace App\Support;


use App\Constants\RedisSubscribeChan;

class MessageProducer
{
    /**
     * @param string $event
     * @param array  $data
     * @param array  $options
     * @return array
     */
    public static function create(string $event, array $data, array $options = [])
    {
        return [
            'uuid'    => uniqid((strval(mt_rand(0, 1000)))),
            'event'   => $event,
            'data'    => $data,
            'options' => $options
        ];
    }

    /**
     * @param array $message
     */
    public static function publish(array $message)
    {
        push_redis_subscribe(RedisSubscribeChan::WEBSOCKET_CHAN, $message);
    }
}