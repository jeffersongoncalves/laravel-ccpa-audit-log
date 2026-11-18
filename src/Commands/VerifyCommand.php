<?php

namespace JeffersonGoncalves\CcpaAuditLog\Commands;

use JeffersonGoncalves\CcpaAuditLog\AuditLogger;
use JeffersonGoncalves\Privacy\AuditLog\Commands\VerifyCommand as BaseVerifyCommand;

class VerifyCommand extends BaseVerifyCommand
{
    protected $signature = 'ccpa:audit-verify';

    protected $description = 'Check that the CCPA audit log was not altered';

    protected string $logger = AuditLogger::class;
}
