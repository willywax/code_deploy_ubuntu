#!/bin/bash
sudo su
service nginx restart > /var/log/nginx.out 2>&1
