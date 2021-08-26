/*
 * AutoClosingDoor
 * Jim Nelson
 */

#include <kitchen.t>

//
// in the kitchen
//

modify kitchen
  out = exitDoor
;

exitDoor: AutoClosingDoor 'door' 'exit door' @kitchen
  "It's a swinging door leading out of the kitchen.  "

  destination = outsideOfKitchen
  otherSide = entranceDoor

  // so it appears in the room description
  isListed = true
;

//
// outside the kitchen
//

outsideOfKitchen: Room 'Outside of kitchen'
  in = entranceDoor
;

entranceDoor: AutoClosingDoor 'door' 'entrance door' @outsideOfKitchen
  "It's a swinging door leading into the kitchen.  "

  destination = kitchen
  otherSide = exitDoor

  // so it appears in the room description
  isListed = true

  // customized message when entering
  reportAutoClose() {
    "<.p>The swinging door closes behind you, leaving you with a mess of pots and pans.  ";
  }
;
