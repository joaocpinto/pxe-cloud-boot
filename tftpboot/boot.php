#!ipxe


menu Please choose an operating system to boot
item centos5    CentOS 5
item centos6    CentOS 6
item reboot     Reboot
choose target && goto ${target}

:centos5
kernel http://centos.mirror.ptisp.pt/centos/5.11/os/x86_64/images/pxeboot/vmlinuz unsupported_hardware text NOVERIFYSSL ks=http://172.17.200.10/ks5.cfg ksdevice=bootif ip=dhcp
initrd http://centos.mirror.ptisp.pt/centos/5.11/os/x86_64/images/pxeboot/initrd.img
boot

:centos6
kernel http://mirror.centos.org/centos-6/6/os/x86_64/images/pxeboot/vmlinuz unsupported_hardware text NOVERIFYSSL ks=https://raw.githubusercontent.com/pintoj/pepsi-challenge/master/tftpboot/ks/ks6.cfg ksdevice=bootif ip=dhcp
initrd http://mirror.centos.org/centos-6/6/os/x86_64/images/pxeboot/initrd.img
boot

:reboot
