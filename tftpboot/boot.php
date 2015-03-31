#!ipxe


menu Please choose an operating system to boot
item centos5    CentOS 5
item centos6    CentOS 6
item centos6pxe CentOS 6 PXE
item reboot     Reboot
choose target && goto ${target}

:centos5

:centos6
kernel http://centos.mirror.ptisp.pt/centos/6.6/os/x86_64/isolinux/vmlinuz 
initrd http://centos.mirror.ptisp.pt/centos/6.6/os/x86_64/isolinux/initrd.img ks=https://raw.githubusercontent.com/pintoj/pepsi-challenge/master/tftpboot/ks/ks6.cfg
boot

:centos6pxe
kernel http://mirror.centos.org/centos-6/6/os/x86_64/images/pxeboot/vmlinuz unsupported_hardware text NOVERIFYSSL ks=https://raw.githubusercontent.com/pintoj/pepsi-challenge/master/tftpboot/ks/ks6.cfg ksdevice=bootif ip=dhcp
initrd http://mirror.centos.org/centos-6/6/os/x86_64/images/pxeboot/initrd.img
boot

:reboot
