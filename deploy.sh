#!/usr/bin/env bash

ssh root@mybabymonitor.org "mkdir /srv/project"
scp -r * root@mybabymonitor.org:/srv/project/
