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

    'accepted' => ':Attribute debe ser aceptado.',
    'active_url' => ':Attribute no es una URL valida.',
    'after' => ':Attribute debe ser una fecha posterior :date.',
    'after_or_equal' => ':Attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => ':Attribute debe contener solamente letras.',
    'alpha_dash' => ':Attribute debe contener solamente letras, numeros, guiones medios y guiones bajos.',
    'alpha_num' => ':Attribute puede contener solamente letras y numeros.',
    'array' => ':Attribute debe ser un conjunto.',
    'before' => ':Attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => ':Attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => ':Attribute debe hallarse entre :min y :max.',
        'file' => 'El peso de :attribute debe ser entre :min y :max kilobytes.',
        'string' => ':Attribute debe contener entre :min y :max caracteres.',
        'array' => ':Attribute debe contener entre :min y :max elementos.',
    ],
    'boolean' => ':Attribute debe ser verdadero o falso.',
    'confirmed' => 'La confirmacion de :attribute no corresponde.',
    'date' => ':Attribute no es una fecha valida.',
    'date_equals' => ':Attribute debe ser una fecha igual a :date.',
    'date_format' => 'El formato de :attribute no corresponde al formato requerido (:format).',
    'different' => ':Attribute y :other deben ser distintos.',
    'digits' => ':Attribute debe tener :digits digitos.',
    'digits_between' => ':Attribute debe contener entre :min y :max digitos.',
    'dimensions' => 'Las dimensiones de :attribute son invalidas.',
    'distinct' => 'El valor de :attribute se encuentra duplicado.',
    'email' => ':Attribute debe ser un correo electronico valido.',
    'ends_with' => ':Attribute debe terminar con uno de los siguientes valores: :values',
    'exists' => 'El :attribute seleccionado es invalido.',
    'file' => ':Attribute debe ser un archivo.',
    'filled' => ':Attribute debe tener un valor asignado.',
    'gt' => [
        'numeric' => 'El valor de :attribute debe ser mayor a :value.',
        'file' => 'El tamaño de :attribute debe ser mayor a :value kilobytes.',
        'string' => ':Attribute debe tener mas de :value caracteres.',
        'array' => ':Attribute debe poseer mas de :value elementos.',
    ],
    'gte' => [
        'numeric' => 'El valor de :attribute debe ser mayor o igual a :value.',
        'file' => 'El tamaño de :attribute debe ser mayor o igual a :value kilobytes.',
        'string' => ':Attribute debe tener al menos :value caracteres.',
        'array' => ':Attribute debe poseer al menos :value elementos.',
    ],
    'image' => ':Attribute debe ser una imagen.',
    'in' => 'El valor seleccionado de :attribute es invalido.',
    'in_array' => ':Attribute no existe en :other.',
    'integer' => ':Attribute debe ser un numero entero.',
    'ip' => ':Attribute debe ser una direccion IP valida.',
    'ipv4' => ':Attribute debe ser una direccion IPv4 valida.',
    'ipv6' => ':Attribute debe ser una direccion IPv6 valida.',
    'json' => ':Attribute debe ser una cadena de texto JSON valida.',
    'lt' => [
        'numeric' => 'El valor de :attribute debe ser menor a :value.',
        'file' => 'El tamaño de :attribute debe ser menor a :value kilobytes.',
        'string' => ':Attribute debe tener menos de :value caracteres.',
        'array' => ':Attribute debe poseer menos de :value elementos.',
    ],
    'lte' => [
        'numeric' => 'El valor de :attribute debe ser menor o igual a :value.',
        'file' => 'El tamaño de :attribute debe ser menor o igual a :value kilobytes.',
        'string' => ':Attribute debe tener como maximo :value caracteres.',
        'array' => ':Attribute debe poseer como maximo :value elementos.',
    ],
    'max' => [
        'numeric' => 'El valor de :attribute debe ser menor a :max.',
        'file' => 'El tamaño de :attribute debe ser menor a :max kilobytes.',
        'string' => ':Attribute debe tener menos de :max caracteres.',
        'array' => ':Attribute debe posser menos de :max elementos.',
    ],
    'mimes' => ':Attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => ':Attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El valor de :attribute debe ser mayor a :min.',
        'file' => 'El tamaño de :attribute debe ser mayor a :min kilobytes.',
        'string' => ':Attribute debe tener mas de :min caracteres.',
        'array' => ':Attribute debe posser mas de :min elementos.',
    ],
    'not_in' => 'El valor seleccionado de :attribute es invalido.',
    'not_regex' => 'El formato de :attribute es invalido.',
    'numeric' => ':Attribute debe ser un numero.',
    'present' => 'El campo :attribute debe encontrarse presente.',
    'regex' => 'El formato de :attribute es invalido.',
    'required' => 'El campo :attribute es requerido.',
    'required_if' => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless' => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with' => 'El campo :attribute es requerido cuando :values se encuentra presente.',
    'required_with_all' => 'El campo :attribute es requerido cuando :values se hallan presentes.',
    'required_without' => 'El campo :attribute es requerido cuando :values no se encuentra presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando ninguno de :values se hallan presentes.',
    'same' => 'Los valores de :attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El tamaño de :attribute debe ser de :size.',
        'file' => 'El peso de :attribute debe ser de :size kilobytes.',
        'string' => 'El largo de :attribute debe ser de :size caracteres.',
        'array' => ':Attribute debe contener exactamente :size elementos.',
    ],
    'starts_with' => ':Attribute debe comenzar con uno de los siguientes: :values',
    'string' => ':Attribute debe ser una cadena de texto.',
    'timezone' => ':attribute debe ser una zona horaria valida.',
    'unique' => 'El valor de :Attribute deseado ya no se encuentra disponible.',
    'uploaded' => 'El archivo en :attribute no pudo ser subido.',
    'url' => 'El formato de :attribute es invalido.',
    'uuid' => ':Attribute debe ser un UUID valido.',

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
