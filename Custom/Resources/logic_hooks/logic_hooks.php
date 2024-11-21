<?php

$hookdefs = [
    [
        'hook' => 'afterSave',
        'entity' => 'Account',
        'event' => 'afterSave',
        'action' => 'Espo\\Custom\\LogicHooks\\AccountHook->appendTextToName',
    ],
];
