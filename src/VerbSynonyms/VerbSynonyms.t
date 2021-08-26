/*
 * VerbSynonyms
 * Jim Nelson
 */

#include <kitchen.t>

Shower: Booth 'a shower stall' 'shower stall' @kitchen
  "A shower stall.  "
  // entering the shower uses it
  dobjFor(Enter) {
    verify() {}
    action() {
      "You feel refreshed.  ";
    }
  }
  // TAKE SHOWER is not what it usually means in IF
  dobjFor(Take) asDobjFor(Enter)
;
