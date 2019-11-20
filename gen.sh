#!/bin/bash
find ../ -name ".DS_Store" -depth -exec rm {} \;

for file in `ls ..wemy/projects`
    do
      if [[ -d "..wemy/projects/$file" ]]; then
        mkdir -p "./debs/$file"
        dpkg-deb -bZgzip "..wemy/projects/$file" "./debs/$file"
			fi
    done

dpkg-scanpackages -m ./debs > ./Packages
bzip2 -fks ./Packages
