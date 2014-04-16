#!/bin/bash
for((i=1;i<=$1;i++));do
	echo $i
	php queue.php firmy firmyJob $i
done
