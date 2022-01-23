/*
 * IntroHints
 * Brett Witty
 */

#include <kitchen.t>

//
// add some basic introductory hints to the game
//

TopHintMenu 'Hints';

+ HintMenu 'The Basics';

++ Goal 'Where am I?'
    ['You are in the TADS Cookbook kitchen.']
    openWhen = true
;

++ Goal 'Who am I?'
    ['You are the AFGNCAAP: the ageless, faceless, gender-neutral, culturally-ambiguous adventure person.']
    openWhen = true
;

//
// disable HINT warning messages
//

InitObject
    execute() {
        sessionHintStatus.hintWarning = true;
        gameHintStatus.hintWarning = true;
    }
;

//
// Map HELP to HINT
//

DefineIAction(Help)
    execAction() {
        if (gHintManager != nil)
            gHintManager.showHints();
        else
            mainReport(gLibMessages.hintsNotPresent);
    }
;

VerbRule(Help)
    'help'
    : HelpAction
    verbPhrase = 'show/showing help'
;
