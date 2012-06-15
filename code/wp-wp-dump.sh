mysqldump -u user -ppass db | bzip2 > dump.sql.bz2
scp dump.sql.bz2 user@host:~/
ssh user@host "bunzip2 dump.sql.bz2"
ssh user@host "mysql -u user -ppass db < dump.sql"

