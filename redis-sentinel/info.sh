MASERT_IP=$(docker inspect --format '{{ .NetworkSettings.Networks.project_default.IPAddress }}' master)
SLAVE1_IP=$(docker inspect --format '{{ .NetworkSettings.Networks.project_default.IPAddress }}' slave1)
SLAVE2_IP=$(docker inspect --format '{{ .NetworkSettings.Networks.project_default.IPAddress }}' slave2)
SENTINEL1_IP=$(docker inspect --format '{{ .NetworkSettings.Networks.project_default.IPAddress }}' sentinel1)
SENTINEL2_IP=$(docker inspect --format '{{ .NetworkSettings.Networks.project_default.IPAddress }}' sentinel2)
SENTINEL3_IP=$(docker inspect --format '{{ .NetworkSettings.Networks.project_default.IPAddress }}' sentinel3)

echo
echo "   master: $MASERT_IP"
echo "   slave1: $SLAVE1_IP"
echo "   slave2: $SLAVE2_IP"
echo "sentinel1: $SENTINEL1_IP"
echo "sentinel2: $SENTINEL2_IP"
echo "sentinel3: $SENTINEL3_IP"
echo
echo KEYS
echo ------------------------------------------------
redis-cli -h $SLAVE2_IP KEYS '*'
echo ------------------------------------------------
echo

exit 0
