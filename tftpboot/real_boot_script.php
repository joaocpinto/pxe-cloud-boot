#!ipxe

kernel http://centos.mirror.ptisp.pt/centos/6.6/os/x86_64/isolinux/vmlinuz bootfile=https://raw.githubusercontent.com/pintoj/pepsi-challenge/master/tftpboot/real_boot_script.php fastboot initrd=http://centos.mirror.ptisp.pt/centos/6.6/os/x86_64/isolinux/initrd.img
initrd http://centos.mirror.ptisp.pt/centos/6.6/os/x86_64/isolinux/initrd.img ks=https://raw.githubusercontent.com/pintoj/pepsi-challenge/master/tftpboot/ks/ks6.cfg
boot


