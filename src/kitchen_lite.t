/*
 * kitchen_lite.t
 *
 * Staging for recipes using the adv3Lite library.
 */

#include <tads.h>
#include "advlite.h"

gameMain: GameMainDef
  initialPlayerChar = me
;

versionInfo: GameID
;

kitchen: Room 'Kitchen'
;

me: Thing 'me'
  location = kitchen
  isFixed = true
  proper = true
  person = 2
  ownContents = true
  contType = Carrier
;
