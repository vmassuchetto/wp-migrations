TABLES=""
for T in `mysql -u user -ppass db -N -s -e "SHOW TABLES"`; do
    TABLES="tables[]=${TABLES}&"
done
