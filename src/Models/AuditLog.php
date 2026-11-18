<?php

namespace JeffersonGoncalves\CcpaAuditLog\Models;

use JeffersonGoncalves\Ccpa\Attributes\PersonalData;
use JeffersonGoncalves\Ccpa\Concerns\InteractsWithPersonalData;
use JeffersonGoncalves\Ccpa\Contracts\HasPersonalData;
use JeffersonGoncalves\Ccpa\Enums\PiCategory;
use JeffersonGoncalves\Privacy\AuditLog\AuditLog as BaseAuditLog;

/**
 * One audit entry. Append-only and hash-chained: only the request columns (personal data,
 * outside the chain) may change, so an actor can still be anonymized.
 */
#[PersonalData('ip_address', purpose: 'Security and integrity (§1798.140(e)(2))', piCategory: PiCategory::Identifiers)]
#[PersonalData('user_agent', purpose: 'Security and integrity (§1798.140(e)(2))', piCategory: PiCategory::InternetActivity)]
class AuditLog extends BaseAuditLog implements HasPersonalData
{
    use InteractsWithPersonalData;

    public function getTable(): string
    {
        return config('ccpa-audit-log.table', 'ccpa_audit_logs');
    }
}
