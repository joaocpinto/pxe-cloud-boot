#!/bin/sh

sysctl net.ipv4.conf.all.forwarding=1
iptables -I FORWARD -s 172.17.200.0/24 -i vmnet3 -o eth0 -j ACCEPT
iptables -t nat -I POSTROUTING -s 172.17.200.0/24 -o eth0 -j MASQUERADE
