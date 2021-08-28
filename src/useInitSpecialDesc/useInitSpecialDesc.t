/*
 * useInitSpecialDesc
 * Jim Nelson
 */

#include <kitchen.t>

fnortiner: Thing 'a fnortiner' 'fnortiner' @kitchen
  "It's an everyday, run-of-the-null fnortiner.  "

  // introduction initSpecialDesc, printed only the first time the item is listed
  // in the room's inventory
  introduced = nil
  useInitSpecialDesc = !introduced
  initSpecialDesc {
    "Wow!  On the floor is a dual-overhead oscillating fnortiner!  ";
    introduced = true;
  }

  // custom description printed thereafter
  specialDesc = "Meh.  A fnortiner is here.  "
;
