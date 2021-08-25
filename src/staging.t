/*
 * staging.t
 */

#include <tads.h>
#include <en_us.h>

gameMain: GameMainDef
  initialPlayerChar = me
;

versionInfo: GameID
;

stagingArea: Room 'Staging Area'
;

me: Actor
  location = stagingArea
;
