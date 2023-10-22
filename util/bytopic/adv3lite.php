<?php

$topics = [
  new Topic('Game', 'GameID', [
    'GameID',
    'GameMainDef',
    '---',
    'Achievement',
    'FinishOption',
    'FinishType',
  ], [
    'A minimal game definition' => 'manual/mingame.htm',
    'Beginnings' => 'manual/beginning.htm',
    'Endings' => 'manual/ending.htm',
    'IFID generator' => 'https://www.tads.org/ifidgen/ifidgen',
    'Scoring' => 'manual/score.htm',
    'GameInfo.txt & cover art' => 'https://www.tads.org/howto/gameinfo.htm',
    'Treaty of Babel' => 'https://babel.ifarchive.org',
  ]),

  new Topic('Tangibles', 'Thing', [
    'Thing',
    'Decoration', [
      'Distant',
      'Unthing',
    ],
    'Fixture', [
      'Component',
    ],
    'MultiLoc',
    'Food',
    'Immovable', [
      'Heavy',
    ],
    'Wearable',
    '---',
    'CollectiveGroup',
  ], [
    'Things' => 'manual/thing.htm',
    'Parsing the vocab string' => 'libref/object/LMentionable.html#initVocab',
  ]),

  new Topic('Locations & travel', 'Room', [
    'Room',
    'Booth',
    'Door', [
      'SecretDoor',
      'ContainerDoor',
    ],
    'Enterable',
    'Floor',
    'MultiLoc',
    'Distant',
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

  new Topic('Text, HTML, & multimedia', '', [
    'String',
    'StringBuffer'
  ], [
    'Escaped characters (backslash codes)' => 'https://www.tads.org/t3doc/doc/sysman/strlit.htm#specials',
    'Embedded expressions' => 'https://www.tads.org/t3doc/doc/sysman/strlit.htm#embeddings',
    'Embedded string templates' => 'https://www.tads.org/t3doc/doc/sysman/strlit.htm#strtpl', [
      '<<one of>>' => 'https://www.tads.org/t3doc/doc/sysman/strlit.htm#oneof',
      '<<first time>>' => 'https://www.tads.org/t3doc/doc/sysman/strlit.htm#firstTimeOnly',
    ],
    'Message params tokens (English)' => 'libref/source/english.t.html#4172',
    'Introduction to HTML TADS' => 'https://www.tads.org/t3doc/doc/htmltads/intro.htm',
    'Regular expressions' => 'https://www.tads.org/t3doc/doc/sysman/regex.htm',
    'String methods' => 'https://www.tads.org/t3doc/doc/sysman/string.htm',
    'aHref()' => 'libref/file/console.t.html#aHref',
  ]),

  new Topic('Containers & surfaces', 'Container', [
    'Container', [
      'OpenableContainer',
      'KeyedContainer',
      'LockableContainer',
    ],
    'ContainerDoor',
    '---',
    'Platform',
    'RearContainer',
    'Surface',
    'Underside',
    '---',
    'Component',
    'SubComponent',
    '---',
    'CollectiveGroup',
  ]),

  new Topic('Gadgetry', '', [
    'Button',
    'Key',
    'Lever',
    'Settable', [
      'Dial',
      'NumberedDial',
    ],
    'Switch', [
      'Flashlight'
    ],
    'KeyedContainer',
    'LockableContainer',
  ], [
    'Keys' => 'manual/key.htm',
    'Gadgets' => 'manual/gadget.htm',
  ]),

  new Topic('Attachables & components', '', [
    'SimpleAttachable', [
      'Attachable',
      'AttachableComponent',
      'NearbyAttachable',
    ],
    'PlugAttachable',
    '---',
    'Component',
    'SubComponent',
  ], [
    'Attachables' => 'manual/attachable.htm',
  ]),

  new Topic('Actions, verbs, & Doers', 'Action', [
    'Action',
    'Command',
    'Doer',
    'SystemAction',
    'TAction',
    'TIAction',
  ], [
    'Actions' => 'manual/action.htm',
    'Doers' => 'manual/doer.htm',
    'Grammar to Action' => 'manual/actionref.htm#grammar',
    'All Actions' => 'manual/actionref.htm#actionlist',
  ]),

  new Topic('Actors, NPCs, & conversations', 'Actor', [
    'Actor',
    'ActorState',
    'ActorTopicEntry',
    'AgendaItem', [
      'ConvAgendaItem',
      'DelayedAgendaItem',
      'FollowAgendaItem',
      'BoredomAgendaItem',
    ],
    'InitiateTopic',
    '!Greetings', [
      'ActorHelloTopic',
      'HelloTopic',
      'ImpHelloTopic',
      'ActorByeTopic',
      'ByeTopic',
      'ImpByeTopic',
      'HelloGoodbyeTopic',
      'LeaveByeTopic',
      'BoredByeTopic',
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
      'TalkTopic',
      'TellTopic',
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
      'TalkTopic',
      'TellTopic',
      'TellTalkTopic',
    ],
    '!Conversations', [
      'ConvNode',
      'ConvAgendaItem',
      'NodeContinuationTopic',
      'NodeEndCheck',
    ],
    '!Default topic handling', [
      'DefaultAnyTopic',
      'DefaultAgendaTopic',
      'DefaultAskForTopic',
      'DefaultAskQueryTopic',
      'DefaultAskTellTopic',
      'DefaultAskTopic',
      'DefaultCommandTopic',
      'DefaultConversationTopic',
      'DefaultGiveShowTopic',
      'DefaultGiveTopic',
      'DefaultQueryTopic',
      'DefaultSayQueryTopic',
      'DefaultSayTellTalkTopic',
      'DefaultSayTellTopic',
      'DefaultSayTopic',
      'DefaultShowTopic',
      'DefaultTalkTopic',
      'DefaultTellTalkTopic',
      'DefaultTellTopic',
    ],
  ], [
    'Actors' => 'manual/actor.htm',
  ]),

  new Topic('Consultables & knowledge', 'Consultable', [
    'Topic',
    'TopicEntry',
    '---',
    'Consultable',
    'ConsultTopic',
    'DefaultConsultTopic',
    '---',
    'ThoughtManager',
    'Thought',
    'DefaultThought',
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

  new Topic('Hints, goals & menus', '', [
    'Hint',
    'ExtraHint',
    'HintMenu',
    'Goal',
    '---',
    'MenuItem',
    'MenuTopicItem',
    'MenuLongTopicItem',
  ], [
    'Help for New Players & playerHelper' => 'manual/newbie.htm',
    'Menus' => 'manual/menu.htm',
    'Hints, goals, extra hints' => 'manual/hint.htm',
  ]),

  new Topic('System', '', [
    'Object',
    'List',
    'LookupTable',
    '---',
    '!Initialization', [
      'InitObject',
      'PreinitObject',
      'PreRestartObject',
      'PreSaveObject',
    ],
    '---',
    'BannerWindow'
  ], [
    'Q: The general-purpose query object' => 'libref/source/query.t.html#14',
    'Built-in extensions' => 'manual/extensions.htm',
    '---' => '',
    'General functions' => 'libref/file/tadsgen.h.html',
    'Misc. functions' => 'libref/file/misc.t.html',
    'Utility functions' => 'manual/utility.htm',
    'List methods' => 'https://www.tads.org/t3doc/doc/sysman/list.htm',
    'LookupTable methods' => 'https://www.tads.org/t3doc/doc/sysman/lookup.htm',
    'I/O & banner API' => 'libref/file/tadsio.h.html',
    'English language module' => 'libref/file/english.t.html',
  ]),
];
