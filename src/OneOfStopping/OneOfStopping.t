/*
 * OneOfStopping
 * Jim Nelson
 */

#include <kitchen.t>

modify kitchen
  desc = "
  <<one of>>
    You're in kitchen stocked with all the modern conveniences.
  <<or>>
    You're in a kitchen.
  <<stopping>>"
;

+ Thing 'a cooking pot' 'cooking pot'
  desc = "
  <<one of>>
    It's a stainless-steel cooking pot, well-seasoned by use and time.
  <<or>>
    It's a stainless-steel cooking pot.
  <<or>>
    It's a cooking pot.
  <<stopping>>
  "
;
