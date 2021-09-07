/*
 * MultiLoc
 * Jim Nelson
 */

#include <kitchen_lite.t>

modify kitchen
  north = diningRoom
;

class NiceRoom: Room
;

diningRoom: NiceRoom 'Dining room'
  north = livingRoom
  south = kitchen
;

livingRoom: NiceRoom 'Living room'
  south = diningRoom
;

// smoke is present in the kitchen and the rooms near it
smoke: MultiLoc, Odor 'a smell of smoke'
  "It's the distinct smell of blackened catfish.  "
  locationList = [ kitchen, livingRoom, diningRoom ]
;

// wallpaper is present only in the NiceRooms of the house
wallpaper: MultiLoc, Decoration 'yellow wallpaper'
  "The wallpaper is a maddening shade of yellow.  "
  initialLocationClass = NiceRoom
;
