#!/bin/sh

t3make -o "bin/$1/$1.t3" -d -we -FC -Fy obj/lite -Fo obj/lite -I src -f cooking_lite.t3m -source "src/$1/$1.t" && frob "bin/$1/$1.t3"
