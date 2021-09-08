<?php

$topics = [
  new Topic('Game', 'GameID', [
    'GameID',
    'GameMainDef',
    '---',
    'Achievement',
    'FinishOption',
    'FinishType',
    'Goal',
  ], [
    'A minimal game definition' => 'manual/mingame.htm',
    'Beginnings' => 'manual/beginning.htm',
    'Endings' => 'manual/ending.htm',
    'IFID generator' => 'http://www.tads.org/ifidgen/ifidgen',
    'Scoring' => 'manual/score.htm',
  ]),

  new Topic('Tangibles', 'Thing', [
    'Thing',
    'Button',
    'Decoration', [
      'Distant',
      'Heavy',
      'Unthing',
    ],
    'Fixture', [
      'Component',
    ],
    'Food',
    'Immovable',
    'Wearable'
  ], [
    'Things' => 'manual/thing.htm',
  ]),

  new Topic('Locations & travel', 'Room', [
    'Room',
    'Booth',
    'Door', [
      'SecretDoor',
    ],
    'Enterable',
    'Floor',
    'MultiLoc',
    'Passage', [
      'PathPassage',
    ],
    'Region', [
      'SenseRegion',
    ],
    'StairwayDown',
    'StairwayUp',
    'TravelBarrier',
    'TravelConnector',
  ], [
    'Rooms & regions' => 'manual/room.htm',
    'Room descriptions' => 'manual/roomdesc.htm',
    'Doors' => 'manual/door.htm',
    'Travel connectors and barriers' => 'manual/travel.htm',
    'MultiLocs' => 'manual/multiloc.htm',
    'Exits' => 'manual/exit.htm',
  ]),

  new Topic('Containers & surfaces', 'Container', [
    'Container', [
      'OpenableContainer',
      'KeyedContainer',
      'LockableContainer',
    ],
    'Platform',
    'RearContainer',
    'Surface',
    'Underside',
  ]),

  new Topic('Gadgetry', '', [
    'Key',
    'Lever',
    'Settable', [
      'Dial',
      'NumberedDial',
    ],
    'Switch', [
      'Flashlight'
    ],
  ], [
    'Keys' => 'manual/key.htm',
    'Gadgets' => 'manual/gadget.htm',
  ]),

  new Topic('Attachables', '', [
    'SimpleAttachable', [
      'Attachable',
      'AttachableComponent',
      'NearbyAttachable',
    ],
    'PlugAttachable',
  ], [
    'Attachables' => 'manual/attachable.htm',
  ]),

  new Topic('Actions, verbs, & Doers', 'Action', [
    'Action',
    'Doer',
    'SystemAction',
    'TAction',
    'TIAction',
  ], [
    'Actions' => 'manual/action.htm',
    'Doers' => 'manual/doer.htm',
  ]),

  new Topic('Actors, NPCs, & conversations', 'Actor', [
    'Actor',
    'ActorState',
    'ActorTopicEntry',
    'AgendaItems',
    '!Greetings', [
      'ActorHelloTopic',
      'ActorByeTopic',
      'BoredByeTopic',
      'ByeTopic',
      'HelloTopic',
      'LeaveByeTopic',
    ],
    '!Requests', [
      'AskAboutForTopic',
      'AskForTopic',
      'AskTellGiveShowTopic',
      'AskTellShowTopic',
      'AskTellTopic',
      'AskTopic',
      'CommandTopic',
      'GiveTopic',
      'GiveShowTopic',
      'ShowTopic',
      'TellTalkShowTopic',
    ],
    '!Love & war', [
      'HitTopic',
      'KissTopic',
      'TouchTopic',
    ],
    '!Q & A', [
      'YesNoTopic',
      'YesTopic',
      'NoTopic',
    ],
    '!Talking', [
      'QueryTopic',
      'SayTopic',
      'AskTalkTopic',
      'AskTellTalkTopic',
      'TellTalkTopic',
      'TellTalkShowTopic',
      'TellTopic',
    ],
    'DefaultTopic',
  ], [
    'Actors' => 'manual/actor.htm',
  ]),

  new Topic('Consultables & knowledge', 'Consultable', [
    'Consultable',
    'Topic',
    'Thought',
  ], [
    'Topics' => 'manual/topic.htm',
    'Topic Entries' => 'manual/topicentry.htm',
    'Thoughts' => 'manual/thought.htm',
  ]),

  new Topic('Events & scenes', '', [
    'Daemon', [
      'SenseDaemon',
    ],
    'EventList', [
      'CyclicEventList',
      'ExternalEventList',
      'RandomEventList',
      'ShuffledEventList',
      'StopEventList',
      'SyncEventList',
    ],
    'Fuse', [
      'SenseFuse',
    ],
    'OneTimePromptDaemon',
    'PromptDaemon',
    'Scene',
  ], [
    'Events' => 'manual/event.htm',
    'EventList' => 'manual/eventlist.htm',
    'Scenes' => 'manual/scene.htm',
  ]),

  new Topic('Sensory', '', [
    'Noise',
    'Odor',
    'SenseRegion',
  ], [
    'SenseRegion' => 'manual/senseregion.htm',
  ]),

  new Topic('Hints & menus', '', [
    'Hint',
    'ExtraHint',
    'HintMenu',
    '---',
    'MenuItem',
    'MenuTopicItem',
    'MenuLongTopicItem',
  ], [
    'Menus' => 'manual/menu.htm',
    'Hints' => 'manual/hint.htm',
  ]),

  new Topic('System', '', [
    'InitObject',
    'Object',
    'PreinitObject',
    'PreRestartObject',
    'PreSaveObject',
  ]),
];