#!/bin/bash
for file in `ls .wemy/source`
    do
      if [[ -d ".wemy/source/$file" ]]; then
        rm -rf ".wemy/projects/$file"
        mkdir -p ".wemy/projects/$file"
        cp -rf ".wemy/source/$file/$file/Package/" ".wemy/projects/$file/"
        echo "successful copy $file to projects folder"
			fi
    done

cd ./ && ./gen.sh
