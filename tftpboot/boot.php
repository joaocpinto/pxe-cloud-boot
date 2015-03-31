#!ipxe


menu Please choose an operating system to boot
item centos5    CentOS 5
item centos6    CentOS 6
item reboot     Reboot
choose target && goto ${target}

:centos5

:centos6

:reboot
