<?php

namespace Picqer\Financials\Exact;

/**
 * Class SubscriptionRestrictionEmployee.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionRestrictionEmployees
 *
 * @property string $ID Primary key
 * @property string $Created Date and time when the subscription restriction was created
 * @property string $Creator ID of user that created the subscription restriction
 * @property string $CreatorFullName Full name of user that created the subscription restriction
 * @property int $Division Division code
 * @property string $Employee ID of employee that linked to the subscription restriction
 * @property string $EmployeeFullName Name of employee that linked to the subscription restriction
 * @property int $EmployeeHID Readable ID of employee that linked to the subscription restriction
 * @property string $Modified Last modified date of subscription restriction
 * @property string $Modifier ID of last user that modified the subscription restriction
 * @property string $ModifierFullName Full name of last user that modified the subscription restriction
 * @property string $Subscription Subscription ID that the restriction is referenced to
 * @property string $SubscriptionDescription Subscription description that the restriction is referenced to
 * @property int $SubscriptionNumber Subscription number that the restriction is referenced to
 */
class SubscriptionRestrictionEmployee extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Subscription',
        'SubscriptionDescription',
        'SubscriptionNumber',
    ];

    protected $url = 'subscription/SubscriptionRestrictionEmployees';
}
