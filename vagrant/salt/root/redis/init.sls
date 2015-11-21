redis-server:
    pkg.installed

/etc/redis/redis.conf:
    file.managed:
        - source: salt://redis/redis.conf
        - require:
            - pkg: redis-server
#TODO: OAuth Client ID for the default client
{% set clientid = 'Relay' %}

#TODO: OAuth Client Secret for the default client
{% set clientsecret = 'A82sX2VkEGoUb2SX13YOvjs9DsfVHT5DBh3OwS22' %}

#Set test oauth client in Redis
echo 'SET oauth_clients:{{ clientid }} "{\"client_secret\":\"{{ clientsecret }}\",\"scope\":\"client\"}"' | redis-cli -x:
    cmd.run:
        - require:
            - pkg: redis-server
