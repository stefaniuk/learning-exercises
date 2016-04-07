MASERT_IP=$(docker inspect --format '{{ .NetworkSettings.Networks.project_default.IPAddress }}' master)
SLAVE1_IP=$(docker inspect --format '{{ .NetworkSettings.Networks.project_default.IPAddress }}' slave1)
SLAVE2_IP=$(docker inspect --format '{{ .NetworkSettings.Networks.project_default.IPAddress }}' slave2)

echo "master: $MASERT_IP"
echo "slave1: $SLAVE1_IP"
echo "slave2: $SLAVE2_IP"

exit 0

redis-cli -h $SENTINEL_IP -p 26379 KEYS '*'
echo ------------------------------------------------
redis-cli -h $SLAVE_IP SET mykey myvalue
echo ------------------------------------------------
redis-cli -h $SENTINEL_IP -p 26379 KEYS '*'
echo ------------------------------------------------
redis-cli -h $SLAVE_IP DEL mykey
echo ------------------------------------------------
redis-cli -h $SENTINEL_IP -p 26379 KEYS '*'

echo Redis master: $MASERT_IP
echo Redis Slave: $SLAVE_IP
echo ------------------------------------------------
echo Initial status of sentinel
echo ------------------------------------------------
docker-compose run --rm master redis-cli -h $SENTINEL_IP -p 26379 info Sentinel

echo ------------------------------------------------
echo Stop Redis master
docker pause project_master_1
sleep 5
echo Current infomation of sentinel
docker-compose run --rm master redis-cli -h $SENTINEL_IP -p 26379 info Sentinel

echo ------------------------------------------------
echo Start Redis master
docker unpause project_master_1
sleep 5
echo Current infomation of sentinel
docker-compose run --rm master redis-cli -h $SENTINEL_IP -p 26379 info Sentinel
