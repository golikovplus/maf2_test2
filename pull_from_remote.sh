#!/bin/bash

git remote set-url origin git@github.com:Agentology/maf-2-0.git
git checkout develop
git pull
git remote set-url origin git@github.com:golikovplus/maf2_test2.git
git remote -v
git push origin master
