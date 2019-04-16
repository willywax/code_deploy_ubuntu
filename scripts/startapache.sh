#!/bin/bash
sudo su
service nginx start > /var/log/restartnginx.out 2>&1
