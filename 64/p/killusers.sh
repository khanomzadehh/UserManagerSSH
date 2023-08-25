#!/bin/bash
#By Hamed Ap

chmod 0644 /var/log/auth.log

i=0
while [ $i -lt 20 ]; do 
php /var/www/html/p/kill.php &
  sleep 3
  i=$(( i + 1 ))
done
