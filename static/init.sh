#!/bin/bash

docker run --name static -d -p 80:2015 -v $(pwd)/Caddyfile:/etc/Caddyfile -v $(pwd)/files:/srv abiosoft/caddy:latest