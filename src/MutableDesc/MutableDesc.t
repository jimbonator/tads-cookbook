/*
 * MutableDesc
 * Jim Nelson
 */

#include <kitchen.t>

/********** DON'T DO THIS ****************
pushMe: Button 'a button' 'button' @kitchen
  isOn = nil
  dobjFor(Push) {
    action() {
      isOn = !isOn;
      "You push the button.  ";
      desc = isOn ? "Pulsing." : "Lifeless.";
    }
  }
;
******************************************/

/* DO THIS: */
pushMe: Button 'a button' 'button' @kitchen
  desc {
    if (isOn)
      "The button pulses with dancing, vibrant colors.  ";
    else
      "Gray.  Lifeless.  Bereft of life.  ";
  }

  isOn = nil
  dobjFor(Push) {
    action() {
      isOn = !isOn;
      "You push the button.  ";
    }
  }
;
