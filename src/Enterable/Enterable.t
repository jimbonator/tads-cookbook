/*
 * Enterable
 * Jim Nelson
 */

#include <kitchen.t>

modify kitchen
  desc = "A walk-in pantry is here.  "
  in = pantry
;

+ Enterable 'a pantry'
  connector = pantry
;

pantry: Room 'Walk-in Pantry' 'a pantry'
  out = kitchen
;
