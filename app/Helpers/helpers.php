<?php

// Convert a method/values array to livewire method for blade components
function convertToWireMethod($method, $values, $result)
{
    if (isset($values) && !is_null($values)) {
        $method .= '(';
        if (is_array($values)) {
            foreach ($values as $i => $value) {
                if (is_integer($result[$value])) {
                    $method .= $result[$value];
                } else {
                    $method .= "'".$result[$value]."'";
                }

                if ($i + 1 !== count($values)) {
                    $method .= ', ';
                }
            }
        } else {
            $method .= $values;
        }

        $method .= ')';
    }

    return $method;
}
