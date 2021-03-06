<?php

$clientParameter = [
    'description' => 'Client',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'client',
    'required' => true,
    'properties' => [
        'archived' => [
            'description' => 'State of archival storage (1=archived, 0=active)',
            'type' => 'integer',
            'enum' => [1, 0],
            'sentAs' => 'archived',
            'required' => false,
        ],
        'number_pre' => [
            'description' => 'Prefix. Default: Value from settings',
            'type' => 'string',
            'sentAs' => 'number_pre',
            'required' => false,
        ],
        'number' => [
            'description' => 'Sequential number. Default: Next free number',
            'type' => 'integer',
            'sentAs' => 'number',
            'required' => false,
        ],
        'number_length' => [
            'description' => 'Minimum length of the customer number (to be filled with leading zeros). Default: Value from settings',
            'type' => 'integer',
            'sentAs' => 'number_length',
            'required' => false,
        ],
        'name' => [
            'description' => 'Company name',
            'type' => 'string',
            'sentAs' => 'name',
            'required' => false,
        ],
        'street' => [
            'description' => 'Street',
            'type' => 'string',
            'sentAs' => 'street',
            'required' => false,
        ],
        'zip' => [
            'description' => 'Zip code',
            'type' => 'string',
            'sentAs' => 'zip',
            'required' => false,
        ],
        'city' => [
            'description' => 'City',
            'type' => 'string',
            'sentAs' => 'city',
            'required' => false,
        ],
        'state' => [
            'description' => 'State, county, district, region',
            'type' => 'string',
            'sentAs' => 'state',
            'required' => false,
        ],
        'country_code' => [
            'description' => 'Country code as ISO 3166 Alpha-2. Default: Value from your own company',
            'type' => 'string',
            'sentAs' => 'country_code',
            'required' => false,
        ],
        'first_name' => [
            'description' => 'First name',
            'type' => 'string',
            'sentAs' => 'first_name',
            'required' => false,
        ],
        'last_name' => [
            'description' => 'Last name',
            'type' => 'string',
            'sentAs' => 'last_name',
            'required' => false,
        ],
        'salutation' => [
            'description' => 'Salutation',
            'type' => 'string',
            'sentAs' => 'salutation',
            'required' => false,
        ],
        'phone' => [
            'description' => 'Phone number',
            'type' => 'string',
            'sentAs' => 'phone',
            'required' => false,
        ],
        'fax' => [
            'description' => 'Fax number',
            'type' => 'string',
            'sentAs' => 'fax',
            'required' => false,
        ],
        'mobile' => [
            'description' => 'Mobile number',
            'type' => 'string',
            'sentAs' => 'mobile',
            'required' => false,
        ],
        'email' => [
            'description' => 'Valid email address',
            'type' => 'string',
            'sentAs' => 'email',
            'required' => false,
        ],
        'www' => [
            'description' => 'Website URL (w/o http)',
            'type' => 'string',
            'sentAs' => 'www',
            'required' => false,
        ],
        'tax_number' => [
            'description' => 'Tax number',
            'type' => 'string',
            'sentAs' => 'tax_number',
            'required' => false,
        ],
        'vat_number' => [
            'description' => 'VAT number',
            'type' => 'string',
            'sentAs' => 'vat_number',
            'required' => false,
        ],
        'bank_account_number' => [
            'description' => 'Bank account number',
            'type' => 'string',
            'sentAs' => 'bank_account_number',
            'required' => false,
        ],
        'bank_account_owner' => [
            'description' => 'Bank account owner',
            'type' => 'string',
            'sentAs' => 'bank_account_owner',
            'required' => false,
        ],
        'bank_number' => [
            'description' => 'Bank identifier code',
            'type' => 'string',
            'sentAs' => 'bank_number',
            'required' => false,
        ],
        'bank_name' => [
            'description' => 'Bank name',
            'type' => 'string',
            'sentAs' => 'bank_name',
            'required' => false,
        ],
        'bank_swift' => [
            'description' => 'SWIFT/BIC',
            'type' => 'string',
            'sentAs' => 'bank_swift',
            'required' => false,
        ],
        'bank_iban' => [
            'description' => 'IBAN',
            'type' => 'string',
            'sentAs' => 'bank_iban',
            'required' => false,
        ],
        'sepa_mandate' => [
            'description' => 'Mandate reference of a SEPA Direct Debit mandate',
            'type' => 'string',
            'sentAs' => 'sepa_mandate',
            'required' => false,
        ],
        'sepa_mandate_date' => [
            'description' => 'Date of issue of the SEPA Direct Debit mandate',
            'type' => 'string',
            'sentAs' => 'sepa_mandate_date',
            'required' => false,
        ],
        'tax_rule' => [
            'description' => 'Tax Rule',
            'type' => 'string',
            'enum' => ['TAX', 'NO_TAX', 'COUNTRY'],
            'sentAs' => 'tax_rule',
            'required' => false,
        ],
        'net_gross' => [
            'description' => 'Price basis (net, gross, according to account settings)',
            'type' => 'string',
            'enum' => ['NET', 'GROSS', 'SETTINGS'],
            'sentAs' => 'net_gross',
            'required' => false,
        ],
        'note' => [
            'description' => 'Note',
            'type' => 'string',
            'sentAs' => 'note',
            'required' => false,
        ],
        'discount_rate_type' => [
            'description' => 'Type of the default value for discount rate',
            'type' => 'string',
            'enum' => ['SETTINGS', 'ABSOLUTE', 'RELATIVE'],
            'sentAs' => 'discount_rate_type',
            'required' => false,
        ],
        'discount_rate' => [
            'description' => 'Discount rate',
            'type' => 'number',
            'sentAs' => 'discount_rate',
            'required' => false,
        ],
        'discount_days_type' => [
            'description' => 'Type of the default value for discount interval',
            'type' => 'string',
            'enum' => ['SETTINGS', 'ABSOLUTE', 'RELATIVE'],
            'sentAs' => 'discount_days_type',
            'required' => false,
        ],
        'discount_days' => [
            'description' => 'Discount period in days',
            'type' => 'integer',
            'sentAs' => 'discount_days',
            'required' => false,
        ],
        'due_days_type' => [
            'description' => 'Type of the default value for maturity',
            'type' => 'string',
            'enum' => ['SETTINGS', 'ABSOLUTE', 'RELATIVE'],
            'sentAs' => 'due_days_type',
            'required' => false,
        ],
        'due_days' => [
            'description' => 'Maturity in days from invoice date',
            'type' => 'integer',
            'sentAs' => 'due_days',
            'required' => false,
        ],
        'reminder_due_days_type' => [
            'description' => 'Type of the default value for reminder maturity',
            'type' => 'string',
            'enum' => ['SETTINGS', 'ABSOLUTE', 'RELATIVE'],
            'sentAs' => 'reminder_due_days_type',
            'required' => false,
        ],
        'reminder_due_days' => [
            'description' => 'Reminder maturity',
            'type' => 'integer',
            'sentAs' => 'reminder_due_days',
            'required' => false,
        ],
        'offer_validity_days_type' => [
            'description' => 'Type of the default value for validity of estimates',
            'type' => 'string',
            'enum' => ['SETTINGS', 'ABSOLUTE', 'RELATIVE'],
            'sentAs' => 'offer_validity_days_type',
            'required' => false,
        ],
        'offer_validity_days' => [
            'description' => 'Validity of estimates',
            'type' => 'integer',
            'sentAs' => 'offer_validity_days',
            'required' => false,
        ],
        'price_group' => [
            'description' => 'Articles can have several prices. The pricegroup defines which price applies to the client.',
            'type' => 'integer',
            'sentAs' => 'price_group',
            'required' => false,
        ],
    ]
];

$clientPropertyValueParameter = [
    'description' => 'Client property value',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'client-property-value',
    'required' => true,
    'properties' => [
        'client_id' => [
            'description' => 'ID of the client',
            'type' => 'integer',
            'sentAs' => 'client_id',
            'required' => true,
        ],
        'client_property_id' => [
            'description' => 'ID of the property',
            'type' => 'integer',
            'sentAs' => 'client_property_id',
            'required' => true,
        ],
        'value' => [
            'description' => 'Property value',
            'type' => 'string',
            'sentAs' => 'value',
            'required' => true,
        ]
    ]
];

$articleParameter = [
    'description' => 'Article',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'article',
    'required' => true,
    'properties' => [
        'number_pre' => [
            'description' => 'Prefix. Default: Value from settings',
            'type' => 'string',
            'sentAs' => 'number_pre',
            'required' => false,
        ],
        'number' => [
            'description' => 'Sequential number. Default: Next free number',
            'type' => 'integer',
            'sentAs' => 'number',
            'required' => false,
        ],
        'number_length' => [
            'description' => 'Minimum length of the article number (to be filled with leading zeros). Default: Value from settings',
            'type' => 'integer',
            'sentAs' => 'number_length',
            'required' => false,
        ],
        'title' => [
            'description' => 'Title',
            'type' => 'string',
            'sentAs' => 'title',
            'required' => false,
        ],
        'description' => [
            'description' => 'Description',
            'type' => 'string',
            'sentAs' => 'description',
            'required' => false,
        ],
        'sales_price' => [
            'description' => 'Price',
            'type' => 'number',
            'sentAs' => 'sales_price',
            'required' => false,
        ],
        'sales_price2' => [
            'description' => 'Price for clients which are members of pricegroup 2. The normal price is used if no price is defined.',
            'type' => 'number',
            'sentAs' => 'sales_price2',
            'required' => false,
        ],
        'sales_price3' => [
            'description' => 'Price for clients which are members of pricegroup 3. The normal price is used if no price is defined.',
            'type' => 'number',
            'sentAs' => 'sales_price3',
            'required' => false,
        ],
        'sales_price4' => [
            'description' => 'Price for clients which are members of pricegroup 4. The normal price is used if no price is defined.',
            'type' => 'number',
            'sentAs' => 'sales_price4',
            'required' => false,
        ],
        'sales_price5' => [
            'description' => 'Price for clients which are members of pricegroup 5. The normal price is used if no price is defined.',
            'type' => 'number',
            'sentAs' => 'sales_price5',
            'required' => false,
        ],
        'currency_code' => [
            'description' => 'ISO currency code',
            'type' => 'string',
            'sentAs' => 'currency_code',
            'required' => false,
        ],
        'unit_id' => [
            'description' => 'ID of the chosen unit',
            'type' => 'integer',
            'sentAs' => 'unit_id',
            'required' => false,
        ],
        'tax_id' => [
            'description' => 'ID of the chosen tax rate',
            'type' => 'integer',
            'sentAs' => 'tax_id',
            'required' => false,
        ],
    ]
];

$articlePropertyValueParameter = [
    'description' => 'Article property value',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'article-property-value',
    'required' => true,
    'properties' => [
        'article_id' => [
            'description' => 'ID of the article',
            'type' => 'integer',
            'sentAs' => 'article_id',
            'required' => true,
        ],
        'article_property_id' => [
            'description' => 'ID of the property',
            'type' => 'integer',
            'sentAs' => 'article_property_id',
            'required' => true,
        ],
        'value' => [
            'description' => 'Property value',
            'type' => 'string',
            'sentAs' => 'value',
            'required' => true,
        ]
    ]
];

$invoiceItemParameter = [
    'description' => 'Invoice item',
    'location' => 'json',
    'type' => 'object',
    'properties' => [
        'invoice_id' => [
            'description' => 'ID of the invoice',
            'type' => 'integer',
            'sentAs' => 'invoice_id',
            'required' => false,
        ],
        'article_id' => [
            'description' => 'ID of the article, sets additionally the values from the article on creation',
            'type' => 'integer',
            'sentAs' => 'article_id',
            'required' => false,
        ],
        'unit' => [
            'description' => 'Unit',
            'type' => 'string',
            'sentAs' => 'unit',
            'required' => false,
        ],
        'quantity' => [
            'description' => 'Quantity',
            'type' => 'number',
            'sentAs' => 'quantity',
            'required' => false,
        ],
        'unit_price' => [
            'description' => 'Price per unit. Default: 0.0000',
            'type' => 'number',
            'sentAs' => 'unit_price',
            'required' => false,
        ],
        'tax_name' => [
            'description' => 'Name of the tax. Default: Value taken from the settings',
            'type' => 'string',
            'sentAs' => 'tax_name',
            'required' => false,
        ],
        'tax_rate' => [
            'description' => 'Rate of taxation. Default: Value taken from the settings',
            'type' => 'number',
            'sentAs' => 'tax_rate',
            'required' => false,
        ],
        'title' => [
            'description' => 'Title',
            'type' => 'string',
            'sentAs' => 'title',
            'required' => false,
        ],
        'description' => [
            'description' => 'Description',
            'type' => 'string',
            'sentAs' => 'description',
            'required' => false,
        ],
        'reduction' => [
            'description' => 'Reduction (absolute or percent: 10/10%)',
            'type' => 'string',
            'sentAs' => 'reduction',
            'required' => false,
        ],
    ],
];

// special case when invoice item is created directly
$invoiceItemParameterCreate = $invoiceItemParameter;
$invoiceItemParameterCreate['properties']['invoice_id']['required'] = true;

$invoiceTagParameterCreate = [
    'description' => 'Invoice tag',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'invoice-tag',
    'required' => true,
    'properties' => [
        'invoice_id' => [
            'description' => 'ID of an invoice',
            'type' => 'integer',
            'sentAs' => 'invoice_id',
            'required' => true,
        ],
        'name' => [
            'description' => 'Name of the tag',
            'type' => 'string',
            'sentAs' => 'name',
            'required' => true,
        ]
    ]
];

$invoicePaymentParameterCreate = [
    'description' => 'Invoice Payment',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'invoice-payment',
    'required' => true,
    'properties' => [
        'invoice_id' => [
            'description' => 'ID of the invoice',
            'type' => 'integer',
            'sentAs' => 'invoice_id',
            'required' => true,
        ],
        'date' => [
            'description' => 'Date of payment. Default: today',
            'type' => 'string',
            'sentAs' => 'date',
            'required' => false,
        ],
        'amount' => [
            'description' => 'Payed amount',
            'type' => 'numeric',
            'sentAs' => 'amount',
            'required' => true
        ],
        'comment' => [
            'description' => 'Comment text',
            'type' => 'string',
            'sentAs' => 'comment',
            'required' => false,
        ],
        'type' => [
            'description' => 'Payment type',
            'type' => 'string',
            'enum' => ['CREDIT_NOTE', 'BANK_CARD', 'BANK_TRANSFER', 'DEBIT', 'CASH', 'CHECK', 'PAYPAL', 'CREDIT_CARD', 'COUPON', 'MISC'],
            'sentAs' => 'type',
            'required' => false,
        ],
        'mark_invoice_as_paid' => [
            'description' => 'Mark associated invoice as paid. Default: 0',
            'type' => 'integer',
            'enum' => [0, 1],
            'sentAs' => 'mark_invoice_as_paid',
            'required' => false,
        ]
    ]
];

$invoiceParameter = [
    'description' => 'Invoice',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'invoice',
    'required' => true,
    'properties' => [
        'client_id' => [
            'description' => 'ID of the client',
            'type' => 'integer',
            'sentAs' => 'client_id',
            'required' => true
        ],
        'contact_id' => [
            'description' => 'ID of the contact',
            'type' => 'integer',
            'sentAs' => 'contact_id',
            'required' => false
        ],
        'address' => [
            'description' => 'Address. Default: the client’s address',
            'type' => 'string',
            'sentAs' => 'address',
            'required' => false,
        ],
        'number_pre' => [
            'description' => 'Invoice number prefix. Default: Value from settings',
            'type' => 'string',
            'sentAs' => 'number_pre',
            'required' => false,
        ],
        'number' => [
            'description' => 'Sequential number. Default: Next free number',
            'type' => 'integer',
            'sentAs' => 'number',
            'required' => false,
        ],
        'number_length' => [
            'description' => 'Minimum length of the invoice number (to be filled with leading zeros). Default: Value from settings',
            'type' => 'integer',
            'sentAs' => 'number_length',
            'required' => false,
        ],
        'date' => [
            'description' => 'Invoice date. Default: today',
            'type' => 'string',
            'sentAs' => 'date',
            'required' => false,
        ],
        'supply_date' => [
            'description' => 'supply/delivery date',
            'type' => 'string',
            'sentAs' => 'supply_date',
            'required' => false,
        ],
        'supply_date_type' => [
            'description' => 'Type of supply/delivery date',
            'type' => 'string',
            'enum' => ['SUPPLY_DATE', 'DELIVERY_DATE', 'SUPPLY_TEXT', 'DELIVERY_TEXT'],
            'sentAs' => 'supply_date_type',
            'required' => false,
        ],
        'due_date' => [
            'description' => 'Due date. Default: date + due days taken from the settings',
            'type' => 'string',
            'sentAs' => 'due_date',
            'required' => false,
        ],
        'discount_rate' => [
            'description' => 'Cash discount. Default: Value from the settings',
            'type' => 'number',
            'sentAs' => 'discount_rate',
            'required' => false,
        ],
        'discount_date' => [
            'description' => 'Cash discount date. Default: date + cash discount days taken from the settings',
            'type' => 'string',
            'sentAs' => 'discount_date',
            'required' => false,
        ],
        'title' => [
            'description' => 'Title of the document',
            'type' => 'string',
            'sentAs' => 'title',
            'required' => false,
        ],
        'label' => [
            'description' => 'Label text to describe the project',
            'type' => 'string',
            'sentAs' => 'label',
            'required' => false,
        ],
        'intro' => [
            'description' => 'Introductory text. Default: Value taken from the settings',
            'type' => 'string',
            'sentAs' => 'intro',
            'required' => false,
        ],
        'note' => [
            'description' => 'Explanatory notes. Default: Value taken from the settings',
            'type' => 'string',
            'sentAs' => 'note',
            'required' => false,
        ],
        'reduction' => [
            'description' => 'Reduction (absolute or percent: 10/10%)',
            'type' => 'string',
            'sentAs' => 'reduction',
            'required' => false,
        ],
        'currency_code' => [
            'description' => 'ISO currency code. Default: default currency',
            'type' => 'string',
            'sentAs' => 'currency_code',
            'required' => false,
        ],
        'net_gross' => [
            'description' => 'Price basis (gross or net prices). Default: Value taken from the settings',
            'type' => 'string',
            'enum' => ['NET', 'GROSS'],
            'sentAs' => 'net_gross',
            'required' => false,
        ],
        'quote' => [
            'description' => 'Currency quote (for conversion into standard currency). Default: 1.0000',
            'type' => 'number',
            'sentAs' => 'quote',
            'required' => false,
        ],
        'payment_types' => [
            'description' => 'Comma separated list of all accepted payment types. Default: Value taken from the settings',
            'type' => 'string',
            'sentAs' => 'payment_types',
            'required' => false,
        ],
        'invoice_id' => [
            'description' => 'The ID of the corrected invoice, if it is an invoice correction.',
            'type' => 'integer',
            'sentAs' => 'invoice_id',
            'required' => false,
        ],
        'offer_id' => [
            'description' => 'The ID of the estimate, if the invoice was created from an estimate.',
            'type' => 'integer',
            'sentAs' => 'offer_id',
            'required' => false,
        ],
        'confirmation_id' => [
            'description' => 'The ID of the confirmation, if the invoice was created from a confirmation.',
            'type' => 'integer',
            'sentAs' => 'confirmation_id',
            'required' => false,
        ],
        'recurring_id' => [
            'description' => 'The ID of the recurring, if the invoice was created from a recurring.',
            'type' => 'integer',
            'sentAs' => 'recurring_id',
            'required' => false,
        ],
        'invoice-items' => [
            'description' => 'Invoice items',
            'type' => 'object',
            'sentAs' => 'invoice-items',
            'required' => false,
            'properties' => [
                'invoice-item' => [
                    'description' => 'Invoice items',
                    'type' => 'array',
                    'sentAs' => 'invoice-item',
                    'required' => false,
                    'items' => $invoiceItemParameter,
                ],
            ],
        ]
    ]
];

$creditNoteItemParameter = [
    'description' => 'Credit note item',
    'location' => 'json',
    'type' => 'object',
    'properties' => [
        'credit_note_id' => [
            'description' => 'ID of the credit note',
            'type' => 'integer',
            'sentAs' => 'credit_note_id',
            'required' => false,
        ],
        'article_id' => [
            'description' => 'ID of the article, sets additionally the values from the article on creation',
            'type' => 'integer',
            'sentAs' => 'article_id',
            'required' => false,
        ],
        'unit' => [
            'description' => 'Unit',
            'type' => 'string',
            'sentAs' => 'unit',
            'required' => false,
        ],
        'quantity' => [
            'description' => 'Quantity',
            'type' => 'number',
            'sentAs' => 'quantity',
            'required' => false,
        ],
        'unit_price' => [
            'description' => 'Price per unit. Default: 0.0000',
            'type' => 'number',
            'sentAs' => 'unit_price',
            'required' => false,
        ],
        'tax_name' => [
            'description' => 'Name of the tax. Default: Value taken from the settings',
            'type' => 'string',
            'sentAs' => 'tax_name',
            'required' => false,
        ],
        'tax_rate' => [
            'description' => 'Rate of taxation. Default: Value taken from the settings',
            'type' => 'number',
            'sentAs' => 'tax_rate',
            'required' => false,
        ],
        'title' => [
            'description' => 'Title',
            'type' => 'string',
            'sentAs' => 'title',
            'required' => false,
        ],
        'description' => [
            'description' => 'Description',
            'type' => 'string',
            'sentAs' => 'description',
            'required' => false,
        ],
        'reduction' => [
            'description' => 'Reduction (absolute or percent: 10/10%)',
            'type' => 'string',
            'sentAs' => 'reduction',
            'required' => false,
        ],
    ],
];

// special case when credit note item is created directly
$creditNoteItemParameterCreate = $creditNoteItemParameter;
$creditNoteItemParameterCreate['properties']['credit_note_id']['required'] = true;

$creditNoteParameter = [
    'description' => 'Credit note',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'credit-note',
    'required' => true,
    'properties' => [
        'client_id' => [
            'description' => 'ID of the client',
            'type' => 'integer',
            'sentAs' => 'client_id',
            'required' => false
        ],
        'contact_id' => [
            'description' => 'ID of the contact',
            'type' => 'integer',
            'sentAs' => 'contact_id',
            'required' => false
        ],
        'address' => [
            'description' => 'Address. Default: the client’s address',
            'type' => 'string',
            'sentAs' => 'address',
            'required' => false,
        ],
        'number_pre' => [
            'description' => 'Credit note number prefix. Default: Value from settings',
            'type' => 'string',
            'sentAs' => 'number_pre',
            'required' => false,
        ],
        'number' => [
            'description' => 'Sequential number. Default: Next free number',
            'type' => 'integer',
            'sentAs' => 'number',
            'required' => false,
        ],
        'number_length' => [
            'description' => 'Minimum length of the credit note number (to be filled with leading zeros). Default: Value from settings',
            'type' => 'integer',
            'sentAs' => 'number_length',
            'required' => false,
        ],
        'date' => [
            'description' => 'Credit note date. Default: today',
            'type' => 'string',
            'sentAs' => 'date',
            'required' => false,
        ],
        'title' => [
            'description' => 'Title of the document',
            'type' => 'string',
            'sentAs' => 'title',
            'required' => false,
        ],
        'label' => [
            'description' => 'Label text to describe the project',
            'type' => 'string',
            'sentAs' => 'label',
            'required' => false,
        ],
        'intro' => [
            'description' => 'Introductory text. Default: Value taken from the settings',
            'type' => 'string',
            'sentAs' => 'intro',
            'required' => false,
        ],
        'note' => [
            'description' => 'Explanatory notes. Default: Value taken from the settings',
            'type' => 'string',
            'sentAs' => 'note',
            'required' => false,
        ],
        'reduction' => [
            'description' => 'Reduction (absolute or percent: 10/10%)',
            'type' => 'string',
            'sentAs' => 'reduction',
            'required' => false,
        ],
        'currency_code' => [
            'description' => 'ISO currency code. Default: default currency',
            'type' => 'string',
            'sentAs' => 'currency_code',
            'required' => false,
        ],
        'net_gross' => [
            'description' => 'Price basis (gross or net prices). Default: Value taken from the settings',
            'type' => 'string',
            'enum' => ['NET', 'GROSS'],
            'sentAs' => 'net_gross',
            'required' => false,
        ],
        'quote' => [
            'description' => 'Currency quote (for conversion into standard currency). Default: 1.0000',
            'type' => 'number',
            'sentAs' => 'quote',
            'required' => false,
        ],
        'invoice_id' => [
            'description' => 'The ID of the invoice, if the credit note was created from an invoice.',
            'type' => 'integer',
            'sentAs' => 'invoice_id',
            'required' => false,
        ],
        'credit-note-items' => [
            'description' => 'Credit note items',
            'type' => 'object',
            'sentAs' => 'credit-note-items',
            'required' => false,
            'properties' => [
                'credit-note-item' => [
                    'description' => 'Credit note item',
                    'type' => 'array',
                    'sentAs' => 'credit-note-item',
                    'required' => false,
                    'items' => $creditNoteItemParameter,
                ],
            ],
        ]
    ]
];

$creditNoteParameterCreate = $creditNoteParameter;
$creditNoteParameterCreate['properties']['client_id']['required'] = true;

$creditNotePaymentParameterCreate = [
    'description' => 'Credit Note Payment',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'credit-note-payment',
    'required' => true,
    'properties' => [
        'credit_note_id' => [
            'description' => 'ID of the credit note',
            'type' => 'integer',
            'sentAs' => 'credit_note_id',
            'required' => true,
        ],
        'date' => [
            'description' => 'Date of payment. Default: today',
            'type' => 'string',
            'sentAs' => 'date',
            'required' => false,
        ],
        'amount' => [
            'description' => 'Payed amount',
            'type' => 'numeric',
            'sentAs' => 'amount',
            'required' => true
        ],
        'comment' => [
            'description' => 'Comment text',
            'type' => 'string',
            'sentAs' => 'comment',
            'required' => false,
        ],
        'type' => [
            'description' => 'Payment type',
            'type' => 'string',
            'enum' => ['CREDIT_NOTE', 'BANK_TRANSFER', 'DEBIT', 'CASH', 'PAYPAL', 'CREDIT_CARD', 'MISC'],
            'sentAs' => 'type',
            'required' => false,
        ],
        'mark_credit_note_as_paid' => [
            'description' => 'Mark associated credit note as paid. Default: 0',
            'type' => 'integer',
            'enum' => [0, 1],
            'sentAs' => 'mark_credit_note_as_paid',
            'required' => false,
        ]
    ]
];

$templateParameter = [
    'description' => 'Template',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'template',
    'required' => true,
    'properties' => [
        'name' => [
            'description' => 'Name of the template',
            'type' => 'string',
            'sentAs' => 'name',
            'required' => false
        ],
        'type' => [
            'description' => 'Template type',
            'type' => 'string',
            'enum' => ['INVOICE', 'OFFER', 'CONFIRMATION', 'REMINDER', 'DELIVERY_NOTE', 'CREDIT_NOTE'],
            'sentAs' => 'type',
            'required' => false
        ],
        'format' => [
            'description' => 'Format',
            'type' => 'string',
            'enum' => ['doc', 'docx', 'rtf'],
            'sentAs' => 'format',
            'required' => false
        ],
        'base64file' => [
            'description' => 'base64 coded template file',
            'type' => 'string',
            'sentAs' => 'base64file',
            'required' => false
        ],
    ]
];

$templateParameterCreate = $templateParameter;
foreach ($templateParameterCreate['properties'] as $key => $property) {
    $templateParameterCreate['properties'][$key]['required'] = true;
}


$assetPropertyParameter = [
    'description' => '',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => '',
    'required' => true,
    'properties' => [
        'name' => [
            'description' => 'Name',
            'type' => 'string',
            'sentAs' => 'name',
            'required' => false,
        ],
        'type' => [
            'description' => 'Type',
            'type' => 'string',
            'enum' => ['TEXTFIELD', 'TEXTAREA', 'CHECKBOX'],
            'sentAs' => 'type',
            'required' => false,
        ],
        'default_value' => [
            'description' => 'Default value',
            'type' => 'string',
            'sentAs' => 'default_value',
            'required' => false,
        ],
        'is_nvl' => [
            'description' => 'Should the default value be used if there is no other value?',
            'type' => 'integer',
            'sentAs' => 'is_nvl',
            'required' => false,
        ]
    ]
];

$articlePropertyParameter = $assetPropertyParameter;
$articlePropertyParameter['description'] = 'Article property';
$articlePropertyParameter['sentAs'] = 'article-property';

$articlePropertyParameterCreate = $articlePropertyParameter;
$articlePropertyParameterCreate['properties']['name']['required'] = true;
$articlePropertyParameterCreate['properties']['type']['required'] = true;

$clientPropertyParameter = $assetPropertyParameter;
$clientPropertyParameter['description'] = 'Client property';
$clientPropertyParameter['sentAs'] = 'client-property';

$clientPropertyParameterCreate = $clientPropertyParameter;
$clientPropertyParameterCreate['properties']['name']['required'] = true;
$clientPropertyParameterCreate['properties']['type']['required'] = true;

$userPropertyParameter = $assetPropertyParameter;
$userPropertyParameter['description'] = 'User property';
$userPropertyParameter['sentAs'] = 'user-property';

$userPropertyParameterCreate = $userPropertyParameter;
$userPropertyParameterCreate['properties']['name']['required'] = true;
$userPropertyParameterCreate['properties']['type']['required'] = true;


$taxParameter = [
    'description' => 'Tax',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'tax',
    'required' => true,
    'properties' => [
        'name' => [
            'description' => 'Name of the tax',
            'type' => 'string',
            'sentAs' => 'name',
            'required' => false
        ],
        'rate' => [
            'description' => 'Tax rate in percent',
            'type' => 'numeric',
            'sentAs' => 'rate',
            'required' => false
        ],
        'is_default' => [
            'description' => 'Specifies whether this is the standard tax rate',
            'type' => 'integer',
            'enum' => [0, 1],
            'sentAs' => 'is_default',
            'required' => false
        ]
    ]
];

$taxParameterCreate = $taxParameter;
foreach ($taxParameterCreate['properties'] as $key => $property) {
    $taxParameterCreate['properties'][$key]['required'] = true;
}

$countryTaxParameter = [
    'description' => 'Tax free country',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'country-tax',
    'required' => true,
    'properties' => [
        'country_code' => [
            'description' => 'Country code as ISO 3166 Alpha-2',
            'type' => 'string',
            'sentAs' => 'country_code',
            'required' => true
        ]
    ]
];

$reminderTextParameter = [
    'description' => 'Reminder text',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'reminder-text',
    'required' => true,
    'properties' => [
        'sorting' => [
            'description' => 'Sorting of this reminder text. Default: at the end of the list',
            'type' => 'integer',
            'sentAs' => 'sorting',
            'required' => false
        ],
        'name' => [
            'description' => 'Name (for internal use)',
            'type' => 'string',
            'sentAs' => 'name',
            'required' => false
        ],
        'subject' => [
            'description' => 'Subject',
            'type' => 'string',
            'sentAs' => 'subject',
            'required' => false
        ],
        'header' => [
            'description' => 'Introductory text',
            'type' => 'string',
            'sentAs' => 'header',
            'required' => false
        ],
        'footer' => [
            'description' => 'Explanatory notes',
            'type' => 'string',
            'sentAs' => 'footer',
            'required' => false
        ],
        'charge_name' => [
            'description' => 'Name of charge (if present)',
            'type' => 'string',
            'sentAs' => 'charge_name',
            'required' => false
        ],
        'charge_description' => [
            'description' => 'Description of charge (if present)',
            'type' => 'string',
            'sentAs' => 'charge_description',
            'required' => false
        ],
        'charge_amount' => [
            'description' => 'Amount of charge (if present)',
            'type' => 'numeric',
            'sentAs' => 'charge_amount',
            'required' => false
        ]
    ]
];

$emailTemplateParameter = [
    'description' => 'Email template',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'email-template',
    'required' => true,
    'properties' => [
        'name' => [
            'description' => 'Name (for internal use)',
            'type' => 'string',
            'sentAs' => 'name',
            'required' => false
        ],
        'type' => [
            'description' => 'Document type',
            'type' => 'string',
            'enum' => ['INVOICES', 'OFFERS', 'CONFIRMATIONS', 'CREDIT_NOTES', 'DELIVERY_NOTES', 'REMINDERS'],
            'sentAs' => 'type',
            'required' => false
        ],
        'subject' => [
            'description' => 'Subject',
            'type' => 'string',
            'sentAs' => 'subject',
            'required' => false
        ],
        'text' => [
            'description' => 'Message text',
            'type' => 'string',
            'sentAs' => 'text',
            'required' => false
        ],
        'bcc' => [
            'description' => 'Specifies whether the sender should get a copy as BCC',
            'type' => 'integer',
            'enum' => [0, 1],
            'sentAs' => 'bcc',
            'required' => false
        ],
        'is_default' => [
            'description' => 'Specifies whether this is the standard template ',
            'type' => 'integer',
            'enum' => [0, 1],
            'sentAs' => 'is_default',
            'required' => false
        ]
    ]
];

$emailTemplateParameterCreate = $emailTemplateParameter;
$emailTemplateParameterCreate['properties']['name']['required'] = true;
$emailTemplateParameterCreate['properties']['type']['required'] = true;
$emailTemplateParameterCreate['properties']['bcc']['required'] = true;
$emailTemplateParameterCreate['properties']['is_default']['required'] = true;

$incomingTagParameterCreate = [
    'description' => 'Incoming tag',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'incoming-tag',
    'required' => true,
    'properties' => [
        'incoming_id' => [
            'description' => 'ID of an incoming',
            'type' => 'integer',
            'sentAs' => 'incoming_id',
            'required' => true,
        ],
        'name' => [
            'description' => 'Name of the tag',
            'type' => 'string',
            'sentAs' => 'name',
            'required' => true,
        ]
    ]
];

$userPropertyValueParameter = [
    'description' => 'User property value',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'user-property-value',
    'required' => true,
    'properties' => [
        'user_id' => [
            'description' => 'ID of the user',
            'type' => 'integer',
            'sentAs' => 'user_id',
            'required' => true,
        ],
        'user_property_id' => [
            'description' => 'ID of the property',
            'type' => 'integer',
            'sentAs' => 'user_property_id',
            'required' => true,
        ],
        'value' => [
            'description' => 'Property value',
            'type' => 'string',
            'sentAs' => 'value',
            'required' => true,
        ]
    ]
];

$incomingPaymentParameterCreate = [
    'description' => 'Incoming Payment',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'incoming-payment',
    'required' => true,
    'properties' => [
        'incoming_id' => [
            'description' => 'ID of the incoming',
            'type' => 'integer',
            'sentAs' => 'incoming_id',
            'required' => true,
        ],
        'date' => [
            'description' => 'Date of payment. Default: today',
            'type' => 'string',
            'sentAs' => 'date',
            'required' => false,
        ],
        'amount' => [
            'description' => 'Payed amount',
            'type' => 'numeric',
            'sentAs' => 'amount',
            'required' => true
        ],
        'comment' => [
            'description' => 'Comment text',
            'type' => 'string',
            'sentAs' => 'comment',
            'required' => false,
        ],
        'type' => [
            'description' => 'Payment type',
            'type' => 'string',
            'enum' => ['CREDIT_NOTE', 'BANK_CARD', 'BANK_TRANSFER', 'DEBIT', 'CASH', 'CHECK', 'PAYPAL', 'CREDIT_CARD', 'COUPON', 'MISC'],
            'sentAs' => 'type',
            'required' => false,
        ],
        'mark_invoice_as_paid' => [
            'description' => 'Mark associated invoice as paid. Default: 0',
            'type' => 'integer',
            'enum' => [0, 1],
            'sentAs' => 'mark_invoice_as_paid',
            'required' => false,
        ]
    ]
];

$incomingInboxDocumentParameterCreate = [
    'description' => 'Inbox Document',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'inbox-document',
    'required' => true,
    'properties' => [
        'filename' => [
            'description' => 'filename',
            'type' => 'string',
            'sentAs' => 'filename',
            'required' => true,
        ],
        'mimetype' => [
            'description' => 'Mime type of the file',
            'type' => 'string',
            'sentAs' => 'mimetype',
            'required' => true,
        ],
        'base64file' => [
            'description' => 'base64 coded template file',
            'type' => 'string',
            'sentAs' => 'base64file',
            'required' => false
        ],
        'metadata' => [
            'description' => 'Metadata',
            'type' => 'array',
            'sentAs' => 'metadata',
            'required' => false,
        ]
    ]
];

return [
    'name' => 'Billomat',
    'apiVersion' => '1.0',
    'description' => 'Billomat is an online service for quoting, billing and more.',
    'operations' => [
        /**
         * --------------------------------------------------------------------------------
         * CLIENT RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetClients' => [
            'httpMethod' => 'GET',
            'uri' => '/api/clients',
            'summary' => 'List all clients',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ],
                'name' => [
                    'description' => 'Company name',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'name',
                    'required' => false
                ],
                'client_number' => [
                    'description' => 'Client number',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'client_number',
                    'required' => false
                ],
                'email' => [
                    'description' => 'E-mail address',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'email',
                    'required' => false
                ],
                'first_name' => [
                    'description' => 'First name of the contact person',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'first_name',
                    'required' => false
                ],
                'last_name' => [
                    'description' => 'Last name of the contact person',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'last_name',
                    'required' => false
                ],
                'country_code' => [
                    'description' => 'Country code as ISO 3166 Alpha-2',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'country_code',
                    'required' => false
                ],
                'note' => [
                    'description' => 'Note',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'note',
                    'required' => false
                ],
                'invoice_id' => [
                    'description' => 'ID of an invoice of this client, multiple values separated with commas',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'invoice_id',
                    'required' => false
                ],
                'tags' => [
                    'description' => 'Comma separated list of tags',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'tags',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetClient' => [
            'httpMethod' => 'GET',
            'uri' => '/api/clients/{id}',
            'summary' => 'Get a specific client',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients',
            'parameters' => [
                'id' => [
                    'description' => 'Client id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetClientMyself' => [
            'httpMethod' => 'GET',
            'uri' => '/api/clients/myself',
            'summary' => 'Your own account info',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients',
            'parameters' => [],
            'responseModel' => 'Generic',
        ],

        'CreateClient' => [
            'httpMethod' => 'POST',
            'uri' => '/api/clients',
            'summary' => 'Create a client',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients',
            'parameters' => [
                'client' => $clientParameter
            ],
            'responseModel' => 'Generic',
        ],

        'UpdateClient' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/clients/{id}',
            'summary' => 'Update a client',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients',
            'parameters' => [
                'id' => [
                    'description' => 'Client id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'client' => $clientParameter
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteClient' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/clients/{id}',
            'summary' => 'Delete a client',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients',
            'parameters' => [
                'id' => [
                    'description' => 'Client id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * CLIENT PROPERTY VALUE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetClientPropertyValues' => [
            'httpMethod' => 'GET',
            'uri' => '/api/client-property-values',
            'summary' => 'List all client property values',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients/properties',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ],
                'client_id' => [
                    'description' => 'ID of a client',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'client_id',
                    'required' => false
                ],
                'client_property_id' => [
                    'description' => 'ID of a property',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'client_property_id',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetClientPropertyValue' => [
            'httpMethod' => 'GET',
            'uri' => '/api/client-property-values/{id}',
            'summary' => 'Get a specific property',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients/properties',
            'parameters' => [
                'id' => [
                    'description' => 'Client property value id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'SetClientPropertyValue' => [
            'httpMethod' => 'POST',
            'uri' => '/api/client-property-values',
            'summary' => 'Set a specific client property',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients/properties',
            'parameters' => [
                'client-property-value' => $clientPropertyValueParameter
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * ARTICLE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetArticles' => [
            'httpMethod' => 'GET',
            'uri' => '/api/articles',
            'summary' => 'List all articles',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ],
                'article_number' => [
                    'description' => 'Article number',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'article_number',
                    'required' => false
                ],
                'title' => [
                    'description' => 'Title',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'title',
                    'required' => false
                ],
                'description' => [
                    'description' => 'Description',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'description',
                    'required' => false
                ],
                'currency_code' => [
                    'description' => 'ISO code of the currency',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'currency_code',
                    'required' => false
                ],
                'unit_id' => [
                    'description' => 'ID of the chosen unit',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'unit_id',
                    'required' => false
                ],
                'tags' => [
                    'description' => 'Comma separated list of tags',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'tags',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetArticle' => [
            'httpMethod' => 'GET',
            'uri' => '/api/articles/{id}',
            'summary' => 'Get a specific article',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles',
            'parameters' => [
                'id' => [
                    'description' => 'Article id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateArticle' => [
            'httpMethod' => 'POST',
            'uri' => '/api/articles',
            'summary' => 'Create an article',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles',
            'parameters' => [
                'article' => $articleParameter
            ],
            'responseModel' => 'Generic',
        ],

        'UpdateArticle' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/articles/{id}',
            'summary' => 'Update an article',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles',
            'parameters' => [
                'id' => [
                    'description' => 'Article id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'article' => $articleParameter
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteArticle' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/articles/{id}',
            'summary' => 'Delete an article',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles',
            'parameters' => [
                'id' => [
                    'description' => 'Article id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * ARTICLE PROPERTY VALUE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetArticlePropertyValues' => [
            'httpMethod' => 'GET',
            'uri' => '/api/article-property-values',
            'summary' => 'List all article property values',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles/properties',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ],
                'article_id' => [
                    'description' => 'ID of a article',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'article_id',
                    'required' => false
                ],
                'article_property_id' => [
                    'description' => 'ID of a property',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'article_property_id',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetArticlePropertyValue' => [
            'httpMethod' => 'GET',
            'uri' => '/api/article-property-values/{id}',
            'summary' => 'Get a specific property',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles/properties',
            'parameters' => [
                'id' => [
                    'description' => 'Article property value id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'SetArticlePropertyValue' => [
            'httpMethod' => 'POST',
            'uri' => '/api/article-property-values',
            'summary' => 'Set a specific article property',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles/properties',
            'parameters' => [
                'article-property-value' => $articlePropertyValueParameter
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * INVOICE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetInvoices' => [
            'httpMethod' => 'GET',
            'uri' => '/api/invoices',
            'summary' => 'List all invoices',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ],
                'client_id' => [
                    'description' => 'ID of the client',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'client_id',
                    'required' => false
                ],
                'contact_id' => [
                    'description' => 'ID of the contact',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'contact_id',
                    'required' => false
                ],
                'invoice_number' => [
                    'description' => 'Invoice number',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'invoice_number',
                    'required' => false
                ],
                'status' => [
                    'description' => 'Comma separated list of logically OR-connected statuses',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'status',
                    'required' => false
                ],
                'payment_type' => [
                    'description' => 'Comma separated list of logically OR-connected payment types',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'payment_type',
                    'required' => false
                ],
                'from' => [
                    'description' => 'Only list invoices since this date (format YYYY-MM-DD)',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'from',
                    'required' => false
                ],
                'to' => [
                    'description' => 'Only list invoices up to this date (format YYYY-MM-DD)',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'to',
                    'required' => false
                ],
                'label' => [
                    'description' => 'Free text search in label text',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'label',
                    'required' => false
                ],
                'intro' => [
                    'description' => 'Free text search in introductory text',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'intro',
                    'required' => false
                ],
                'note' => [
                    'description' => 'Free text search in explanatory notes',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'note',
                    'required' => false
                ],
                'tags' => [
                    'description' => 'Comma separated list of tags',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'tags',
                    'required' => false
                ],
                'group_by' => [
                    'description' => 'Grouping parameter',
                    'location' => 'query',
                    'type' => 'string',
                    'enum' => ['client', 'status', 'day', 'week', 'month', 'year'],
                    'sentAs' => 'group_by',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetInvoice' => [
            'httpMethod' => 'GET',
            'uri' => '/api/invoices/{id}',
            'summary' => 'Get a specific invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters' => [
                'id' => [
                    'description' => 'Invoice id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateInvoice' => [
            'httpMethod' => 'POST',
            'uri' => '/api/invoices',
            'summary' => 'Create an invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters' => [
                'invoice' => $invoiceParameter
            ],
            'responseModel' => 'Generic',
        ],

        'UpdateInvoice' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/invoices/{id}',
            'summary' => 'Update an invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters' => [
                'id' => [
                    'description' => 'Invoice id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'invoice' => $invoiceParameter
            ],
            'responseModel' => 'Generic',
        ],

        'CompleteInvoice' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/invoices/{id}/complete',
            'summary' => 'Complete an invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters' => [
                'id' => [
                    'description' => 'Invoice id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'complete' => [
                    'description' => 'Invoice complete data',
                    'location' => 'json',
                    'type' => 'object',
                    'sentAs' => 'complete',
                    'required' => true,
                    'properties' => [
                        'template_id' => [
                            'description' => 'ID of the template to complete the invoice with',
                            'type' => 'integer',
                            'sentAs' => 'template_id',
                            'required' => false,
                        ]
                    ]
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetInvoicePdf' => [
            'httpMethod' => 'GET',
            'uri' => '/api/invoices/{id}/pdf',
            'summary' => 'Open pdf of an invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters' => [
                'id' => [
                    'description' => 'Invoice id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'accept' => [
                    'description' => 'Accept header',
                    'location' => 'header',
                    'type' => 'string',
                    'enum' => ['application/pdf'],
                    'sentAs' => 'Accept',
                    'required' => false
                ],
                'format' => [
                    'description' => 'Response format',
                    'location' => 'query',
                    'type' => 'string',
                    'enum' => ['pdf'],
                    'sentAs' => 'format',
                    'required' => false
                ],
                'type' => [
                    'description' => 'Response type',
                    'location' => 'query',
                    'type' => 'string',
                    'enum' => ['print'],
                    'sentAs' => 'format',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'SignInvoice' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/invoices/{id}/upload-signature',
            'summary' => 'Upload a digital signature for a given invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters' => [
                'id' => [
                    'description' => 'Invoice id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'signature' => [
                    'description' => 'Digital signature',
                    'location' => 'json',
                    'type' => 'object',
                    'sentAs' => 'signature',
                    'required' => true,
                    'properties' => [
                        'base64file' => [
                            'description' => 'Base64 encoded PDF with digital signature',
                            'type' => 'string',
                            'sentAs' => 'base64file',
                            'required' => true,
                        ]
                    ]
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'SendInvoiceEmail' => [
            'httpMethod' => 'POST',
            'uri' => '/api/invoices/{id}/email',
            'summary' => 'Send invoice by e-mail',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters' => [
                'id' => [
                    'description' => 'Invoice id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'email' => [
                    'description' => 'Email data',
                    'location' => 'json',
                    'type' => 'object',
                    'sentAs' => 'email',
                    'required' => true,
                    'properties' => [
                        'from' => [
                            'description' => 'Sender email address. Default: email from the settings',
                            'type' => 'string',
                            'sentAs' => 'from',
                            'required' => false,
                        ],
                        'recipients' => [
                            'description' => 'Recipients of the e-mail. There must be at least one of "to", "cc" and/or "bcc"',
                            'type' => 'object',
                            'sentAs' => 'recipients',
                            'required' => true,
                            'properties' => [
                                'to' => [
                                    'description' => 'Recipient email address',
                                    'type' => 'string',
                                    'sentAs' => 'to',
                                    'required' => false,
                                ],
                                'cc' => [
                                    'description' => 'CC Recipient',
                                    'type' => 'string',
                                    'sentAs' => 'cc',
                                    'required' => false,
                                ],
                                'bcc' => [
                                    'description' => 'BCC Recipient',
                                    'type' => 'string',
                                    'sentAs' => 'bcc',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'subject' => [
                            'description' => 'Subject of the e-mail (may include placeholders). Default: Value taken from the settings',
                            'type' => 'string',
                            'sentAs' => 'subject',
                            'required' => false,
                        ],
                        'body' => [
                            'description' => 'Text of the e-mail (may include placeholders). Default: Value taken from the settings',
                            'type' => 'string',
                            'sentAs' => 'body',
                            'required' => false,
                        ],
                        'filename' => [
                            'description' => 'Name of the PDF file (without .pdf). Default: invoice_{id}',
                            'type' => 'string',
                            'sentAs' => 'filename',
                            'required' => false,
                        ],
                        'attachments' => [
                            'description' => 'Further files',
                            'type' => 'array',
                            'sentAs' => 'attachments',
                            'required' => false,
                            'items' => [
                                'type' => 'object',
                                'sendAs' => 'attachment',
                                'properties' => [
                                    'filename' => [
                                        'description' => 'Filename',
                                        'type' => 'string',
                                        'sentAs' => 'filename',
                                        'required' => true,
                                    ],
                                    'mimetype' => [
                                        'description' => 'Mime type',
                                        'type' => 'string',
                                        'sentAs' => 'mimetype',
                                        'required' => true,
                                    ],
                                    'base64file' => [
                                        'description' => 'Base64 encoded file',
                                        'type' => 'string',
                                        'sentAs' => 'base64file',
                                        'required' => true,
                                    ],
                                ],
                            ],
                        ]
                    ]
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CancelInvoice' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/invoices/{id}/cancel',
            'summary' => 'Cancel an invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters' => [
                'id' => [
                    'description' => 'Invoice id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'UndoCancelInvoice' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/invoices/{id}/uncancel',
            'summary' => 'Undo invoice cancellation',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters' => [
                'id' => [
                    'description' => 'Invoice id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteInvoice' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/invoices/{id}',
            'summary' => 'Delete an invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters' => [
                'id' => [
                    'description' => 'Invoice id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * INVOICE ITEM RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetInvoiceItems' => [
            'httpMethod' => 'GET',
            'uri' => '/api/invoice-items',
            'summary' => 'List all invoice items',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/items',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ],
                'invoice_id' => [
                    'description' => 'ID of the invoice',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'invoice_id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetInvoiceItem' => [
            'httpMethod' => 'GET',
            'uri' => '/api/invoice-items/{id}',
            'summary' => 'Get a specific invoice item',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/items',
            'parameters' => [
                'id' => [
                    'description' => 'Invoice item id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateInvoiceItem' => [
            'httpMethod' => 'POST',
            'uri' => '/api/invoice-items',
            'summary' => 'Create an invoice item',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/items',
            'parameters' => [
                'invoice-item' => $invoiceItemParameterCreate
            ],
            'responseModel' => 'Generic',
        ],

        'UpdateInvoiceItem' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/invoice-items/{id}',
            'summary' => 'Update an invoice item',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/items',
            'parameters' => [
                'id' => [
                    'description' => 'Invoice item id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'invoice-item' => $invoiceItemParameter
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteInvoiceItem' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/invoice-items/{id}',
            'summary' => 'Delete an invoice item',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/items',
            'parameters' => [
                'id' => [
                    'description' => 'Invoice item id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * INVOICE PAYMENT RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetInvoicePayments' => [
            'httpMethod' => 'GET',
            'uri' => '/api/invoice-payments',
            'summary' => 'List all invoice payments',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/payments',
            'parameters' => [
                'invoice_id' => [
                    'description' => 'ID of the invoice',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'invoice_id',
                    'required' => false
                ],
                'from' => [
                    'description' => 'Only list payments since this date (format YYYY-MM-DD)',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'from',
                    'required' => false
                ],
                'to' => [
                    'description' => 'Only list payments up to this date (format YYYY-MM-DD)',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'to',
                    'required' => false
                ],
                'type' => [
                    'description' => 'Payment type',
                    'location' => 'query',
                    'type' => 'string',
                    'enum' => ['CREDIT_NOTE', 'BANK_CARD', 'BANK_TRANSFER', 'DEBIT', 'CASH', 'CHECK', 'PAYPAL', 'CREDIT_CARD', 'COUPON', 'MISC'],
                    'sentAs' => 'type',
                    'required' => false,
                ],
                'user_id' => [
                    'description' => 'ID of the user',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'user_id',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetInvoicePayment' => [
            'httpMethod' => 'GET',
            'uri' => '/api/invoice-payments/{id}',
            'summary' => 'Get a specific invoice payment',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/payments',
            'parameters' => [
                'id' => [
                    'description' => 'ID of the invoice payment',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateInvoicePayment' => [
            'httpMethod' => 'POST',
            'uri' => '/api/invoice-payments',
            'summary' => 'Create an invoice payment',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/payments',
            'parameters' => [
                'invoice-payment' => $invoicePaymentParameterCreate
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteInvoicePayment' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/invoice-payments/{id}',
            'summary' => 'Delete a specific invoice payment',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/payments',
            'parameters' => [
                'id' => [
                    'description' => 'ID of the invoice payment',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * INVOICE TAG RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetInvoiceTagCloud' => [
            'httpMethod' => 'GET',
            'uri' => '/api/invoice-tags',
            'summary' => 'Get the invoice tag cloud',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/tags',
            'parameters' => [],
            'responseModel' => 'Generic',
        ],

        'GetInvoiceTags' => [
            'httpMethod' => 'GET',
            'uri' => '/api/invoice-tags',
            'summary' => 'List all invoice tags',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/tags',
            'parameters' => [
                'invoice_id' => [
                    'description' => 'ID of the invoice',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'invoice_id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetInvoiceTag' => [
            'httpMethod' => 'GET',
            'uri' => '/api/invoice-tags/{id}',
            'summary' => 'Get a specific invoice tag',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/tags',
            'parameters' => [
                'id' => [
                    'description' => 'ID of the invoice tag',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateInvoiceTag' => [
            'httpMethod' => 'POST',
            'uri' => '/api/invoice-tags',
            'summary' => 'Create an invoice tag',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/tags',
            'parameters' => [
                'invoice-tag' => $invoiceTagParameterCreate
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteInvoiceTag' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/invoice-tags/{id}',
            'summary' => 'Delete a specific invoice tag',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/tags',
            'parameters' => [
                'id' => [
                    'description' => 'ID of the invoice tag',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * CREDIT NOTE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetCreditNotes' => [
            'httpMethod' => 'GET',
            'uri' => '/api/credit-notes',
            'summary' => 'List all credit notes',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ],
                'client_id' => [
                    'description' => 'ID of the client',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'client_id',
                    'required' => false
                ],
                'contact_id' => [
                    'description' => 'ID of the contact',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'contact_id',
                    'required' => false
                ],
                'credit_note_number' => [
                    'description' => 'Credit note number',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'credit_note_number',
                    'required' => false
                ],
                'status' => [
                    'description' => 'Comma separated list of logically OR-connected statuses',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'status',
                    'required' => false
                ],
                'from' => [
                    'description' => 'Only list credit notes since this date (format YYYY-MM-DD)',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'from',
                    'required' => false
                ],
                'to' => [
                    'description' => 'Only list credit notes up to this date (format YYYY-MM-DD)',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'to',
                    'required' => false
                ],
                'label' => [
                    'description' => 'Free text search in label text',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'label',
                    'required' => false
                ],
                'intro' => [
                    'description' => 'Free text search in introductory text',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'intro',
                    'required' => false
                ],
                'note' => [
                    'description' => 'Free text search in explanatory notes',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'note',
                    'required' => false
                ],
                'tags' => [
                    'description' => 'Comma separated list of tags',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'tags',
                    'required' => false
                ],
                'group_by' => [
                    'description' => 'Grouping parameter',
                    'location' => 'query',
                    'type' => 'string',
                    'enum' => ['client', 'status', 'day', 'week', 'month', 'year'],
                    'sentAs' => 'group_by',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetCreditNote' => [
            'httpMethod' => 'GET',
            'uri' => '/api/credit-notes/{id}',
            'summary' => 'Get a specific credit note',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters' => [
                'id' => [
                    'description' => 'Credit note id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateCreditNote' => [
            'httpMethod' => 'POST',
            'uri' => '/api/credit-notes',
            'summary' => 'Create an credit note',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters' => [
                'credit-note' => $creditNoteParameterCreate
            ],
            'responseModel' => 'Generic',
        ],

        'UpdateCreditNote' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/credit-notes/{id}',
            'summary' => 'Update an credit note',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters' => [
                'id' => [
                    'description' => 'Credit note id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'credit-note' => $creditNoteParameter
            ],
            'responseModel' => 'Generic',
        ],

        'CompleteCreditNote' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/credit-notes/{id}/complete',
            'summary' => 'Complete an credit note',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters' => [
                'id' => [
                    'description' => 'Credit note id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'complete' => [
                    'description' => 'Credit note complete data',
                    'location' => 'json',
                    'type' => 'object',
                    'sentAs' => 'complete',
                    'required' => true,
                    'properties' => [
                        'template_id' => [
                            'description' => 'ID of the template to complete the credit note with',
                            'type' => 'integer',
                            'sentAs' => 'template_id',
                            'required' => false,
                        ]
                    ]
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetCreditNotePdf' => [
            'httpMethod' => 'GET',
            'uri' => '/api/credit-notes/{id}/pdf',
            'summary' => 'Open pdf of an credit note',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters' => [
                'id' => [
                    'description' => 'Credit note id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'accept' => [
                    'description' => 'Accept header',
                    'location' => 'header',
                    'type' => 'string',
                    'enum' => ['application/pdf'],
                    'sentAs' => 'Accept',
                    'required' => false
                ],
                'format' => [
                    'description' => 'Response format',
                    'location' => 'query',
                    'type' => 'string',
                    'enum' => ['pdf'],
                    'sentAs' => 'format',
                    'required' => false
                ],
                'type' => [
                    'description' => 'Response type',
                    'location' => 'query',
                    'type' => 'string',
                    'enum' => ['print'],
                    'sentAs' => 'type',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'SignCreditNote' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/credit-notes/{id}/upload-signature',
            'summary' => 'Upload a digital signature for a given credit note',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters' => [
                'id' => [
                    'description' => 'Credit note id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'signature' => [
                    'description' => 'Digital signature',
                    'location' => 'json',
                    'type' => 'object',
                    'sentAs' => 'signature',
                    'required' => true,
                    'properties' => [
                        'base64file' => [
                            'description' => 'Base64 encoded PDF with digital signature',
                            'type' => 'string',
                            'sentAs' => 'base64file',
                            'required' => true,
                        ]
                    ]
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'SendCreditNoteEmail' => [
            'httpMethod' => 'POST',
            'uri' => '/api/credit-notes/{id}/email',
            'summary' => 'Send credit note by e-mail',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters' => [
                'id' => [
                    'description' => 'Credit note id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'email' => [
                    'description' => 'Email data',
                    'location' => 'json',
                    'type' => 'object',
                    'sentAs' => 'email',
                    'required' => true,
                    'properties' => [
                        'from' => [
                            'description' => 'Sender email address. Default: email from the settings',
                            'type' => 'string',
                            'sentAs' => 'from',
                            'required' => false,
                        ],
                        'recipients' => [
                            'description' => 'Recipients of the e-mail. There must be at least one of "to", "cc" and/or "bcc"',
                            'type' => 'object',
                            'sentAs' => 'recipients',
                            'required' => true,
                            'properties' => [
                                'to' => [
                                    'description' => 'Recipient email address',
                                    'type' => 'string',
                                    'sentAs' => 'to',
                                    'required' => false,
                                ],
                                'cc' => [
                                    'description' => 'CC Recipient',
                                    'type' => 'string',
                                    'sentAs' => 'cc',
                                    'required' => false,
                                ],
                                'bcc' => [
                                    'description' => 'BCC Recipient',
                                    'type' => 'string',
                                    'sentAs' => 'bcc',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'subject' => [
                            'description' => 'Subject of the e-mail (may include placeholders). Default: Value taken from the settings',
                            'type' => 'string',
                            'sentAs' => 'subject',
                            'required' => false,
                        ],
                        'body' => [
                            'description' => 'Text of the e-mail (may include placeholders). Default: Value taken from the settings',
                            'type' => 'string',
                            'sentAs' => 'body',
                            'required' => false,
                        ],
                        'filename' => [
                            'description' => 'Name of the PDF file (without .pdf). Default: invoice_{id}',
                            'type' => 'string',
                            'sentAs' => 'filename',
                            'required' => false,
                        ],
                        'attachments' => [
                            'description' => 'Further files',
                            'type' => 'array',
                            'sentAs' => 'attachments',
                            'required' => false,
                            'items' => [
                                'type' => 'object',
                                'sendAs' => 'attachment',
                                'properties' => [
                                    'filename' => [
                                        'description' => 'Filename',
                                        'type' => 'string',
                                        'sentAs' => 'filename',
                                        'required' => true,
                                    ],
                                    'mimetype' => [
                                        'description' => 'Mime type',
                                        'type' => 'string',
                                        'sentAs' => 'mimetype',
                                        'required' => true,
                                    ],
                                    'base64file' => [
                                        'description' => 'Base64 encoded file',
                                        'type' => 'string',
                                        'sentAs' => 'base64file',
                                        'required' => true,
                                    ],
                                ],
                            ],
                        ]
                    ]
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteCreditNote' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/credit-notes/{id}',
            'summary' => 'Delete an credit note',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters' => [
                'id' => [
                    'description' => 'Credit note id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * CREDIT NOTE ITEM RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetCreditNoteItems' => [
            'httpMethod' => 'GET',
            'uri' => '/api/credit-note-items',
            'summary' => 'List all credit note items',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes/items',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ],
                'credit_note_id' => [
                    'description' => 'ID of the credit note',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'credit_note_id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetCreditNoteItem' => [
            'httpMethod' => 'GET',
            'uri' => '/api/credit-note-items/{id}',
            'summary' => 'Get a specific credit note item',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes/items',
            'parameters' => [
                'id' => [
                    'description' => 'Credit note item id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateCreditNoteItem' => [
            'httpMethod' => 'POST',
            'uri' => '/api/credit-note-items',
            'summary' => 'Create an credit note item',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes/items',
            'parameters' => [
                'credit-note-item' => $creditNoteItemParameterCreate
            ],
            'responseModel' => 'Generic',
        ],

        'UpdateCreditNoteItem' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/credit-note-items/{id}',
            'summary' => 'Update an credit note item',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes/items',
            'parameters' => [
                'id' => [
                    'description' => 'Credit note item id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'credit-note-item' => $creditNoteItemParameter
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteCreditNoteItem' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/credit-note-items/{id}',
            'summary' => 'Delete an credit note item',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes/items',
            'parameters' => [
                'id' => [
                    'description' => 'Credit note item id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * CREDIT NOTE PAYMENT RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetCreditNotePayments' => [
            'httpMethod' => 'GET',
            'uri' => '/api/credit-note-payments',
            'summary' => 'List all credit note payments',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes/payments',
            'parameters' => [
                'credit_note_id' => [
                    'description' => 'ID of the credit note',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'credit_note_id',
                    'required' => false
                ],
                'from' => [
                    'description' => 'Only list payments since this date (format YYYY-MM-DD)',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'from',
                    'required' => false
                ],
                'to' => [
                    'description' => 'Only list payments up to this date (format YYYY-MM-DD)',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'to',
                    'required' => false
                ],
                'type' => [
                    'description' => 'Payment type',
                    'location' => 'query',
                    'type' => 'string',
                    'enum' => ['CREDIT_NOTE', 'BANK_TRANSFER', 'DEBIT', 'CASH', 'PAYPAL', 'CREDIT_CARD', 'MISC'],
                    'sentAs' => 'type',
                    'required' => false,
                ],
                'user_id' => [
                    'description' => 'ID of the user',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'user_id',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetCreditNotePayment' => [
            'httpMethod' => 'GET',
            'uri' => '/api/credit-note-payments/{id}',
            'summary' => 'Get a specific credit note payment',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes/payments',
            'parameters' => [
                'id' => [
                    'description' => 'ID of the credit note payment',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateCreditNotePayment' => [
            'httpMethod' => 'POST',
            'uri' => '/api/credit-note-payments',
            'summary' => 'Create an credit note payment',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes/payments',
            'parameters' => [
                'credit-note-payment' => $creditNotePaymentParameterCreate
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteCreditNotePayment' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/credit-note-payments/{id}',
            'summary' => 'Delete a specific credit note payment',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes/payments',
            'parameters' => [
                'id' => [
                    'description' => 'ID of the credit note payment',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * TEMPLATE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetTemplates' => [
            'httpMethod' => 'GET',
            'uri' => '/api/templates',
            'summary' => 'List all templates',
            'documentationUrl' => 'http://www.billomat.com/en/api/templates',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ],
                'type' => [
                    'description' => 'Type of the template',
                    'location' => 'query',
                    'type' => 'string',
                    'enum' => ['INVOICE', 'OFFER', 'CONFIRMATION', 'REMINDER', 'DELIVERY_NOTE', 'CREDIT_NOTE'],
                    'sentAs' => 'type',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetTemplate' => [
            'httpMethod' => 'GET',
            'uri' => '/api/templates/{id}',
            'summary' => 'Get a specific template',
            'documentationUrl' => 'http://www.billomat.com/en/api/templates',
            'parameters' => [
                'id' => [
                    'description' => 'Template id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetTemplatePreview' => [
            'httpMethod' => 'GET',
            'uri' => '/api/templates/{id}/thumb',
            'summary' => 'Get a specific template’s preview',
            'documentationUrl' => 'http://www.billomat.com/en/api/templates',
            'parameters' => [
                'id' => [
                    'description' => 'Template id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'format' => [
                    'description' => 'Format',
                    'location' => 'query',
                    'type' => 'string',
                    'enum' => ['png', 'gif', 'jpg'],
                    'sentAs' => 'format',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateTemplate' => [
            'httpMethod' => 'POST',
            'uri' => '/api/templates',
            'summary' => 'Create a template',
            'documentationUrl' => 'http://www.billomat.com/en/api/templates',
            'parameters' => [
                'template' => $templateParameterCreate
            ],
            'responseModel' => 'Generic',
        ],

        'UpdateTemplate' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/templates/{id}',
            'summary' => 'Update a template',
            'documentationUrl' => 'http://www.billomat.com/en/api/templates',
            'parameters' => [
                'id' => [
                    'description' => 'Template id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'template' => $templateParameter
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteTemplate' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/templates/{id}',
            'summary' => 'Delete a template',
            'documentationUrl' => 'http://www.billomat.com/en/api/templates',
            'parameters' => [
                'id' => [
                    'description' => 'Template id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * ARTICLE PROPERTY RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetArticleProperties' => [
            'httpMethod' => 'GET',
            'uri' => '/api/article-properties',
            'summary' => 'List all article properties',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/article-properties',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetArticleProperty' => [
            'httpMethod' => 'GET',
            'uri' => '/api/article-properties/{id}',
            'summary' => 'Get a specific article property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/article-properties',
            'parameters' => [
                'id' => [
                    'description' => 'Article property id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateArticleProperty' => [
            'httpMethod' => 'POST',
            'uri' => '/api/article-properties',
            'summary' => 'Create a article property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/article-properties',
            'parameters' => [
                'article-property' => $articlePropertyParameterCreate
            ],
            'responseModel' => 'Generic',
        ],

        'UpdateArticleProperty' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/article-properties/{id}',
            'summary' => 'Update a specific article property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/article-properties',
            'parameters' => [
                'id' => [
                    'description' => 'Article property id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'article-property' => $articlePropertyParameter
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteArticleProperty' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/article-properties/{id}',
            'summary' => 'Delete a specific article property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/article-properties',
            'parameters' => [
                'id' => [
                    'description' => 'Article property id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * CLIENT PROPERTY RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetClientProperties' => [
            'httpMethod' => 'GET',
            'uri' => '/api/client-properties',
            'summary' => 'List all client properties',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/client-properties',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetClientProperty' => [
            'httpMethod' => 'GET',
            'uri' => '/api/client-properties/{id}',
            'summary' => 'Get a specific client property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/client-properties',
            'parameters' => [
                'id' => [
                    'description' => 'Client property id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateClientProperty' => [
            'httpMethod' => 'POST',
            'uri' => '/api/client-properties',
            'summary' => 'Create a client property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/client-properties',
            'parameters' => [
                'client-property' => $clientPropertyParameterCreate
            ],
            'responseModel' => 'Generic',
        ],

        'UpdateClientProperty' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/client-properties/{id}',
            'summary' => 'Update a specific client property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/client-properties',
            'parameters' => [
                'id' => [
                    'description' => 'Client property id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'client-property' => $clientPropertyParameter
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteClientProperty' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/client-properties/{id}',
            'summary' => 'Delete a specific client property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/client-properties',
            'parameters' => [
                'id' => [
                    'description' => 'Client property id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * USER PROPERTY RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetUserProperties' => [
            'httpMethod' => 'GET',
            'uri' => '/api/user-properties',
            'summary' => 'List all user properties',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/user-properties',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetUserProperty' => [
            'httpMethod' => 'GET',
            'uri' => '/api/user-properties/{id}',
            'summary' => 'Get a specific user property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/user-properties',
            'parameters' => [
                'id' => [
                    'description' => 'User property id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateUserProperty' => [
            'httpMethod' => 'POST',
            'uri' => '/api/user-properties',
            'summary' => 'Create a user property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/user-properties',
            'parameters' => [
                'user-property' => $userPropertyParameterCreate
            ],
            'responseModel' => 'Generic',
        ],

        'UpdateUserProperty' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/user-properties/{id}',
            'summary' => 'Update a specific user property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/user-properties',
            'parameters' => [
                'id' => [
                    'description' => 'User property id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'user-property' => $userPropertyParameter
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteUserProperty' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/user-properties/{id}',
            'summary' => 'Delete a specific user property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/user-properties',
            'parameters' => [
                'id' => [
                    'description' => 'User property id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * TAX RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetTaxes' => [
            'httpMethod' => 'GET',
            'uri' => '/api/taxes',
            'summary' => 'List all taxes',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/taxes',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetTax' => [
            'httpMethod' => 'GET',
            'uri' => '/api/taxes/{id}',
            'summary' => 'Get a specific tax',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/taxes',
            'parameters' => [
                'id' => [
                    'description' => 'Tax id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateTax' => [
            'httpMethod' => 'POST',
            'uri' => '/api/taxes',
            'summary' => 'Create a tax',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/taxes',
            'parameters' => [
                'tax' => $taxParameterCreate
            ],
            'responseModel' => 'Generic',
        ],

        'UpdateTax' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/taxes/{id}',
            'summary' => 'Update a tax',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/taxes',
            'parameters' => [
                'id' => [
                    'description' => 'Tax id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'tax' => $taxParameter
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteTax' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/taxes/{id}',
            'summary' => 'Delete a tax',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/taxes',
            'parameters' => [
                'id' => [
                    'description' => 'Tax id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * COUNTRY TAX RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetCountryTaxes' => [
            'httpMethod' => 'GET',
            'uri' => '/api/country-taxes',
            'summary' => 'List all tax free countries',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/tax-free-countries',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetCountryTax' => [
            'httpMethod' => 'GET',
            'uri' => '/api/country-taxes/{id}',
            'summary' => 'Get a specific tax free country',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/tax-free-countries',
            'parameters' => [
                'id' => [
                    'description' => 'Tax free country id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateCountryTax' => [
            'httpMethod' => 'POST',
            'uri' => '/api/country-taxes',
            'summary' => 'Create a tax free country',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/tax-free-countries',
            'parameters' => [
                'country-tax' => $countryTaxParameter
            ],
            'responseModel' => 'Generic',
        ],

        'UpdateCountryTax' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/country-taxes/{id}',
            'summary' => 'Update a tax free country',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/tax-free-countries',
            'parameters' => [
                'id' => [
                    'description' => 'Tax free country id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'country-tax' => $countryTaxParameter
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteCountryTax' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/country-taxes/{id}',
            'summary' => 'Delete a tax free country',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/tax-free-countries',
            'parameters' => [
                'id' => [
                    'description' => 'Tax free country id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * REMINDER TEXT RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetReminderTexts' => [
            'httpMethod' => 'GET',
            'uri' => '/api/reminder-texts',
            'summary' => 'List all reminder texts',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/reminder-texts',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetReminderText' => [
            'httpMethod' => 'GET',
            'uri' => '/api/reminder-texts/{id}',
            'summary' => 'Get a specific reminder text',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/reminder-texts',
            'parameters' => [
                'id' => [
                    'description' => 'Reminder text id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateReminderText' => [
            'httpMethod' => 'POST',
            'uri' => '/api/reminder-texts',
            'summary' => 'Create a reminder text',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/reminder-texts',
            'parameters' => [
                'reminder-text' => $reminderTextParameter
            ],
            'responseModel' => 'Generic',
        ],

        'UpdateReminderText' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/reminder-texts/{id}',
            'summary' => 'Update a reminder text',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/reminder-texts',
            'parameters' => [
                'id' => [
                    'description' => 'Reminder text id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'reminder-text' => $reminderTextParameter
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteReminderText' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/reminder-texts/{id}',
            'summary' => 'Delete a reminder text',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/reminder-texts',
            'parameters' => [
                'id' => [
                    'description' => 'Reminder text id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * EMAIL TEMPLATE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetEmailTemplates' => [
            'httpMethod' => 'GET',
            'uri' => '/api/email-templates',
            'summary' => 'List all email templates',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/email-vorlagen',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetEmailTemplate' => [
            'httpMethod' => 'GET',
            'uri' => '/api/email-templates/{id}',
            'summary' => 'Get a specific email template',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/email-vorlagen',
            'parameters' => [
                'id' => [
                    'description' => 'Email template id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateEmailTemplate' => [
            'httpMethod' => 'POST',
            'uri' => '/api/email-templates',
            'summary' => 'Create a email template',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/email-vorlagen',
            'parameters' => [
                'email-template' => $emailTemplateParameterCreate
            ],
            'responseModel' => 'Generic',
        ],

        'UpdateEmailTemplate' => [
            'httpMethod' => 'PUT',
            'uri' => '/api/email-templates/{id}',
            'summary' => 'Update a email template',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/email-vorlagen',
            'parameters' => [
                'id' => [
                    'description' => 'Email template id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'email-template' => $emailTemplateParameter
            ],
            'responseModel' => 'Generic',
        ],

        'DeleteEmailTemplate' => [
            'httpMethod' => 'DELETE',
            'uri' => '/api/email-templates/{id}',
            'summary' => 'Delete a email template',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/email-vorlagen',
            'parameters' => [
                'id' => [
                    'description' => 'Email template id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        /**
         * --------------------------------------------------------------------------------
         * USER PROPERTY VALUE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetUserPropertyValues' => [
            'httpMethod' => 'GET',
            'uri' => '/api/user-property-values',
            'summary' => 'List all user property values',
            'documentationUrl' => 'http://www.billomat.com/en/api/users/properties',
            'parameters' => [
                'per_page' => [
                    'description' => 'Rows per page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'per_page',
                    'required' => false
                ],
                'page' => [
                    'description' => 'Page',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'page',
                    'required' => false
                ],
                'order_by' => [
                    'description' => 'Order by',
                    'location' => 'query',
                    'type' => 'string',
                    'sentAs' => 'order_by',
                    'required' => false
                ],
                'user_id' => [
                    'description' => 'ID of a user',
                    'location' => 'query',
                    'type' => 'integer',
                    'sentAs' => 'user_id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetUserPropertyValue' => [
            'httpMethod' => 'GET',
            'uri' => '/api/user-property-values/{id}',
            'summary' => 'Get a specific property',
            'documentationUrl' => 'http://www.billomat.com/en/api/users/properties',
            'parameters' => [
                'id' => [
                    'description' => 'User property value id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'SetUserPropertyValue' => [
            'httpMethod' => 'POST',
            'uri' => '/api/user-property-values',
            'summary' => 'Set a specific user property',
            'documentationUrl' => 'http://www.billomat.com/en/api/users/properties',
            'parameters' => [
                'user-property-value' => $userPropertyValueParameter
            ],
            'responseModel' => 'Generic',
        ],

        'GetSuppliers' => [
            'httpMethod' => 'GET',
            'uri' => '/api/suppliers',
            'summary' => 'List all suppliers',
            'documentationUrl' => 'http://www.billomat.com/en/api/suppliers',
            'parameters' => [
                'name' => [
                    'description' => 'Company name',
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'name',
                    'required' => false
                ],
                'email' => [
                    'description' => 'e-mail address',
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'email',
                    'required' => false
                ],
                'first_name' => [
                    'description' => 'First name of the contact person',
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'first_name',
                    'required' => false
                ],
                'last_name' => [
                    'description' => 'Last name of the contact person',
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'last_name',
                    'required' => false
                ],
                'country_code' => [
                    'description' => 'Country code as ISO 3166 Alpha-2',
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'country_code',
                    'required' => false
                ],
                'creditor_identifier' => [
                    'description' => 'SEPA creditor identifier',
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'creditor_identifier',
                    'required' => false
                ],
                'note' => [
                    'description' => 'Note',
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'note',
                    'required' => false
                ],
                'client_number' => [
                    'description' => 'Client number you may have at this supplier.',
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'client_number',
                    'required' => false
                ],
                'incoming_id' => [
                    'description' => 'ID of an incoming of this supplier, multiple values seperated with commas',
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'incoming_id',
                    'required' => false
                ],
                'tags' => [
                    'description' => 'Comma seperated list of tags',
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'tags',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetSupplier' => [
            'httpMethod' => 'GET',
            'uri' => '/api/suppliers/{id}',
            'summary' => 'Get a specific supplier',
            'documentationUrl' => 'http://www.billomat.com/en/api/suppliers',
            'parameters' => [
                'id' => [
                    'description' => 'Supplier id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetIncomings' => [
            'httpMethod' => 'GET',
            'uri' => '/api/incomings',
            'summary' => 'List all incomings',
            'documentationUrl' => 'http://www.billomat.com/en/api/incomings',
            'parameters' => [
                'supplier_id' => [
                    'description' => 'ID of the Suppliers',
                    'type' => 'integer',
                    'location' => 'query',
                    'sentAs' => 'supplier_id',
                    'required' => false
                ],
                'incoming_number' => [
                    'description' => 'incoming number of the incoming',
                    'type' => 'varchar',
                    'location' => 'query',
                    'sentAs' => 'incoming_number',
                    'required' => false
                ],
                'status' => [
                    'description' => 'Status (OPEN, PAID, OVERDUE). More than one statuses could be given as a comma separated list. Theses statuses will be logically OR-connected.',
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'status',
                    'required' => false
                ],
                'from' => [
                    'description' => 'Only show incomings since this date (format YYYY-MM-DD)',
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'from',
                    'required' => false
                ],
                'to' => [
                    'description' => 'Only show incomings up to this date (format YYYY-MM-DD)',
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'to',
                    'required' => false
                ],
                'note' => [
                    'description' => 'Free text search in notes',
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'note',
                    'required' => false
                ],
                'tags' => [
                    'description' => 'Comma seperated list of tags',
                    'type' => 'varchar',
                    'location' => 'query',
                    'sentAs' => 'tags',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'GetIncomingPdf' => [
            'httpMethod' => 'GET',
            'uri' => '/api/incomings/{id}/pdf',
            'summary' => 'Open pdf of an incoming',
            'documentationUrl' => 'http://www.billomat.com/en/api/incoming',
            'parameters' => [
                'id' => [
                    'description' => 'Incoming id',
                    'location' => 'uri',
                    'type' => 'integer',
                    'sentAs' => 'id',
                    'required' => true
                ],
                'accept' => [
                    'description' => 'Accept header',
                    'location' => 'header',
                    'type' => 'string',
                    'enum' => ['application/pdf'],
                    'sentAs' => 'Accept',
                    'required' => false
                ],
                'format' => [
                    'description' => 'Response format',
                    'location' => 'query',
                    'type' => 'string',
                    'enum' => ['pdf'],
                    'sentAs' => 'format',
                    'required' => false
                ]
            ],
            'responseModel' => 'Generic',
        ],

        'CreateIncomingTag' => [
            'httpMethod' => 'POST',
            'uri' => '/api/incoming-tags',
            'summary' => 'Create an incoming tag',
            'documentationUrl' => 'http://www.billomat.com/en/api/incomings/tags',
            'parameters' => [
                'incoming-tag' => $incomingTagParameterCreate
            ],
            'responseModel' => 'Generic',
        ],

        'CreateIncomingPayment' => [
            'httpMethod' => 'POST',
            'uri' => '/api/incoming-payments',
            'summary' => 'Create an incoming payment',
            'documentationUrl' => 'http://www.billomat.com/en/api/incoming/payments',
            'parameters' => [
                'incoming-payment' => $incomingPaymentParameterCreate
            ],
            'responseModel' => 'Generic',
        ],

        'CreateIncomingInboxDocument' => [
            'httpMethod' => 'POST',
            'uri' => '/api/inbox-documents',
            'summary' => 'Create an inbox document',
            'documentationUrl' => 'http://www.billomat.com/en/api/incomings/inbox',
            'parameters' => [
                'inbox-document' => $incomingInboxDocumentParameterCreate
            ],
            'responseModel' => 'Generic',
        ],
    ],
    'models' => [
        'Generic' => [
            'type' => 'object',
            'additionalProperties' => [
                'location' => 'json'
            ],
        ],
    ],
];
