<?php

namespace JeffersonGoncalves\CcpaAuditLog\Listeners;

use JeffersonGoncalves\Ccpa\Events\PersonalDataAnonymized;
use JeffersonGoncalves\CcpaAuditLog\AuditLogger;

class LogAnonymization
{
    public function __construct(protected AuditLogger $logger) {}

    public function handle(PersonalDataAnonymized $event): void
    {
        $this->logger->record('anonymized', $event->model, $event->columns);
    }
}
