#!/bin/bash

SCRIPT_DIR=$(cd $(dirname $0); pwd)
version=$($SCRIPT_DIR/get-version.sh)

if [ -z "${1}" ]; then
    outputFile="badge-${version}"
else
    outputFile=$1
fi

pushd $SCRIPT_DIR/../../
zip -r $SCRIPT_DIR/../$outputFile badge -x "*.git/*" "*.devcontainer/*" "*.vscode/*" "*scripts/*" "*vendor/*" "*.DS_Store" "*__MACOSX*"
popd
