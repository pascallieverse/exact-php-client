<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncShopOrder.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncManufacturingShopOrders
 *
 * @property int $Timestamp Timestamp
 * @property string $CADDrawingURL URL to CAD Drawing Specified on General tab shoporder
 * @property string $Costcenter The cost center linked to the shop order
 * @property string $CostcenterDescription Description of Costcenter
 * @property string $Costunit The cost unit linked to the shop order
 * @property string $CostunitDescription Description of Costunit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the shop order
 * @property int $Division Division code
 * @property string $EntryDate Date on which the shop order was entered, does not need to be the same as syscreated date but is usually the same.
 * @property string $ID Primary key
 * @property int $IsBatch Indicates if the item created by this shoporder is a batch item or not
 * @property int $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the item created by this shoporder
 * @property int $IsInPlanning Indicator that Shop order is in planning
 * @property int $IsOnHold Indicator if the Shop order is on hold
 * @property int $IsReleased Indicator that the Shop order has been released to production
 * @property int $IsSerial Does the material plan's item use serial numbers
 * @property string $Item Reference to the item created by this shoporder
 * @property string $ItemCode Code of the item created by this shop order
 * @property string $ItemDescription Description of the item created by this shop order
 * @property string $ItemPictureUrl URL of the picture linked to the item created by this shop order
 * @property string $ItemVersion Reference to ItemVersion
 * @property string $ItemVersionDescription Description of Item Version
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes - only viewed internally
 * @property string $PlannedDate Planned end date of this shop order
 * @property float $PlannedQuantity Planned quantity
 * @property string $PlannedStartDate Planned start date of this shop order
 * @property float $ProducedQuantity Quantity finished
 * @property int $ProductionLeadDays Production lead days
 * @property string $Project Reference to Project
 * @property string $ProjectDescription Description of Project
 * @property float $ReadyToShipQuantity Quantity ready to ship
 * @property int $SalesOrderLineCount Number of sales orders linked to this shop order
 * @property string $SelectionCode ID of selection code. Only supported by the Plus, Professional and Premium editions for Wholesale & Distribution and Manufacturing
 * @property string $SelectionCodeCode Code of Selection code
 * @property string $SelectionCodeDescription Description of Selection code
 * @property int $ShopOrderByProductPlanBackflushCount Number of shop order by-product plans, which are backflushed, for this shop order
 * @property int $ShopOrderByProductPlanCount Number of shop order by-product plans for this shop order
 * @property string $ShopOrderMain Shop order main
 * @property int $ShopOrderMainNumber Shop order main number
 * @property int $ShopOrderMaterialPlanBackflushCount Number of shop order material plans, which are backflushed, for this shop order
 * @property int $ShopOrderMaterialPlanCount Number of shop order material plans for this shop order
 * @property int $ShopOrderNumber Unique number to indentify the shop order
 * @property string $ShopOrderNumberString Unique number to indentify the shop order (as a string to allow OData filtering, e.g. $filter=substringof('123',ShopOrderNumberString) eq true
 * @property string $ShopOrderParent Shop order parent
 * @property int $ShopOrderParentNumber Shop order parent number
 * @property int $ShopOrderRoutingStepPlanCount Number of shop order routing step plans for this shop order
 * @property int $Status Indicates the status of the Shop Order: 10 Open, 20 In process, 30 Finished, 40 Completed
 * @property int $SubShopOrderCount The count of material lines of this shop order, which have been linked to a sub order
 * @property int $Type Type of shoporder: always 9040 Regular
 * @property string $Unit Unit of the item created by this shop order
 * @property string $UnitDescription Unit description of the unit of the item created by this shop order
 * @property string $Warehouse Reference to the Warehouse associated with the Shop order
 * @property string $YourRef Your reference (of the customer)
 */
class SyncShopOrder extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'CADDrawingURL',
        'Costcenter',
        'CostcenterDescription',
        'Costunit',
        'CostunitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EntryDate',
        'ID',
        'IsBatch',
        'IsFractionAllowedItem',
        'IsInPlanning',
        'IsOnHold',
        'IsReleased',
        'IsSerial',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemPictureUrl',
        'ItemVersion',
        'ItemVersionDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PlannedDate',
        'PlannedQuantity',
        'PlannedStartDate',
        'ProducedQuantity',
        'ProductionLeadDays',
        'Project',
        'ProjectDescription',
        'ReadyToShipQuantity',
        'SalesOrderLineCount',
        'SelectionCode',
        'SelectionCodeCode',
        'SelectionCodeDescription',
        'ShopOrderByProductPlanBackflushCount',
        'ShopOrderByProductPlanCount',
        'ShopOrderMain',
        'ShopOrderMainNumber',
        'ShopOrderMaterialPlanBackflushCount',
        'ShopOrderMaterialPlanCount',
        'ShopOrderNumber',
        'ShopOrderNumberString',
        'ShopOrderParent',
        'ShopOrderParentNumber',
        'ShopOrderRoutingStepPlanCount',
        'Status',
        'SubShopOrderCount',
        'Type',
        'Unit',
        'UnitDescription',
        'Warehouse',
        'YourRef',
    ];

    protected $url = 'sync/Manufacturing/ShopOrders';
}
