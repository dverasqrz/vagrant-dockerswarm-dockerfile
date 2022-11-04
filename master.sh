#!/bin/bash
sudo docker swarm init --advertise-addr=150.165.250.207
sudo docker swarm join-token worker | grep docker > /vagrant/worker.sh