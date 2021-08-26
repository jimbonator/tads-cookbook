/*
 * kitchen.t
 */

#include <tads.h>
#include <adv3.h>
#include <en_us.h>

gameMain: GameMainDef
  initialPlayerChar = me
;

versionInfo: GameID
;

kitchen: Room 'Kitchen'
;

me: Actor
  location = kitchen
;
