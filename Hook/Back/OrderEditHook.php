<?php

namespace ColissimoLabel\Hook\Back;

use ColissimoLabel\ColissimoLabel;
use Thelia\Core\Event\Hook\HookRenderEvent;
use Thelia\Core\Hook\BaseHook;

/**
 * @author Gilles Bourgeat >gilles.bourgeat@gmail.com>
 */
class OrderEditHook extends BaseHook
{
    public function onOrderEditJs(HookRenderEvent $event): void
    {
        $event->add($this->render('colissimo-label/hook/order-edit-js.html',
            [
                "requestDelay" => ColissimoLabel::getConfigValue(ColissimoLabel::REQUEST_DELAY)
            ]
        ));
    }
}
