# -*- coding: utf-8 -*-
# statichtml-maker.py

import sys, re
import os.path

argvs = sys.argv

infilename = argvs[1]

path, ext = os.path.splitext(infilename)
filepath, basename = os.path.split(infilename)
filename, ext = os.path.splitext(basename)

outfilename = "_" + filename + ".html"


infile = open(infilename, "r")
outfile = open(outfilename, "w")

for line in infile:
	line = re.sub("\"js", "\"/js", line)
	line = re.sub("\"css", "\"/css", line)
	line = re.sub("\"images", "\"/images", line)
	outfile.write(line)

infile.close()
outfile.close()
