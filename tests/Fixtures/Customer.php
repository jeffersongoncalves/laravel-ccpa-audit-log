<?php

namespace JeffersonGoncalves\CcpaAuditLog\Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Ccpa\Attributes\PersonalData;
use JeffersonGoncalves\Ccpa\Concerns\InteractsWithPersonalData;
use JeffersonGoncalves\Ccpa\Contracts\HasPersonalData;
use JeffersonGoncalves\Ccpa\Enums\AnonymizeStrategy;
use JeffersonGoncalves\CcpaAuditLog\Concerns\AuditsPersonalData;

#[PersonalData('name', anonymize: AnonymizeStrategy::Mask)]
#[PersonalData('email', anonymize: AnonymizeStrategy::Hash)]
class Customer extends Model implements HasPersonalData
{
    use AuditsPersonalData;
    use InteractsWithPersonalData;

    protected $guarded = [];

    public $timestamps = false;
}
