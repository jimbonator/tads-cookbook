<?php

class Adv3Topic extends Topic {
  public function __construct(
    string $title,
    string $default_class,
    array $classes,
    array $extra = []
  ) {
    parent::__construct($title, $default_class, $classes, $extra, 'https://www.tads.org/t3doc/doc/libref/object/');
  }
}

$topics = [
  new Adv3Topic('Game', 'GameID', [
    'GameID',
    'GameMainDef',
    '---',
    'Achievement',
    'FinishOption',
    'FinishType',
  ], [
    'A very simple game' => 'https://www.tads.org/t3doc/doc/gsg/averysimplegame.htm',
    'Starting a new game' => 'https://www.tads.org/t3doc/doc/gsg/startinganewgame.htm',
    'Rewarding the effort' => 'https://www.tads.org/t3doc/doc/gsg/rewardingtheeffort.htm',
    'Ending the game' => 'https://www.tads.org/t3doc/doc/gsg/endingthegame.htm',
    'IFID generator' => 'https://www.tads.org/ifidgen/ifidgen',
    'GameInfo.txt & cover art' => 'https://www.tads.org/howto/gameinfo.htm',
    'Treaty of Babel' => 'https://babel.ifarchive.org',
  ]),

  new Adv3Topic('Tangibles', 'Thing', [
    'Thing', [
      'Hidden',
    ],
    'Decoration', [
      'Distant',
      'Unthing',
      'Intangible',
    ],
    'Fixture', [
      'Component',
      'SecretFixture',
    ],
    'Food',
    'Immovable', [
      'Heavy',
    ],
    'LightSource',
    'Vaporous',
    'Vehicle',
    'Wearable'
  ], [
    'Adding items to the game' => 'https://www.tads.org/t3doc/doc/gsg/addingitemstothegame.htm',
  ]),

  new Adv3Topic('Locations & travel', 'Room', [
    'Room', [
      'DarkRoom',
      'FloorlessRoom',
      'HighNestedRoom',
      'NestedRoom',
      'OutdoorRoom',
      'ShipboardRoom',
    ],
    'Booth',
    'Door', [
      'SecretDoor',
      'HiddenDoor',
      'AutoClosingDoor',
      'ContainerDoor',
    ],
    '!Enter/Exit', [
      'Enterable',
      'EntryPortal',
      'Exitable',
      'ExitPortal',
    ],
    'Floor',
    'Floorless',
    '!Multiples', [
      'MultiLoc',
      'MultiInstance',
      'MultiFaceted',
    ],
    'Passage', [
      'PathPassage',
      'ExitOnlyPassage',
    ],
    'StairwayDown',
    'StairwayUp',
    'TravelBarrier',
    'TravelConnector', [
      'DistanceConnector',
      'DeadEndConnector',
      'FakeConnector',
      'FakeDestination',
      'OneWayRoomConnector',
    ],
    'Direction', [
      'CompassDirection',
      'RelativeDirection',
      'ShipboardDirection',
      'VerticalDirection',
    ],
  ], [
    'Defining our first room' => 'https://www.tads.org/t3doc/doc/gsg/definingourfirstroom.htm',
    'Basic travel' => 'https://www.tads.org/t3doc/doc/gsg/basictravel.htm',
    'Doors and windows' => 'https://www.tads.org/t3doc/doc/gsg/doorsandwindows.htm',
  ]),

  new Adv3Topic('Text, HTML, & multimedia', '', [
    'String',
    'StringBuffer',
  ], [
    'Escaped characters (backslash codes)' => 'https://www.tads.org/t3doc/doc/sysman/strlit.htm#specials',
    'Embedded expressions' => 'https://www.tads.org/t3doc/doc/sysman/strlit.htm#embeddings',
    'Embedded string templates' => 'https://www.tads.org/t3doc/doc/sysman/strlit.htm#strtpl', [
      '<<one of>>' => 'https://www.tads.org/t3doc/doc/sysman/strlit.htm#oneof',
      '<<first time>>' => 'https://www.tads.org/t3doc/doc/sysman/strlit.htm#firstTimeOnly',
    ],
    'Introduction to HTML TADS' => 'https://www.tads.org/t3doc/doc/htmltads/intro.htm',
    'Regular expressions' => 'https://www.tads.org/t3doc/doc/sysman/regex.htm',
    'String methods' => 'https://www.tads.org/t3doc/doc/sysman/string.htm',
    'aHref()' => 'https://www.tads.org/t3doc/doc/libref/file/console.t.html#aHref',
  ]),

  new Adv3Topic('Containers & surfaces', 'Container', [
    'Container', [
      'OpenableContainer',
      'KeyedContainer',
      'LockableContainer',
      'OutOfReach',
    ],
    'Bed',
    'Chair',
    'BagOfHolding',
    'Platform',
    'RearContainer', [
      'RearSurface',
    ],
    '!Restricted', [
      'RestrictedContainer',
      'RestrictedRearContainer',
      'RestrictedRearSurface',
      'RestrictedSurface',
      'RestrictedUnderside',
    ],
    'ContainerDoor',
    'Surface',
    'Underside',
  ]),

  new Adv3Topic('Gadgetry', '', [
    'Button',
    'Key', [
      'Keyring',
      'Lockable',
      'LockableContainer',
      'LockableWithKey',
    ],
    'Lever', [
      'SpringLever',
    ],
    'Settable', [
      'Dial',
      'LabeledDial',
      'NumberedDial',
    ],
    'Switch', [
      'Flashlight',
    ],
    'Candle',
    'Matchbook', [
      'Matchstick',
    ],
    'Dispenser', [
      'Dispensable',
    ],
  ]),

  new Adv3Topic('Attachables', '', [
    'Attachable', [
      'NearbyAttachable',
      'PermanentAttachment',
    ],
    'PlugAttachable',
  ]),

  new Adv3Topic('Actions & verbs', 'Action', [
    'Action',
    'SystemAction',
    'TAction',
    'TIAction',
  ], [
    'Controlling the action' => 'https://www.tads.org/t3doc/doc/gsg/controllingtheaction.htm',
  ]),

  new Adv3Topic('Actors, NPCs, & conversations', 'Actor', [
    'Actor', [
      'Person',
    ],
    'ActorState',
    'AgendaItem', [
      'ConvAgendaItem',
      'DelayedAgendaItem',
    ],
    'InitiateTopic',
    '!Greetings', [
      'ActorHelloTopic',
      'ActorByeTopic',
      'BoredByeTopic',
      'ByeTopic',
      'HelloTopic',
      'LeaveByeTopic',
      'TellTopic',
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
    ],
    '!Q & A', [
      'YesNoTopic',
      'YesTopic',
      'NoTopic',
    ],
    '!Conversations', [
      'ConvNode',
      'ConvAgendaItem',
    ],
    '!Default topic handling', [
      'DefaultAnyTopic',
      'DefaultAskForTopic',
      'DefaultAskTellTopic',
      'DefaultAskTopic',
      'DefaultCommandTopic',
      'DefaultGiveShowTopic',
      'DefaultGiveTopic',
      'DefaultShowTopic',
      'DefaultTellTopic',
    ],
  ], [
    'A basic burner' => 'https://www.tads.org/t3doc/doc/gsg/abasicburner.htm',
    'The art of conversation' => 'https://www.tads.org/t3doc/doc/gsg/theartofconversation.htm',
  ]),

  new Adv3Topic('Consultables & knowledge', 'Consultable', [
    'Topic',
    'Consultable',
    'ConsultTopic',
    'DefaultConsultTopic',
    'Footnote',
  ]),

  new Adv3Topic('Events', '', [
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
    '!Real-time', [
      'RealTimeDaemon',
      'RealTimeEvent',
      'RealTimeFuse',
      'RealTimeSenseDaemon',
      'RealTimeSenseFuse',
      'Schedulable',
    ],
    'OneTimePromptDaemon',
    'PromptDaemon',
  ]),

  new Adv3Topic('Sensory', '', [
    'Noise', [
      'SimpleNoise',
    ],
    'Odor', [
      'SimpleOdor',
    ],
  ]),

  new Adv3Topic('Hints, goals & menus', '', [
    'Hint',
    'HintMenu',
    'Goal',
    'Tip',
    '---',
    'MenuItem',
    'MenuTopicItem',
    'MenuLongTopicItem',
  ]),

  new Adv3Topic('System', '', [
    'Object',
    'List',
    '---',
    'InitObject',
    'PreinitObject',
    'PreRestartObject',
    'PreSaveObject',
    '---',
    'BannerWindow'
  ], [
    'General functions' => 'https://www.tads.org/t3doc/doc/libref/file/tadsgen.h.html',
    'Misc. functions' => 'https://www.tads.org/t3doc/doc/libref/file/misc.t.html',
    'List methods' => 'https://www.tads.org/t3doc/doc/sysman/list.htm',
    'I/O & banner API' => 'https://www.tads.org/t3doc/doc/libref/file/tadsio.h.html',
    'English language module' => 'https://www.tads.org/t3doc/doc/libref/file/en_us.t.html',
  ]),
];
