<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute je správny.',
    'accepted_if' => ':attribute je správny, ak :other je :value.',
    'active_url' => ':attribute nie je platná URL adresa.',
    'after' => ':attribute musí byť dátum väčší než :date.',
    'after_or_equal' => ':attribute musí byť dátum väčší alebo rovný dátumu :date.',
    'alpha' => ':attribute musí obsahovať len písmená.',
    'alpha_dash' => ':attribute musí obsahovať len písmená, čísla, čiarky a podčiarkovníky.',
    'alpha_num' => ':attribute musí obsahovať len písmená a čísla.',
    'array' => ':attribute musí byť pole.',
    'before' => ':attribute musí byť dátum menší než :date.',
    'before_or_equal' => ':attribute musí byť dátum menší alebo rovný než :date.',
    'between' => [
        'array' => ':attribute musí mať :min až :max položiek.',
        'file' => ':attribute musí mať :min až :max kB.',
        'numeric' => ':attribute musí byť :min až :max.',
        'string' => ':attribute musí mať :min až :max znakov.',
    ],
    'boolean' => ':attribute musí byť áno alebo nie.',
    'confirmed' => ':attribute potvrdenie sa nezhoduje.',
    'current_password' => 'Nesprávne heslo.',
    'date' => ':attribute nie je platný dátum.',
    'date_equals' => ':attribute musí byť dátum :date.',
    'date_format' => ':attribute nie je platným formátom dátumu podľa :format.',
    'declined' => ':attribute musí byť odmietnutý.',
    'declined_if' => ':attribute musí byť odmietnutý ak :other má hodnotu :value.',
    'different' => ':attribute a :other sa nesmú zhodovať.',
    'digits' => ':attribute musí obsahovať :digits čísel.',
    'digits_between' => ':attribute musí obsahovať od :min do :max znakov.',
    'dimensions' => ':attribute má neplatné rozmery obrázka.',
    'distinct' => ':attribute má duplicitnú hodnotu.',
    'email' => ':attribute musí byť platný e-mail.',
    'ends_with' => ':attribute musí končiť jedným z: :values.',
    'enum' => 'Zvolený :attribute nie je platný.',
    'exists' => 'Zvolený atribút :attribute nie je platný.',
    'file' => ':attribute musí byť súbor.',
    'filled' => ':attribute musí byť vyplnený.',
    'gt' => [
        'array' => ':attribute musí mať viac než :value položiek',
        'file' => ':attribute musí byť väčší než :value kB.',
        'numeric' => ':attribute musí byť väčší než :value.',
        'string' => ':attribute musí byť väčší než :value znakov.',
    ],
    'gte' => [
        'array' => ':attribute musí mať viac alebo sa rovnať :value položiek',
        'file' => ':attribute musí byť väčší alebo sa rovnať :value kB.',
        'numeric' => ':attribute musí byť väčší alebo sa rovnať :value.',
        'string' => ':attribute musí byť väčší alebo sa rovnať :value znakov.',
    ],
    'image' => ':attribute musí byť obrázok.',
    'in' => 'Vybraný atribút nie je platný.',
    'in_array' => ':attribute pole sa nenachádza v :other.',
    'integer' => ':attribute musí byť celé číslo.',
    'ip' => ':attribute musí byť platná IP adresa.',
    'ipv4' => ':attribute musí byť platná IPv4 adresa.',
    'ipv6' => ':attribute musí byť platná IPv6 adresa.',
    'json' => ':attribute musí byť platný JSON reťazec.',
    'lt' => [
        'array' => ':attribute musí obsahovať menej než :min položiek.',
        'file' => ':attribute musí mať veľkosť menej než :min kB.',
        'numeric' => ':attribute musí mať hodnotu menej než :min.',
        'string' => ':attribute musí obsahovať menej než :min znakov.',
    ],
    'lte' => [
        'array' => ':attribute musí obsahovať menej alebo maximálne :min položiek.',
        'file' => ':attribute musí mať veľkosť menej alebo maximálne :min kB.',
        'numeric' => ':attribute musí mať hodnotu menej alebo maximálne :min.',
        'string' => ':attribute musí obsahovať menej alebo maximálne :min znakov.',
    ],
    'mac_address' => ':Attribute musí byť platná MAC adresa.',
    'max' => [
        'array' => ':attribute musí obsahovať maximálne :max položiek.',
        'file' => ':attribute musí mať veľkosť maximálne :max kB.',
        'numeric' => ':attribute musí mať hodnotu :max maximálne.',
        'string' => ':attribute musí obsahovať maximálne :max znakov.',
    ],
    'mimes' => ':attribute musí byť súbor typu: :values.',
    'mimetypes' => ':attribute musí byť súbor typu: :values.',
    'min' => [
        'array' => ':attribute musí obsahovať minimálne :min položiek.',
        'file' => ':attribute musí mať veľkosť minimálne :min kB.',
        'numeric' => ':attribute musí mať hodnotu :min minimálne.',
        'string' => ':attribute musí obsahovať minimálne :min znakov.',
    ],
    'multiple_of' => ':attribute musí byť násobkom :value.',
    'not_in' => 'Vybraný atribút :attribute nie je platný.',
    'not_regex' => ':attribute neplatný formát.',
    'numeric' => ':attribute musí byť číslo.',
    'present' => ':attribute pole musí byť zadané.',
    'prohibited' => ':attribute pole nemôže byť vyplnené.',
    'prohibited_if' => ':attribute pole nemôže byť vyplnené, ak je v poli :other hodnota :value.',
    'prohibited_unless' => ':attribute pole neumožňuje byť zadaným ak pole :other obshuje hodnoty :values.',
    'prohibits' => ':attribute pole neumožňuje poľu :other byť zadaným.',
    'regex' => ':attribute formát nie je platný.',
    'required' => ':attribute pole je povinné.',
    'required_array_keys' => ':attribute pole musí obsahovať hodnoty: :values.',
    'required_if' => ':attribute je povinné pole len ak pole :other má hodnotu :value.',
    'required_unless' => ':attribute je povinné pole len ak pole :other má hodnoty :values.',
    'required_with' => ':attribute je povinné pole ak hodnota :values je zadaná.',
    'required_with_all' => ':attribute je povinné pole ak hodnoty :values sú zadaná.',
    'required_without' => ':attribute je povinné pole ak hodnota :values nie je zadaná.',
    'required_without_all' => ':attribute je povinné pole, ak žiadna z hodnôt :values nie je zadaná.',
    'same' => ':attribute a :other musia byť zhodné.',
    'size' => [
        'array' => ':attribute musí obsahovaťmust :size položiek.',
        'file' => ':attribute musí mať veľkosť :size kB.',
        'numeric' => ':attribute musí byť :size.',
        'string' => ':attribute musí obsahovať :size znakov.',
    ],
    'starts_with' => ':attribute musí začínať jedným z nasledovných: :values.',
    'string' => ':attribute musí byť reťazec.',
    'timezone' => ':attribute musí byť platná časová zóna.',
    'unique' => ':attribute bol už použitý.',
    'uploaded' => ':attribute nebolo možné nahrať.',
    'url' => 'The :attribute musí byť platná URL adresa.',
    'uuid' => ':attribute musí byť platné používateľské UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'Neplatná hodnota.',
        ],
        'name' => [
            'required' => 'Zadajte svoje meno a priezvisko.',
        ],
        'email' => [
            'required' => 'Zadajte svoju e-mailovú adresu.',
            'email' => 'Zadajte platnú e-mailovú adresu.',
        ],
        'phone' => [
            'regex' => 'Zadajte telefónne číslo v platnom formáte.',
        ],
        'password' => [
            'required' => 'Zadajte heslo.',
            'min' => 'Heslo musí obsahovať aspoň :min znakov.',
        ],
        'password_confirmation' => [
            'required_with' => 'Zopakujte heslo na jeho potvrdenie.',
            'same' => 'Zadané heslá sa nezhodujú.',
        ],
        'terms' => [
            'accepted' => 'Pred vytvorením účtu musíte súhlasiť s podmienkami používania.',
        ],
    ],

    'attributes' => [
        'name' => 'meno a priezvisko',
        'email' => 'e-mailová adresa',
        'phone' => 'telefónne číslo',
        'password' => 'heslo',
        'password_confirmation' => 'potvrdenie hesla',
        'terms' => 'podmienky používania',
    ],
];