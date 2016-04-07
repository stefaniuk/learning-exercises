#!/bin/bash
set -e

if [ $NODE_TYPE == "slave" ]; then
    echo "slaveof master 6379" >> /usr/local/etc/redis/redis.conf
fi

if [ $NODE_TYPE == "sentinel" ]; then
    redis-server /usr/local/etc/redis/sentinel.conf --sentinel
else
    redis-server /usr/local/etc/redis/redis.conf
fi
