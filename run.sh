#!/bin/sh

if [ "$STDOUT" = "false" ]; then
    stdout=false
else
    stdout=true
fi

bin/sms-bombing $PHONE \
    --num=$NUM \
    --loop=$LOOP \
    --intervals=$INTERVALS \
    --timeout=$TIMEOUT \
    --length=$LENGTH \
    --stdout=$stdout
