/*
 * DecorationFixtureImmovable
 * Jim Nelson
 */

#include <kitchen.t>

modify kitchen
  desc = "Beside the kitchen sink is a vase on a cutting board.  "
;

vase: Decoration 'vase' 'vase' @cuttingBoard
  "It's a vase.  "
;

sink: Fixture, OnOffControl 'kitchen sink' 'kitchen sink' @kitchen
  "It's a kitchen sink.  The water is <<isOn ? 'running' : 'not running'>>.  "
;

cuttingBoard: Surface, Immovable 'cutting board' 'cutting board' @kitchen
  "It's a cutting board.  "
;
