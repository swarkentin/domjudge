#!/bin/sh

set -eux 

curl --cacert /tmp/server.crt https://localhost/domjudge/api/doc.json > ./openapi.json
cat openapi.json

# print the logs!
cat /home/runner/domjudge/domserver/webapp/var/log/*

python3 -m json.tool < ./openapi.json
