<?php

//User Roles
function userRole($input = null)
{
    $output = [
        USER_ROLE_ADMIN => __('Admin'),
        USER_ROLE_INSTRUCTOR => __('Instructor'),
        USER_ROLE_STUDENT => __('Student')
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}


function statusAction($input = null)
{
    $output = [
        STATUS_PENDING => __('Pending'),
        STATUS_ACCEPTED => __('Accepted'),
        STATUS_REJECTED => __('Rejected'),
        STATUS_SUSPENDED => __('Suspended'),
        STATUS_DELETED => __('Deleted'),
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}


function statusWithdrawalStatus($input = null)
{
    $output = [
        WITHDRAWAL_STATUS_PENDING => __('Pending'),
        WITHDRAWAL_STATUS_COMPLETE => __('Accepted'),
        WITHDRAWAL_STATUS_REJECTED => __('Rejected'),
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function transactionTypeText($input = null)
{
    $output = [
        TRANSACTION_DEPOSIT => __('Deposit'),
        TRANSACTION_WITHDRAWAL => __('Withdrawal'),
        TRANSACTION_WITHDRAWAL_CANCEL => __('Withdrawal Cancel'),
        TRANSACTION_BUY => __('Buy'),
        TRANSACTION_SELL => __('Sell'),
        TRANSACTION_AFFILIATE => __('Affiliate'),
        TRANSACTION_REFUND => __('Refund'),
        TRANSACTION_SELL_REFUND => __('Reversed'),
        TRANSACTION_SUBSCRIPTION_BUY => __('Subscription'),
        TRANSACTION_REGISTRATION_BONUS => __('Bonus'),
        TRANSACTION_CASHBACK => __('Cashback'),
        TRANSACTION_REWARD => __('Reward'),
        TRANSACTION_WALLET_RECHARGE => __('Wallet Recharge'),
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function statusClass($input = null)
{
    $output = [
        STATUS_PENDING => 'bg-info-soft-varient',
        STATUS_ACCEPTED => 'active',
        STATUS_REJECTED => 'bg-red',
        STATUS_SUSPENDED => 'bg-yellow',
        STATUS_DELETED => 'bg-red',
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function getUserType($input = null)
{
    $output = [
        USER_ROLE_ADMIN => 'Admin',
        USER_ROLE_INSTRUCTOR => 'Instructor',
        USER_ROLE_STUDENT => 'Student'
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function getPackageStatus($input = null)
{
    $output = [
        PACKAGE_STATUS_DISABLED => __('Disabled'),
        PACKAGE_STATUS_ACTIVE => __('Active'),
        PACKAGE_STATUS_CANCELED => __('Canceled'),
        PACKAGE_STATUS_EXPIRED => __('Expired'),
        PACKAGE_STATUS_PENDING => __('Pending'),
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function dripType($input = null)
{
    $output = [
        DRIP_SHOW_ALL => __('Show all lesson'),
        DRIP_SEQUENCE => __('Available sequentially'),
        DRIP_AFTER_DAY => __('Unlock after x day from enrollment'),
        DRIP_UNLOCK_DATE => __('Unlock content by date'),
        DRIP_PRE_IDS => __('Unlock after finish pre-requisite'),
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function dripTypeHelpText($input = null)
{
    $output = [
        DRIP_SHOW_ALL => __('All lecture will open after purchase.'),
        DRIP_SEQUENCE => __('Lecture will available sequentially one after other.'),
        DRIP_AFTER_DAY => __('Lecture will available after x days of enrollment. In the lecture add step you have to set the days.'),
        DRIP_UNLOCK_DATE => __('Lecture will available on the inputted date. In the lecture add step you have to set the date.'),
        DRIP_PRE_IDS => __('Lecture will available after view the pre-requisite lecture. In the lecture add step you have to set the pre-requisite lecture.'),
    ];

    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}
function getPaymentMethodName($input = null)
{
    $output = [
        PAYPAL => 'paypal',
        STRIPE => 'stripe',
        BANK => 'bank',
        MOLLIE => 'mollie',
        INSTAMOJO => 'instamojo',
        PAYSTAC => 'paystack',
        SSLCOMMERZ => 'sslcommerz',
        MERCADOPAGO => 'mercadopago',
        FLUTTERWAVE => 'flutterwave',
        COINBASE => 'coinbase',
        ZITOPAY => 'zitopay',
        IYZIPAY => 'iyzipay',
        BITPAY => 'bitpay',
        BRAINTREE => 'braintree',
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function getPaymentMethodNameForApi($input = null)
{
    $output = [
        PAYPAL => 'Paypal',
        STRIPE => 'Stripe',
        BANK => 'Bank',
        MOLLIE => 'Mollie',
        INSTAMOJO => 'Instamojo',
        PAYSTAC => 'Paystack',
        SSLCOMMERZ => 'Sslcommerz',
        MERCADOPAGO => 'Mercadopago',
        FLUTTERWAVE => 'Flutterwave',
        COINBASE => 'Coinbase',
        ZITOPAY => 'Zitopay',
        IYZIPAY => 'Iyzipay',
        BITPAY => 'Bitpay',
        BRAINTREE => 'Braintree',
        RAZORPAY => 'razorpay',
        BINANCE => 'binance',
        ALIPAY => 'alipay',
        XENDIT => 'xendit',
        PADDLE => 'paddle',
        PAYTM => 'paytm',
        MAXICASH => 'maxicash',
        PAYHERE => 'payhere',
        CINETPAY => 'cinetpay',
        VOGUEPAY => 'voguepay',
        TOYYIBPAY => 'toyyibpay',
        PAYMOB => 'paymob',
        AUTHORIZE => 'authorize',
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function newGateway($input = null)
{
    $output = [
        BINANCE => 'binance',
        ALIPAY => 'alipay',
        PAYTM => 'paytm',
        MAXICASH => 'maxicash',
        PAYHERE => 'payhere',
        CINETPAY => 'cinetpay',
        VOGUEPAY => 'voguepay',
        TOYYIBPAY => 'toyyibpay',
        PAYMOB => 'paymob',
        AUTHORIZE => 'authorize',
        XENDIT => 'xendit',
        PADDLE => 'paddle'
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function gatewaySettings()
{
    return [
        'binance' => [
            ['label' => 'Url', 'name' => 'url', 'is_show' => 0],
            ['label' => 'Client ID', 'name' => 'key', 'is_show' => 1],
            ['label' => 'Client Secret', 'name' => 'secret', 'is_show' => 1],
        ],
        'payhere' => [
            ['label' => 'Url', 'name' => 'url', 'is_show' => 0],
            ['label' => 'Merchant ID', 'name' => 'key', 'is_show' => 1],
            ['label' => 'Merchant Secret', 'name' => 'secret', 'is_show' => 1],
        ],
        'maxicash' => [
            ['label' => 'Url', 'name' => 'url', 'is_show' => 0],
            ['label' => 'Merchant ID', 'name' => 'key', 'is_show' => 1],
            ['label' => 'Password', 'name' => 'secret', 'is_show' => 1],
        ],
        'paytm' => [
            ['label' => 'Industry Type', 'name' => 'url', 'is_show' => 1],
            ['label' => 'Merchant Key', 'name' => 'key', 'is_show' => 1],
            ['label' => 'Merchant ID', 'name' => 'secret', 'is_show' => 1],
        ],
        'cinetpay' => [
            ['label' => 'Industry Type', 'name' => 'url', 'is_show' => 0],
            ['label' => 'API Key', 'name' => 'key', 'is_show' => 1],
            ['label' => 'Site ID', 'name' => 'secret', 'is_show' => 1],
        ],
        'voguepay' => [
            ['label' => 'Industry Type', 'name' => 'url', 'is_show' => 0],
            ['label' => 'Merchant ID', 'name' => 'key', 'is_show' => 1],
            ['label' => 'Merchant ID', 'name' => 'secret', 'is_show' => 0],
        ],
        'toyyibpay' => [
            ['label' => 'Industry Type', 'name' => 'url', 'is_show' => 0],
            ['label' => 'Secret Key', 'name' => 'key', 'is_show' => 1],
            ['label' => 'Category Code', 'name' => 'secret', 'is_show' => 1],
        ],
        'paymob' => [
            ['label' => 'Industry Type', 'name' => 'url', 'is_show' => 0],
            ['label' => 'API Key', 'name' => 'key', 'is_show' => 1],
            ['label' => 'Integration ID', 'name' => 'secret', 'is_show' => 1],
        ],
        'alipay' => [
            ['label' => 'APP ID', 'name' => 'url', 'is_show' => 1],
            ['label' => 'Public Key', 'name' => 'key', 'is_show' => 1],
            ['label' => 'Private Key', 'name' => 'secret', 'is_show' => 1],
        ],
        'authorize' => [
            ['label' => 'Industry Type', 'name' => 'url', 'is_show' => 0],
            ['label' => 'Login ID', 'name' => 'key', 'is_show' => 1],
            ['label' => 'Transaction Key', 'name' => 'secret', 'is_show' => 1],
        ],
        'xendit' => [
          ['label' => 'APP ID','name' => 'url', 'is_show' => 0],
          ['label' => 'Public Key','name' => 'key', 'is_show' => 1],
          ['label' => 'Secret','name' => 'secret', 'is_show' => 0],
        ],
        'paddle' => [
          ['label' => 'Vendor ID','name' => 'url', 'is_show' => 1],
          ['label' => 'Vendor Auth Key','name' => 'key', 'is_show' => 1],
          ['label' => 'Secret','name' => 'secret', 'is_show' => 0],
        ],
    ];
}



function getPaymentMethodId($input = null)
{
    $output = [
        'paypal' => PAYPAL,
        'stripe' => STRIPE,
        'bank' => BANK,
        'mollie' => MOLLIE,
        'instamojo' => INSTAMOJO,
        'paystack' => PAYSTAC,
        'sslcommerz' => SSLCOMMERZ,
        'mercadopago' => MERCADOPAGO,
        'flutterwave' => FLUTTERWAVE,
        'coinbase' => COINBASE,
        'zitopay' => ZITOPAY,
        'iyzipay' => IYZIPAY,
        'bitpay' => BITPAY,
        'braintree' => BRAINTREE,
        'razorpay' => RAZORPAY,
        'binance' => BINANCE,
        'alipay' => ALIPAY,
        'paytm' => PAYTM,
        'maxicash' => MAXICASH,
        'payhere' => PAYHERE,
        'cinetpay' => CINETPAY,
        'voguepay' => VOGUEPAY,
        'toyyibpay' => TOYYIBPAY,
        'paymob' => PAYMOB,
        'authorize' => AUTHORIZE,
        'xendit' => XENDIT,
        'paddle' => PADDLE,
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function getOpenAIModel($input = null)
{
    $output = [
        'text-ada-001' => 'Ada (GPT 3)',
        'text-babbage-001' => 'Babbage (GPT 3)',
        'text-curie-001' => 'Curie (GPT 3)',
        'text-davinci-003' => 'Davinci (GPT 3)',
        'gpt-3.5-turbo' => 'ChatGPT (3.5 Turbo)',
        'gpt-4' => 'GPT 4 (8K)',
        'gpt-4-32k' => 'GPT 4 (32K)'
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input];
    }
}

function getOpenAiLanguage($input = null)
{
    $output = [
        "Arabic" => "Arabic",
        "Bengali" => "Bengali",
        "Chinese (Simplified)" => "Chinese (Simplified)",
        "Chinese (Traditional)" => "Chinese (Traditional)",
        "Dutch" => "Dutch",
        "Danish" => "Danish",
        "English" => "English",
        "French" => "French",
        "German" => "German",
        "Hebrew" => "Hebrew",
        "Hindi" => "Hindi",
        "Indonesian" => "Indonesian",
        "Italian" => "Italian",
        "Japanese" => "Japanese",
        "Korean" => "Korean",
        "Malay" => "Malay",
        "Norwegian" => "Norwegian",
        "Persian (Farsi)" => "Persian (Farsi)",
        "Polish" => "Polish",
        "Portuguese" => "Portuguese",
        "Punjabi" => "Punjabi",
        "Romanian" => "Romanian",
        "Russian" => "Russian",
        "Spanish" => "Spanish",
        "Swedish" => "Swedish",
        "Tamil" => "Tamil",
        "Telugu" => "Telugu",
        "Thai" => "Thai",
        "Turkish" => "Turkish",
        "Ukrainian" => "Ukrainian",
        "Urdu" => "Urdu",
        "Vietnamese" => "Vietnamese",
        "Serbian" => "Serbian",
        "Croatian" => "Croatian",
        "Albanian" => "Albanian",
        "Macedonian" => "Macedonian"
    ];

    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input];
    }
}

function getCurrency($input = null)
{
    $output = array (
        "AFA" => "Afghan Afghani(؋)",
        "ALL" => "Albanian Lek(Lek)",
        "DZD" => "Algerian Dinar(دج)",
        "AOA" => "Angolan Kwanza(Kz)",
        "ARS" => "Argentine Peso($)",
        "AMD" => "Armenian Dram(֏)",
        "AWG" => "Aruban Florin(ƒ)",
        "AUD" => "Australian Dollar($)",
        "AZN" => "Azerbaijani Manat(m)",
        "BSD" => "Bahamian Dollar(B$)",
        "BHD" => "Bahraini Dinar(.د.ب)",
        "BDT" => "Bangladeshi Taka(৳)",
        "BBD" => "Barbadian Dollar(Bds$)",
        "BYR" => "Belarusian Ruble(Br)",
        "BEF" => "Belgian Franc(fr)",
        "BZD" => "Belize Dollar($)",
        "BMD" => "Bermudan Dollar($)",
        "BTN" => "Bhutanese Ngultrum(Nu.)",
        "BTC" => "Bitcoin(฿)",
        "BOB" => "Bolivian Boliviano(Bs.)",
        "BAM" => "Bosnia(KM)",
        "BWP" => "Botswanan Pula(P)",
        "BRL" => "Brazilian Real(R$)",
        "GBP" => "British Pound Sterling(£)",
        "BND" => "Brunei Dollar(B$)",
        "BGN" => "Bulgarian Lev(Лв.)",
        "BIF" => "Burundian Franc(FBu)",
        "KHR" => "Cambodian Riel(KHR)",
        "CAD" => "Canadian Dollar($)",
        "CVE" => "Cape Verdean Escudo($)",
        "KYD" => "Cayman Islands Dollar($)",
        "XOF" => "CFA Franc BCEAO(CFA)",
        "XAF" => "CFA Franc BEAC(FCFA)",
        "XPF" => "CFP Franc(₣)",
        "CLP" => "Chilean Peso($)",
        "CNY" => "Chinese Yuan(¥)",
        "COP" => "Colombian Peso($)",
        "KMF" => "Comorian Franc(CF)",
        "CDF" => "Congolese Franc(FC)",
        "CRC" => "Costa Rican ColÃ³n(₡)",
        "HRK" => "Croatian Kuna(kn)",
        "CUC" => "Cuban Convertible Peso($, CUC)",
        "CZK" => "Czech Republic Koruna(Kč)",
        "DKK" => "Danish Krone(Kr.)",
        "DJF" => "Djiboutian Franc(Fdj)",
        "DOP" => "Dominican Peso($)",
        "XCD" => "East Caribbean Dollar($)",
        "EGP" => "Egyptian Pound(ج.م)",
        "ERN" => "Eritrean Nakfa(Nfk)",
        "EEK" => "Estonian Kroon(kr)",
        "ETB" => "Ethiopian Birr(Nkf)",
        "EUR" => "Euro(€)",
        "FKP" => "Falkland Islands Pound(£)",
        "FJD" => "Fijian Dollar(FJ$)",
        "GMD" => "Gambian Dalasi(D)",
        "GEL" => "Georgian Lari(ლ)",
        "DEM" => "German Mark(DM)",
        "GHS" => "Ghanaian Cedi(GH₵)",
        "GIP" => "Gibraltar Pound(£)",
        "GRD" => "Greek Drachma(₯, Δρχ, Δρ)",
        "GTQ" => "Guatemalan Quetzal(Q)",
        "GNF" => "Guinean Franc(FG)",
        "GYD" => "Guyanaese Dollar($)",
        "HTG" => "Haitian Gourde(G)",
        "HNL" => "Honduran Lempira(L)",
        "HKD" => "Hong Kong Dollar($)",
        "HUF" => "Hungarian Forint(Ft)",
        "ISK" => "Icelandic KrÃ³na(kr)",
        "INR" => "Indian Rupee(₹)",
        "IDR" => "Indonesian Rupiah(Rp)",
        "IRR" => "Iranian Rial(﷼)",
        "IQD" => "Iraqi Dinar(د.ع)",
        "ILS" => "Israeli New Sheqel(₪)",
        "ITL" => "Italian Lira(L,£)",
        "JMD" => "Jamaican Dollar(J$)",
        "JPY" => "Japanese Yen(¥)",
        "JOD" => "Jordanian Dinar(ا.د)",
        "KZT" => "Kazakhstani Tenge(лв)",
        "KES" => "Kenyan Shilling(KSh)",
        "KWD" => "Kuwaiti Dinar(ك.د)",
        "KGS" => "Kyrgystani Som(лв)",
        "LAK" => "Laotian Kip(₭)",
        "LVL" => "Latvian Lats(Ls)",
        "LBP" => "Lebanese Pound(£)",
        "LSL" => "Lesotho Loti(L)",
        "LRD" => "Liberian Dollar($)",
        "LYD" => "Libyan Dinar(د.ل)",
        "LTL" => "Lithuanian Litas(Lt)",
        "MOP" => "Macanese Pataca($)",
        "MKD" => "Macedonian Denar(ден)",
        "MGA" => "Malagasy Ariary(Ar)",
        "MWK" => "Malawian Kwacha(MK)",
        "MYR" => "Malaysian Ringgit(RM)",
        "MVR" => "Maldivian Rufiyaa(Rf)",
        "MRO" => "Mauritanian Ouguiya(MRU)",
        "MUR" => "Mauritian Rupee(₨)",
        "MXN" => "Mexican Peso($)",
        "MDL" => "Moldovan Leu(L)",
        "MNT" => "Mongolian Tugrik(₮)",
        "MAD" => "Moroccan Dirham(MAD)",
        "MZM" => "Mozambican Metical(MT)",
        "MMK" => "Myanmar Kyat(K)",
        "NAD" => "Namibian Dollar($)",
        "NPR" => "Nepalese Rupee(₨)",
        "ANG" => "Netherlands Antillean Guilder(ƒ)",
        "TWD" => "New Taiwan Dollar($)",
        "NZD" => "New Zealand Dollar($)",
        "NIO" => "Nicaraguan CÃ³rdoba(C$)",
        "NGN" => "Nigerian Naira(₦)",
        "KPW" => "North Korean Won(₩)",
        "NOK" => "Norwegian Krone(kr)",
        "OMR" => "Omani Rial(.ع.ر)",
        "PKR" => "Pakistani Rupee(₨)",
        "PAB" => "Panamanian Balboa(B/.)",
        "PGK" => "Papua New Guinean Kina(K)",
        "PYG" => "Paraguayan Guarani(₲)",
        "PEN" => "Peruvian Nuevo Sol(S/.)",
        "PHP" => "Philippine Peso(₱)",
        "PLN" => "Polish Zloty(zł)",
        "QAR" => "Qatari Rial(ق.ر)",
        "RON" => "Romanian Leu(lei)",
        "RUB" => "Russian Ruble(₽)",
        "RWF" => "Rwandan Franc(FRw)",
        "SVC" => "Salvadoran ColÃ³n(₡)",
        "WST" => "Samoan Tala(SAT)",
        "SAR" => "Saudi Riyal(﷼)",
        "RSD" => "Serbian Dinar(din)",
        "SCR" => "Seychellois Rupee(SRe)",
        "SLL" => "Sierra Leonean Leone(Le)",
        "SGD" => "Singapore Dollar($)",
        "SKK" => "Slovak Koruna(Sk)",
        "SBD" => "Solomon Islands Dollar(Si$)",
        "SOS" => "Somali Shilling(Sh.so.)",
        "ZAR" => "South African Rand(R)",
        "KRW" => "South Korean Won(₩)",
        "XDR" => "Special Drawing Rights(SDR)",
        "LKR" => "Sri Lankan Rupee(Rs)",
        "SHP" => "St. Helena Pound(£)",
        "SDG" => "Sudanese Pound(.س.ج)",
        "SRD" => "Surinamese Dollar($)",
        "SZL" => "Swazi Lilangeni(E)",
        "SEK" => "Swedish Krona(kr)",
        "CHF" => "Swiss Franc(CHf)",
        "SYP" => "Syrian Pound(LS)",
        "STD" => "São Tomé and Príncipe Dobra(Db)",
        "TJS" => "Tajikistani Somoni(SM)",
        "TZS" => "Tanzanian Shilling(TSh)",
        "THB" => "Thai Baht(฿)",
        "TOP" => "Tongan pa'anga($)",
        "TTD" => "Trinidad & Tobago Dollar($)",
        "TND" => "Tunisian Dinar(ت.د)",
        "TRY" => "Turkish Lira(₺)",
        "TMT" => "Turkmenistani Manat(T)",
        "UGX" => "Ugandan Shilling(USh)",
        "UAH" => "Ukrainian Hryvnia(₴)",
        "AED" => "United Arab Emirates Dirham(إ.د)",
        "UYU" => "Uruguayan Peso($)",
        "USD" => "US Dollar($)",
        "UZS" => "Uzbekistan Som(лв)",
        "VUV" => "Vanuatu Vatu(VT)",
        "VEF" => "Venezuelan BolÃvar(Bs)",
        "VND" => "Vietnamese Dong(₫)",
        "YER" => "Yemeni Rial(﷼)",
        "ZMK" => "Zambian Kwacha(ZK)"
    );
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function getPaymentMethodConversionRate($input = null)
{
    $output = [
        PAYPAL => 'paypal',
        STRIPE => 'stripe',
        BANK => 'bank',
        MOLLIE => 'mollie',
        INSTAMOJO => 'instamojo',
        PAYSTAC => 'paystack',
        SSLCOMMERZ => 'sslcommerz',
        MERCADOPAGO => 'mercadopago',
        FLUTTERWAVE => 'flutterwave',
        COINBASE => 'coinbase',
        ZITOPAY => 'zitopay',
        IYZIPAY => 'iyzipay',
        BITPAY => 'bitpay',
        BRAINTREE => 'braintree',
        RAZORPAY => 'razorpay',
        BINANCE => 'binance',
        ALIPAY => 'alipay',
        XENDIT => 'xendit',
        PADDLE => 'paddle',
        PAYTM => 'paytm',
        MAXICASH => 'maxicash',
        PAYHERE => 'payhere',
        CINETPAY => 'cinetpay',
        VOGUEPAY => 'voguepay',
        TOYYIBPAY => 'toyyibpay',
        PAYMOB => 'paymob',
        AUTHORIZE => 'authorize',
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function getBadgeButtonName($input = null)
{
    $output = [
        RANKING_LEVEL_REGISTRATION => __('Days'),
        RANKING_LEVEL_EARNING => __('Total Sale Amount'),
        RANKING_LEVEL_COURSES_COUNT => __('Courses'),
        RANKING_LEVEL_STUDENTS_COUNT => __('Student'),
        RANKING_LEVEL_COURSES_SALE_COUNT => __('Sales'),
    ];

    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function getBeneficiaryName($input = null)
{
    $output = [
        BENEFICIARY_BANK => __('Bank'),
        BENEFICIARY_CARD => __('Card'),
        BENEFICIARY_PAYPAL => __('Paypal')
    ];
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}


if (!function_exists('getMetaPages')) {
    function getMetaPages($input = null)
    {
        $output = [
           'default' => __('Default'),
           'auth' => __('Auth Page'),
           'home' => __('Home'),
           'course' => __('Course List'),
           'bundle' => __('Bundle List'),
           'consultation' => __('Consultation List'),
           'instructor' => __('Instructor List'),
           'saas' => __('Saas List'),
           'subscription' => __('Subscription List'),
           'blog' => __('Blog List'),
           'verify_certificate' => __('Verify Certificate'),
           'contact_us' => __('Contact Us'),
           'about_us' => __('About Us'),
           'forum' => __('Forum'),
           'support_faq' => __('Support page'),
           'faq' => __('Faq page'),
           'privacy_policy' => __('Privacy Policy'),
           'cookie_policy' => __('Cookie Policy'),
           'terms_and_condition' => __('Terms & Condition'),
           'refund_policy' => __('Refund Policy'),
        ];
        if (is_null($input)) {
            return $output;
        } else {
            return $output[$input] ?? '';
        }
    }
}


function getProductByType($input = null)
{
    $output = [
        PHYSICAL_PRODUCT => __('Physical'),
        DIGITAL_PRODUCT => __('Digital'),
    ];

    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function getThemes($input = null)
{
    $output = [
        THEME_DEFAULT => __('Default'),
        THEME_TWO => __('Classic'),
        THEME_THREE => __('Modern'),
        THEME_FOUR => __('Language'),
        THEME_FIVE => __('Cooking'),
        THEME_SIX => __('Meditation'),
        THEME_SEVEN => __('Kindergarten'),
    ];

    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

function getPaymentServiceClass($input = null)
{
    $output = array(
        PAYPAL => 'App\Http\Services\Payment\PaypalService',
        STRIPE => 'App\Http\Services\Payment\StripeService',
        RAZORPAY => 'App\Http\Services\Payment\RazorpayService',
        INSTAMOJO => 'App\Http\Services\Payment\InstamojoService',
        MOLLIE => 'App\Http\Services\Payment\MollieService',
        COINBASE => 'App\Http\Services\Payment\CoinbaseService',
        PAYSTAC => 'App\Http\Services\Payment\PaystackService',
        SSLCOMMERZ => 'App\Http\Services\Payment\SslCommerzService',
        MERCADOPAGO => 'App\Http\Services\Payment\MarcadoPagoService',
        FLUTTERWAVE => 'App\Http\Services\Payment\FlutterwaveService',
        IYZIPAY => 'App\Http\Services\Payment\IyzipayService',
        BITPAY => 'App\Http\Services\Payment\BitPayService',
        ZITOPAY => 'App\Http\Services\Payment\ZitoPayService',
        BRAINTREE => 'App\Http\Services\Payment\BrainTreeService',
        BINANCE => 'App\Http\Services\Payment\BinancePaymentService',
        PAYTM => 'App\Http\Services\Payment\PaytmService',
        PAYHERE => 'App\Http\Services\Payment\PayHerePaymentService',
        MAXICASH => 'App\Http\Services\Payment\MaxiCashService',
        CINETPAY => 'App\Http\Services\Payment\CinetPayService',
        VOGUEPAY => 'App\Http\Services\Payment\VoguePayService',
        TOYYIBPAY => 'App\Http\Services\Payment\ToyyibPayService',
        PAYMOB => 'App\Http\Services\Payment\PaymobService',
        AUTHORIZE  => 'App\Http\Services\Payment\AuthorizeNetService',
        ALIPAY => 'App\Http\Services\Payment\AlipayService',
        XENDIT => 'App\Http\Services\Payment\XenditService',
        BANK => 'App\Http\Services\Payment\BankService',
        PADDLE => 'App\Http\Services\Payment\PaddleService',
    );
    if (is_null($input)) {
        return $output;
    } else {
        return $output[$input] ?? '';
    }
}

if (!function_exists("getGatewaySupportedCurrencies")) {
    function getGatewaySupportedCurrencies($gateway = null)
    {
        $supported_currencies = array(
            PAYPAL => [
                'AUD', 'BRL', 'CAD', 'CNY', 'CZK', 'DKK', 'EUR', 'HKD', 'HUF', 'INR',
                'ILS', 'JPY', 'MYR', 'MXN', 'TWD', 'NZD', 'NOK', 'PHP', 'PLN', 'GBP',
                'RUB', 'SGD', 'SEK', 'CHF', 'THB', 'USD', 'VND', 'ZAR'
            ],
            STRIPE => [
                // Comprehensive global currency support
                'AED', 'AFN', 'ALL', 'AMD', 'ANG', 'AOA', 'ARS', 'AUD', 'AWG', 'AZN',
                'BAM', 'BBD', 'BDT', 'BGN', 'BHD', 'BIF', 'BMD', 'BND', 'BOB', 'BRL',
                'BSD', 'BTN', 'BWP', 'BYN', 'BZD', 'CAD', 'CDF', 'CHF', 'CLP', 'CNY',
                'COP', 'CRC', 'CUC', 'CUP', 'CVE', 'CZK', 'DJF', 'DKK', 'DOP', 'DZD',
                'EGP', 'ERN', 'ETB', 'EUR', 'FJD', 'FKP', 'GBP', 'GEL', 'GGP', 'GHS',
                'GIP', 'GMD', 'GNF', 'GTQ', 'GYD', 'HKD', 'HNL', 'HRK', 'HTG', 'HUF',
                'IDR', 'ILS', 'IMP', 'INR', 'IQD', 'IRR', 'ISK', 'JEP', 'JMD', 'JOD',
                'JPY', 'KES', 'KGS', 'KHR', 'KMF', 'KPW', 'KRW', 'KWD', 'KYD', 'KZT',
                'LAK', 'LBP', 'LKR', 'LRD', 'LSL', 'LYD', 'MAD', 'MDL', 'MGA', 'MKD',
                'MMK', 'MNT', 'MOP', 'MRU', 'MUR', 'MVR', 'MWK', 'MXN', 'MYR', 'MZN',
                'NAD', 'NGN', 'NIO', 'NOK', 'NPR', 'NZD', 'OMR', 'PAB', 'PEN', 'PGK',
                'PHP', 'PKR', 'PLN', 'PYG', 'QAR', 'RON', 'RSD', 'RUB', 'RWF', 'SAR',
                'SBD', 'SCR', 'SDG', 'SEK', 'SGD', 'SHP', 'SLL', 'SOS', 'SRD', 'STN',
                'SVC', 'SYP', 'SZL', 'THB', 'TJS', 'TMT', 'TND', 'TOP', 'TRY', 'TTD',
                'TVD', 'TWD', 'TZS', 'UAH', 'UGX', 'USD', 'UYU', 'UZS', 'VES', 'VND',
                'VUV', 'WST', 'XAF', 'XCD', 'XOF', 'XPF', 'YER', 'ZAR', 'ZMW', 'ZWL'
            ],
            RAZORPAY => ['INR', 'USD', 'EUR', 'GBP', 'AED', 'AUD', 'CAD', 'SGD'],
            INSTAMOJO => ['INR'],
            MOLLIE => ['EUR', 'GBP', 'USD', 'CHF', 'PLN', 'SEK', 'NOK', 'DKK', 'AUD', 'CAD'],
            COINBASE => ['BTC', 'ETH', 'LTC', 'BCH', 'XRP', 'USDC', 'USDT', 'ADA', 'DOGE', 'MATIC', 'SHIB', 'APE', 'SOL', 'DOT', 'UNI', 'ATOM'],
            PAYSTAC => ['NGN', 'USD', 'ZAR', 'GHS', 'EUR', 'GBP'],
            SSLCOMMERZ => ['BDT', 'USD', 'INR', 'EUR', 'GBP'],
            MERCADOPAGO => ['ARS', 'BRL', 'CLP', 'COP', 'MXN', 'PEN', 'UYU', 'USD'],
            FLUTTERWAVE => ['NGN', 'USD', 'KES', 'GHS', 'ZAR', 'GBP', 'EUR'],
            IYZIPAY => ['TRY', 'USD', 'EUR', 'GBP'],
            BITPAY => ['BTC', 'BCH', 'ETH', 'USDT', 'DOGE', 'SHIB', 'LTC', 'WBTC', 'GUSD', 'USDC', 'DAI', 'EUROC'],
            ZITOPAY => ['USD', 'EUR', 'GBP', 'NGN'],  // Assuming major currencies based on typical global coverage
            BINANCE => ['BTC', 'ETH', 'BNB', 'USDT', 'BUSD', 'ADA', 'DOT', 'SOL'],  // Cryptocurrencies
            PAYTM => ['INR'],
            PAYHERE => ['LKR', 'USD', 'EUR', 'GBP'],
            MAXICASH => ['USD', 'XAF', 'XOF'],
            CINETPAY => ['XOF', 'XAF', 'EUR', 'USD'],
            VOGUEPAY => ['NGN', 'USD', 'GBP'],
            TOYYIBPAY => ['MYR'],
            PAYMOB => ['EGP'],
            AUTHORIZE => ['USD', 'CAD', 'GBP', 'EUR', 'AUD', 'NZD'],
            ALIPAY => [
                'CNY', 'USD', 'EUR', 'GBP', 'HKD', 'JPY', 'AUD', 'SGD', 'CAD', 'NZD',
                'KRW', 'THB'
            ],
            XENDIT => ['IDR', 'PHP', 'USD', 'VND', 'THB', 'MYR','SGD'],
            PADDLE => ['USD','EUR','GBP','AUD','CAD'],
            BRAINTREE => [
                'AED', 'AMD', 'AOA', 'ARS', 'AUD', 'AWG', 'AZN', 'BAM', 'BBD', 'BDT', 'BGN', 'BIF', 'BMD', 'BND', 'BOB', 'BRL',
                'BSD', 'BWP', 'BYN', 'BZD', 'CAD', 'CHF', 'CLP', 'CNY', 'COP', 'CRC', 'CVE', 'CZK', 'DJF', 'DKK', 'DOP', 'DZD',
                'EGP', 'ETB', 'EUR', 'FJD', 'FKP', 'GBP', 'GEL', 'GHS', 'GIP', 'GMD', 'GNF', 'GTQ', 'GYD', 'HKD', 'HNL', 'HRK',
                'HTG', 'HUF', 'IDR', 'ILS', 'INR', 'ISK', 'JMD', 'JPY', 'KES', 'KGS', 'KHR', 'KMF', 'KRW', 'KYD', 'KZT', 'LAK',
                'LBP', 'LKR', 'LRD', 'LSL', 'LTL', 'MAD', 'MDL', 'MKD', 'MNT', 'MOP', 'MUR', 'MVR', 'MWK', 'MXN', 'MYR', 'MZN',
                'NAD', 'NGN', 'NIO', 'NOK', 'NPR', 'NZD', 'PAB', 'PEN', 'PGK', 'PHP', 'PKR', 'PLN', 'PYG', 'QAR', 'RON', 'RSD',
                'RUB', 'RWF', 'SAR', 'SBD', 'SCR', 'SEK', 'SGD', 'SHP', 'SLL', 'SOS', 'SRD', 'STD', 'SVC', 'SYP', 'SZL', 'THB',
                'TJS', 'TOP', 'TRY', 'TTD', 'TWD', 'TZS', 'UAH', 'UGX', 'USD', 'UYU', 'UZS', 'VES', 'VND', 'VUV', 'WST', '1XAF',
                'XCD', 'XOF', 'XPF', 'YER', 'ZAR', 'ZMK', 'ZWD'
            ]


        );

        if (is_null($gateway)) {
            return $supported_currencies;
        } else {
            return $supported_currencies[$gateway] ?? [];
        }
    }
}
