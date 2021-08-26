/*
 * Keyboard
 * Jim Nelson
 */

#include <kitchen.t>

Keyboard: Thing 'a keyboard' 'keyboard' @kitchen
  "A keyboard.  "
  // permit typing on the keyboard, but ask what the player wishes to type
  dobjFor(TypeOn) {
    verify() {}
  }
  // accept string literals
  dobjFor(TypeLiteralOn) {
    verify() {}
    action() {
      local typed = gLiteral;
      "You type <q><<typed>></q> on the keyboard.  ";
    }
  }
;
