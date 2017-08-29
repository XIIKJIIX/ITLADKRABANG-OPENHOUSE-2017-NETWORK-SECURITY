#!/bin/bash
echo "------------- Build base image -------------"
docker build -t oph2017base -f ./BaseImage/Dockerfile ./BaseImage/
echo "------------- Starting container -------------"
docker-compose up $1
