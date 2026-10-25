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

    'accepted' => ':Attribute je správny.',
    'accepted_if' => ':Attribute je správny, ak :other je :value.',
    'active_url' => ':Attribute nie je platná URL adresa.',
    'after' => ':Attribute musí byť dátum väčší než :date.',
    'after_or_equal' => ':Attribute musí byť dátum väčší alebo rovný dátumu :date.',
    'alpha' => ':Attribute musí obsahovať len písmená.',
    'alpha_dash' => ':Attribute musí obsahovať len písmená, čísla, čiarky a podčiarkovníky.',
    'alpha_num' => ':Attribute musí obsahovať len písmená a čísla.',
    'array' => ':Attribute musí byť pole.',
    'before' => ':Attribute musí byť dátum menší než :date.',
    'before_or_equal' => ':Attribute musí byť dátum menší alebo rovný než :date.',
    'between' => [
        'array' => ':Attribute musí mať :min až :max položiek.',
        'file' => ':Attribute musí mať :min až :max kB.',
        'numeric' => ':Attribute musí byť :min až :max.',
        'string' => ':Attribute musí mať :min až :max znakov.',
    ],
    'boolean' => ':Attribute musí byť áno alebo nie.',
    'confirmed' => ':Attribute potvrdenie sa nezhoduje.',
    'current_password' => 'Nesprávne heslo.',
    'date' => ':Attribute nie je platný dátum.',
    'date_equals' => ':Attribute musí byť dátum :date.',
    'date_format' => ':Attribute nie je platným formátom dátumu podľa :format.',
    'declined' => ':Attribute musí byť odmietnutý.',
    'declined_if' => ':Attribute musí byť odmietnutý ak :other má hodnotu :value.',
    'different' => ':Attribute a :other sa nesmú zhodovať.',
    'digits' => ':Attribute musí obsahovať :digits čísel.',
    'digits_between' => ':Attribute musí obsahovať od :min do :max znakov.',
    'dimensions' => ':Attribute má neplatné rozmery obrázka.',
    'distinct' => ':Attribute má duplicitnú hodnotu.',
    'email' => ':Attribute musí byť platný e-mail.',
    'ends_with' => ':Attribute musí končiť jedným z: :values.',
    'enum' => 'Zvolený :attribute nie je platný.',
    'exists' => 'Zvolený atribút :attribute nie je platný.',
    'file' => ':Attribute musí byť súbor.',
    'filled' => ':Attribute musí byť vyplnený.',
    'gt' => [
        'array' => ':Attribute musí mať viac než :value položiek',
        'file' => ':Attribute musí byť väčší než :value kB.',
        'numeric' => ':Attribute musí byť väčší než :value.',
        'string' => ':Attribute musí byť väčší než :value znakov.',
    ],
    'gte' => [
        'array' => ':Attribute musí mať viac alebo sa rovnať :value položiek',
        'file' => ':Attribute musí byť väčší alebo sa rovnať :value kB.',
        'numeric' => ':Attribute musí byť väčší alebo sa rovnať :value.',
        'string' => ':Attribute musí byť väčší alebo sa rovnať :value znakov.',
    ],
    'image' => ':Attribute musí byť obrázok.',
    'in' => 'Vybraný atribút nie je platný.',
    'in_array' => ':Attribute pole sa nenachádza v :other.',
    'integer' => ':Attribute musí byť celé číslo.',
    'ip' => ':Attribute musí byť platná IP adresa.',
    'ipv4' => ':Attribute musí byť platná IPv4 adresa.',
    'ipv6' => ':Attribute musí byť platná IPv6 adresa.',
    'json' => ':Attribute musí byť platný JSON reťazec.',
    'lt' => [
        'array' => ':Attribute musí obsahovať menej než :min položiek.',
        'file' => ':Attribute musí mať veľkosť menej než :min kB.',
        'numeric' => ':Attribute musí mať hodnotu menej než :min.',
        'string' => ':Attribute musí obsahovať menej než :min znakov.',
    ],
    'lte' => [
        'array' => ':Attribute musí obsahovať menej alebo maximálne :min položiek.',
        'file' => ':Attribute musí mať veľkosť menej alebo maximálne :min kB.',
        'numeric' => ':Attribute musí mať hodnotu menej alebo maximálne :min.',
        'string' => ':Attribute musí obsahovať menej alebo maximálne :min znakov.',
    ],
    'mac_address' => ':Attribute musí byť platná MAC adresa.',
    'max' => [
        'array' => ':Attribute musí obsahovať maximálne :max položiek.',
        'file' => ':Attribute musí mať veľkosť maximálne :max kB.',
        'numeric' => ':Attribute musí mať hodnotu :max maximálne.',
        'string' => ':Attribute musí obsahovať maximálne :max znakov.',
    ],
    'mimes' => ':Attribute musí byť súbor typu: :values.',
    'mimetypes' => ':Attribute musí byť súbor typu: :values.',
    'min' => [
        'array' => ':Attribute musí obsahovať minimálne :min položiek.',
        'file' => ':Attribute musí mať veľkosť minimálne :min kB.',
        'numeric' => ':Attribute musí mať hodnotu :min minimálne.',
        'string' => ':Attribute musí obsahovať minimálne :min znakov.',
    ],
    'multiple_of' => ':Attribute musí byť násobkom :value.',
    'not_in' => 'Vybraný atribút :attribute nie je platný.',
    'not_regex' => ':Attribute neplatný formát.',
    'numeric' => ':Attribute musí byť číslo.',
    'present' => ':Attribute pole musí byť zadané.',
    'prohibited' => ':Attribute pole nemôže byť vyplnené.',
    'prohibited_if' => ':Attribute pole nemôže byť vyplnené, ak je v poli :other hodnota :value.',
    'prohibited_unless' => ':Attribute pole neumožňuje byť zadaným ak pole :other obshuje hodnoty :values.',
    'prohibits' => ':Attribute pole neumožňuje poľu :other byť zadaným.',
    'regex' => ':Attribute formát nie je platný.',
    'required' => ':Attribute pole je povinné.',
    'required_array_keys' => ':Attribute pole musí obsahovať hodnoty: :values.',
    'required_if' => ':Attribute je povinné pole len ak pole :other má hodnotu :value.',
    'required_unless' => ':Attribute je povinné pole len ak pole :other má hodnoty :values.',
    'required_with' => ':Attribute je povinné pole ak hodnota :values je zadaná.',
    'required_with_all' => ':Attribute je povinné pole ak hodnoty :values sú zadaná.',
    'required_without' => ':Attribute je povinné pole ak hodnota :values nie je zadaná.',
    'required_without_all' => ':Attribute je povinné pole, ak žiadna z hodnôt :values nie je zadaná.',
    'same' => ':Attribute a :other musia byť zhodné.',
    'size' => [
        'array' => ':Attribute musí obsahovaťmust :size položiek.',
        'file' => ':Attribute musí mať veľkosť :size kB.',
        'numeric' => ':Attribute musí byť :size.',
        'string' => ':Attribute musí obsahovať :size znakov.',
    ],
    'starts_with' => ':Attribute musí začínať jedným z nasledovných: :values.',
    'string' => ':Attribute musí byť reťazec.',
    'timezone' => ':Attribute musí byť platná časová zóna.',
    'unique' => ':Attribute bol už použitý.',
    'uploaded' => ':Attribute nebolo možné nahrať.',
    'url' => 'The :Attribute musí byť platná URL adresa.',
    'uuid' => ':Attribute musí byť platné používateľské UUID.',

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
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];