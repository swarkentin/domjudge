#!/bin/sh

set -eux 

curl --cacert /tmp/server.crt https://localhost/api/doc.json > ./openapi.json
cat openapi.json
python3 -m json.tool < ./openapi.json
