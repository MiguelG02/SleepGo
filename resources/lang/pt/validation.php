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

    'accepted' => 'O :attribute tem de ser aceite.',
    'active_url' => 'O :attribute não é um URL válido.',
    'after' => 'O :attribute tem de ser uma data após :date.',
    'after_or_equal' => 'O :attribute tem de ser uma data após ou igual a :date.',
    'alpha' => 'O :attribute só pode conter letras.',
    'alpha_dash' => 'O :attribute só pode conter letras, números, traços and underscores.',
    'alpha_num' => 'O :attribute só pode conter letras e números.',
    'array' => 'O :attribute tem de ser uma array.',
    'before' => 'O :attribute tem de ser uma data após :date.',
    'before_or_equal' => 'O :attribute tem de ser uma data após ou igual a :date.',
    'between' => [
        'numeric' => 'O :attribute tem de ser entre :min e :max.',
        'file' => 'O :attribute tem de ser entre :min e :max kilobytes.',
        'string' => 'O :attribute tem de ser entre :min e :max caracteres.',
        'array' => 'O :attribute tem de ser entre :min e :max itens.',
    ],
    'boolean' => 'O :attribute field must be true or false.',
    'confirmed' => 'O :attribute confirmation does not match.',
    'date' => 'O :attribute não é uma data válida.',
    'date_equals' => 'O :attribute deve ser uma data igual a :date.',
    'date_format' => 'O :attribute não tem o formato :format.',
    'different' => 'O :attribute e :other têm de ser diferentes.',
    'digits' => 'O :attribute tem de ter :digits digitos.',
    'digits_between' => 'O :attribute tem de ser entre :min e :max digitos.',
    'dimensions' => 'O :attribute tem dimensões de imagens inválidas.',
    'distinct' => 'O :attribute tem uma multiplicação do ficheiro.',
    'email' => 'O :attribute tem de ser um email válido.',
    'ends_with' => 'O :attribute tem de acabar com: :values',
    'exists' => 'O escolhido :attribute é inválido.',
    'file' => 'O :attribute tem de ser um ficheiro.',
    'filled' => 'O :attribute tem de ter um valor.',
    'gt' => [
        'numeric' => 'O :attribute tem que ser maior que :value.',
        'file' => 'O :attribute tem que ser maior que :value kilobytes.',
        'string' => 'O :attribute tem que ser maior que :value caracteres.',
        'array' => 'O :attribute tem de ter maior que :value itens.',
    ],
    'gte' => [
        'numeric' => 'O :attribute tem que ser maior que ou igual :value.',
        'file' => 'O :attribute tem que ser maior que ou igual :value kilobytes.',
        'string' => 'O :attribute tem que ser maior que ou igual :value caracteres.',
        'array' => 'O :attribute tem de ter :value itens ou mais.',
    ],
    'image' => 'O :attribute tem de ter uma imagem.',
    'in' => 'O escolhido :attribute é inválido.',
    'in_array' => 'O :attribute não existe em :other.',
    'integer' => 'O :attribute must be an integer.',
    'ip' => 'O :attribute must be a valid IP address.',
    'ipv4' => 'O :attribute must be a valid IPv4 address.',
    'ipv6' => 'O :attribute must be a valid IPv6 address.',
    'json' => 'O :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'O :attribute deve ser menor que :value.',
        'file' => 'O :attribute deve ser menor que :value kilobytes.',
        'string' => 'O :attribute deve ser menor que :value characters.',
        'array' => 'O :attribute tem de ter menor tamanho que :value items.',
    ],
    'lte' => [
        'numeric' => 'O :attribute must be less than or equal :value.',
        'file' => 'O :attribute must be less than or equal :value kilobytes.',
        'string' => 'O :attribute must be less than or equal :value characters.',
        'array' => 'O :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'O :attribute may not be greater than :max.',
        'file' => 'O :attribute may not be greater than :max kilobytes.',
        'string' => 'O :attribute may not be greater than :max characters.',
        'array' => 'O :attribute may not have more than :max items.',
    ],
    'mimes' => 'O :attribute must be a file of type: :values.',
    'mimetypes' => 'O :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'O :attribute must be at least :min.',
        'file' => 'O :attribute must be at least :min kilobytes.',
        'string' => 'O :attribute must be at least :min characters.',
        'array' => 'O :attribute must have at least :min items.',
    ],
    'not_in' => 'O selected :attribute is invalid.',
    'not_regex' => 'O :attribute format is invalid.',
    'numeric' => 'O :attribute tem de ser número.',
    'password' => 'O password está incorreta.',
    'present' => 'O :attribute field must be present.',
    'regex' => 'O :attribute formato inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O :attribute field is required when :other is :value.',
    'required_unless' => 'O :attribute field is required unless :other is in :values.',
    'required_with' => 'O :attribute field is required when :values is present.',
    'required_with_all' => 'O :attribute field is required when :values are present.',
    'required_without' => 'O :attribute field is required when :values is not present.',
    'required_without_all' => 'O :attribute field is required when none of :values are present.',
    'same' => 'O :attribute and :other must match.',
    'size' => [
        'numeric' => 'O :attribute must be :size.',
        'file' => 'O :attribute must be :size kilobytes.',
        'string' => 'O :attribute must be :size characters.',
        'array' => 'O :attribute must contain :size items.',
    ],
    'starts_with' => 'O :attribute must start with one of o following: :values',
    'string' => 'O :attribute must be a string.',
    'timezone' => 'O :attribute must be a valid zone.',
    'unique' => 'O :attribute que escolheu já existe.',
    'uploaded' => 'O :attribute failed to upload.',
    'url' => 'O :attribute format is invalid.',
    'uuid' => 'O :attribute must be a valid UUID.',

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

