<?php
#
# Copyright (c) 2006-2010 Joerg Linge (http://www.pnp4nagios.org)
#
include 'arrayfix.php';
$opt[1] = "--vertical-label \"Connection Time\" --title \"Connection Time $hostname / $servicedesc\" ";


$def[1] =  "DEF:var1=$RRDFILE[1]:$DS[1]:AVERAGE " ;
$def[1] .= "AREA:var1#F2F2F2:\"\" " ;
$def[1] .= "LINE1:var1#F30000:\"Connection Time\" " ;
$def[1] .= "GPRINT:var1:LAST:\"%3.2lf LAST \" "; 
$def[1] .= "GPRINT:var1:MAX:\"%3.2lf MAX \" "; 
$def[1] .= "GPRINT:var1:AVERAGE:\"%3.2lf AVERAGE \" "; 
?>
