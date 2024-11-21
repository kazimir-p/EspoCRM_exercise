<?php

namespace Espo\Custom\LogicHooks;

use Espo\Core\Utils\Utils;

class AccountHook
{
    public function appendTextToName($params, $entity, $data)
    {
        // Define the text you want to add
        $textToAdd = ' - Apertia';

        // Get the current name
        $currentName = $entity->get('name');

        // Append the text if it's not already appended
        if (strpos($currentName, $textToAdd) === false) {
            $newName = $currentName . $textToAdd;
            $entity->set('name', $newName);
            
            // Prevent infinite loop by disabling hooks temporarily
            $entity->markFieldAsDirty('name');
            $entity->save(false); // false to skip further logic hooks
        }
    }
}
