#!/bin/bash

docker run -d -p 80:2015 -v $(pwd)/Caddyfile:/etc/Caddyfile -v $(pwd):/srv abiosoft/caddy:php
