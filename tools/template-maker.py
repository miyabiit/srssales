# -*- coding: utf-8 -*-
# wp-page-template-maker.py

import sys, re
import os.path

argvs = sys.argv

infilename = argvs[1]

path, ext = os.path.splitext(infilename)
filepath, basename = os.path.split(infilename)
filename, ext = os.path.splitext(basename)

outfilename = "page-" + filename + ".php"


template_header = """
<?php
/*
Template Name: {template_name} 
*/
?>
""".format(template_name=filename).strip()


infile = open(infilename, "r")
outfile = open(outfilename, "w")
in_head = False

outfile.write(template_header + "\n")
outfile.write('<?php get_header(); ?>' + "\n")
for line in infile:
	#line = line.strip()
	if re.match('<!doctype html>',line):
		continue
	if re.match("<html",line):
		continue
	if re.match("</html>",line):
		continue
	if re.match("</body>",line):
		continue
	if re.match("<head[^e]+",line):
		in_head = True
	if re.match("</head>",line):
		in_head = False
		continue
	if in_head == False:
		line = re.sub("\"js", "\"/js", line)
		line = re.sub("\"css", "\"/css", line)
		line = re.sub("\"images", "\"/images", line)
		line = re.sub("\.html", "", line)
		outfile.write(line)

outfile.write("\n" + '<?php get_footer(); ?>' + "\n")
infile.close()
outfile.close()
