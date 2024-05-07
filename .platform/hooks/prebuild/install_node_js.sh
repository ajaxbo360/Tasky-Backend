#!/bin/sh

# Install Node alongside with the paired NPM release

if [[ ! "$(node --version)" =~ "v20" ]]; then
    sudo yum remove -y nodejs npm

    sudo rm -fr /var/cache/yum/*

    sudo yum clean all

    curl --silent --location https://rpm.nodesource.com/setup_20.x | sudo bash -

    sudo yum install nodejs -y
fi
