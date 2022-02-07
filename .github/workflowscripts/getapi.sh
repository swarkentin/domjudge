#!/bin/sh

set -eux 

curl http://localhost/domjudge/api/doc.json > ./openapi.json
cat openapi.json
python3 -m json.tool < ./openapi.json
