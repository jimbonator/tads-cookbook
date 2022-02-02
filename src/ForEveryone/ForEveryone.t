//
// ForEveryone
// BlindHunter95
//

#include <kitchen.t>

screenReaderInit: InitObject
  execute()
  {
    "\bAre you using a screen reader to play this story? (Yes or no.)";
    if(yesOrNo())
    {
      statusLine.statusDispMode = StatusModeText;
    }
  }
;
