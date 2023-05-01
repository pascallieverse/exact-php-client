<?php

namespace Picqer\Financials\Exact;

/**
 * Class CrmDocument.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadCRMDocuments
 *
 * @property string $ID Primary key
 * @property string $Account ID of the related account of this document
 * @property CrmDocumentAttachment[] $Attachments Attachments linked to the document. Binaries are not sent in the response.
 * @property string $Contact ID of the related contact of this document
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $DocumentDate Entry date of the incoming document
 * @property string $DocumentFolder Id of document folder
 * @property string $DocumentViewUrl Url to view the document
 * @property bool $HasEmptyBody Indicates that the document body is empty
 * @property int $HID Human-readable ID, formatted as xx.xxx.xxx. Unique. May not be equal to zero
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $Opportunity The opportunity linked to the document
 * @property int $PurchaseInvoiceNumber Purchase invoice number.
 * @property int $PurchaseOrderNumber Purchase order number.
 * @property int $SalesInvoiceNumber 'Our reference' of the transaction that belongs to this document
 * @property int $SalesOrderNumber Number of the sales order
 * @property int $SendMethod Send Method
 * @property int $Share
 * @property int $SharePointConnectionStatus SharePointConnectionStatus of this document
 * @property string $SharePointID SharePointID of this document
 * @property int $Source Source
 * @property string $SourceDescription Translated description of the Source type
 * @property string $Subject Subject of this document
 * @property int $Type The document type
 * @property string $TypeDescription Translated description of the document type. $filter and $orderby are not supported for this property.
 */
class CrmDocument extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Account',
        'Attachments',
        'Contact',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'DocumentDate',
        'DocumentFolder',
        'DocumentViewUrl',
        'HasEmptyBody',
        'HID',
        'Modified',
        'Modifier',
        'Opportunity',
        'PurchaseInvoiceNumber',
        'PurchaseOrderNumber',
        'SalesInvoiceNumber',
        'SalesOrderNumber',
        'SendMethod',
        'Share',
        'SharePointConnectionStatus',
        'SharePointID',
        'Source',
        'SourceDescription',
        'Subject',
        'Type',
        'TypeDescription',
    ];

    protected $url = 'read/crm/Documents';
}
