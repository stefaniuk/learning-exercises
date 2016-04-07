FROM redis

ENV NODE_TYPE=$NODE_TYPE

COPY assets/usr/local/etc/redis/redis.conf /usr/local/etc/redis/redis.conf
COPY assets/usr/local/etc/redis/sentinel.conf /usr/local/etc/redis/sentinel.conf

COPY assets/sbin/init.sh /sbin/init.sh
CMD /sbin/init.sh
