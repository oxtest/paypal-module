if getent hosts host.docker.internal; then
  echo -e "\n it already exists" 
else
  echo -e "`/sbin/ip route|awk '/default/ { print $3 }'`\thost.docker.internal" >> /etc/hosts 
  echo "added host.docker.internal to hosts"
fi