<?php

namespace Nova\Nova;

use Ramsey\Uuid\Uuid;

class Hypernova {
    public function renderPlaceholder($component, $data)
    {
        $component = $component ?? "";
        $data = $data ?? new \stdClass();

        if (empty($component)) {
            throw new \InvalidArgumentException("The component name can not be empty");
        }

        $uuid = Uuid::uuid1()->toString();
        $attributes = 'data-hypernova-key="'.$component.'" data-hypernova-id="'.$uuid.'"';
        return (
            '<div '.$attributes.'></div>'.
            '<script type="application/json" '.$attributes.'><!--'.json_encode($data).'--></script>'
        );
    }
}