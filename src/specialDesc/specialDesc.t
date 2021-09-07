/*
 * specialDesc
 * Jim Nelson
 */

#include <kitchen.t>

modify kitchen
  desc = "You're in the kitchen.  "
;

nickel: Thing 'a nickel' 'nickel' @kitchen
;

quarter: Thing 'a quarter' 'quarter' @kitchen
  specialDesc = "Your lucky quarter is here.  "
;

penny: Thing 'a penny' 'penny' @kitchen
  specialDesc = "A shiny penny gleams up at you.  "
;

dime: Thing 'a dime' 'dime' @kitchen
  specialDesc = "There's a solid-looking dime here waiting to be picked up.  "
;
