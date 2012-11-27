#!/usr/bin/env sh
link=/home/user/bitnami/apache2/bin//BasementGHT.idd
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/BasementGHT.idd ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//SlabGHT.idd
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/SlabGHT.idd ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//V7-0-0-Energy+.idd
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/V7-0-0-Energy+.idd ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//V7-1-0-Energy+.idd
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/V7-1-0-Energy+.idd ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//basement
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/basement ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//convertesomtr
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/convertesomtr ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//dos2unix
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/dos2unix ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//energyplus
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/energyplus ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//epmacro
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/epmacro ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//expandobjects
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/expandobjects ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//hvacdiagram
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/hvacdiagram ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//parametricpreprocessor
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/parametricpreprocessor ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//readvars
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/readvars ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//runenergyplus
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/runenergyplus ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//runepmacro
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/runepmacro ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//runreadvars
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/runreadvars ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//slab
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/slab ]; then
rm -f $link
fi
fi
link=/home/user/bitnami/apache2/bin//transition-V7-0-0-to-V7-1-0
if [ -h $link ]; then
if [ `readlink $link` = /home/user/bitnami/apache2/htdocs//EnergyPlus-7-1-0/bin/transition-V7-0-0-to-V7-1-0 ]; then
rm -f $link
fi
fi
      rm -f "/home/user/bitnami/apache2/bin//epcompare"
      rm -f "/home/user/bitnami/apache2/bin//idfversionupdater"
echo "Symbolic links to this installation of EnergyPlus have been removed."
echo "You may remove the EnergyPlus directory to completely uninstall the software."
