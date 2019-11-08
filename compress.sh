#!/bin/bash
BRACE_EXPANSION=$(echo interview-preparation-kit-1/{array-stats,format-date,array-stats,highest-frequency,grammar,mirror-sequence,min-max-sum,repeated-string,number-of-leds,socket-merchant,rot-left,zero-means-zero}/{js,php,ruby}/{code,response})
for i in $BRACE_EXPANSION; do
  # echo "$i"; 
  zip -r "$i".zip "$i"
done;
