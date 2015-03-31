#!ipxe

kernel http://centos.mirror.ptisp.pt/centos/6.6/os/x86_64/isolinux/vmlinuz bootfile=http://boot.ipxe.org/demo/boot.php fastboot initrd=http://centos.mirror.ptisp.pt/centos/6.6/os/x86_64/isolinux/initrd.img
initrd http://centos.mirror.ptisp.pt/centos/6.6/os/x86_64/isolinux/initrd.img ks=https://raw.githubusercontent.com/pintoj/pepsi-challenge/master/tftpboot/ks/ks6.cfg
boot

#LABEL reboot
#    COM32 reboot.c32
#
#LABEL centos6
#    MENU LABEL ^CentOS 6 From mirrors and Kickstart
#    MENU DEFAULT
#    LINUX http://centos.mirror.ptisp.pt/centos/6.6/os/x86_64/isolinux/vmlinuz
#    APPEND initrd=http://centos.mirror.ptisp.pt/centos/6.6/os/x86_64/isolinux/initrd.img ks=http://172.17.200.10/anaconda-ks.cfg ramdisk_size=10000
#
#LABEL centos5
#    MENU LABEL ^CentOS 5 From mirrors and Kickstart
#    MENU DEFAULT
#    LINUX http://centos.mirror.ptisp.pt/centos/5.11/os/x86_64/isolinux/vmlinuz
#    APPEND initrd=http://centos.mirror.ptisp.pt/centos/5.11/os/x86_64/isolinux/initrd.img ks=http://172.17.200.10/ks5.cfg ramdisk_size=10000

