
couchbase-cli cluster-init --cluster server1.poc --cluster-username admin --cluster-password totototo --cluster-name poc

couchbase-cli server-add --cluster server1.poc --services data --server-add server2.poc,server3.poc --username admin --password totototo --server-add-username admin --server-add-password totototo

couchbase-cli rebalance --username admin --password totototo --cluster server1.poc

couchbase-cli bucket-create --username admin --password totototo --cluster server1.poc --bucket mem --bucket-type memcached --bucket-ramsize 128 --bucket-port 11212
