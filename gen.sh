#!/bin/bash
find ../ -name ".DS_Store" -depth -exec rm {} \;

for file in `ls ..huynt/projects`
    do
      if [[ -d "..huynt/projects/$file" ]]; then
        mkdir -p "./debs/$file"
        dpkg-deb -bZgzip "..huynt/projects/$file" "./debs/$file"
			fi
    done

dpkg-scanpackages -m ./debs > ./Packages
bzip2 -fks ./Packages
