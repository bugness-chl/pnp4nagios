<?php
#
# Copyright (c) 2006-2010 Joerg Linge (http://www.pnp4nagios.org)
#
include 'arrayfix.php';

$opt[1] = "--vertical-label \"Response Time\"  --title \"Response Time For $hostname / $servicedesc\" ";

$def[1] =  "DEF:var1=$RRDFILE[1]:$DS[1]:AVERAGE " ;
$def[1] .= "AREA:var1#00FF00:\"Response Times \" " ;
$def[1] .= "LINE1:var1#000000:\"\" " ;
$def[1] .= "GPRINT:var1:LAST:\"%3.4lg %s$UNIT[1] LAST \" "; 
$def[1] .= "GPRINT:var1:MAX:\"%3.4lg %s$UNIT[1] MAX \" "; 
$def[1] .= "GPRINT:var1:AVERAGE:\"%3.4lg %s$UNIT[1] AVERAGE \" "; 
?>
