#!/bin/bash

SCRIPT_DIR=$(cd $(dirname $0); pwd)
cat $SCRIPT_DIR/../version.php | grep -e '$plugin\s*->\s*version' | sed -r 's/^.*\$plugin->version\s*=\s*([0-9]{10})\s*.*$/\1/'
