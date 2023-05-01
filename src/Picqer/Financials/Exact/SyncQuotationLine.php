<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncQuotationLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncCRMQuotationLines
 *
 * @property int $Timestamp Timestamp
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountDiscount Discount amount in the currency of the transaction
 * @property float $AmountDiscountExclVat Discount amount excluding VAT in the currency of the transaction
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $CostCenter Reference to Cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to Cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $Created Date and time on which the quotation was created
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $CustomerItemCode Code the customer uses for this item
 * @property string $CustomField Custom field endpoint
 * @property string $Description By default this contains the item description
 * @property float $Discount Discount given on the default price. This is stored as a fraction. ie 5.5% is stored as .055
 * @property int $Division Division code
 * @property string $ID Primary key
 * @property string $Item Reference to the item that is sold in this quotation line
 * @property string $ItemDescription Description of the item
 * @property int $LineNumber Indicates the sequence of the lines within one quotation
 * @property string $Modified Date and time on which the quotation was last modified
 * @property string $Modifier User ID of the modifier
 * @property string $ModifierFullName Name of the modifier
 * @property float $NetPrice Net price of the quotation line
 * @property string $Notes Extra notes
 * @property bool $Optional Indicates the optional line
 * @property float $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property string $QuotationID Identifies the quotation. All the lines of a quotation have the same QuotationID
 * @property int $QuotationNumber Unique number to indentify the quotation. By default this number is based on the setting for first available number
 * @property string $UnitCode Code of the item unit
 * @property string $UnitDescription Description of the item unit
 * @property float $UnitPrice Price per item unit
 * @property float $VATAmountFC VAT amount of the line in the currency of the transaction
 * @property string $VATCode The VAT code that is used when the quotation is invoiced
 * @property string $VATDescription Description of the VAT code
 * @property float $VATPercentage The VAT percentage of the VAT code
 */
class SyncQuotationLine extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'AmountDC',
        'AmountDiscount',
        'AmountDiscountExclVat',
        'AmountFC',
        'CostCenter',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'CustomerItemCode',
        'CustomField',
        'Description',
        'Discount',
        'Division',
        'ID',
        'Item',
        'ItemDescription',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NetPrice',
        'Notes',
        'Optional',
        'Quantity',
        'QuotationID',
        'QuotationNumber',
        'UnitCode',
        'UnitDescription',
        'UnitPrice',
        'VATAmountFC',
        'VATCode',
        'VATDescription',
        'VATPercentage',
    ];

    protected $url = 'sync/CRM/QuotationLines';
}
