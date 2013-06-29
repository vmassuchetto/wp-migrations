mysqldump -u user -ppass db | bzip2 > dump.sql.bz2
scp dump.sql.bz2 user@host:~/
ssh user@host "bunzip2 -c dump.sql.bz2 | mysql -uuser -ppass db"

