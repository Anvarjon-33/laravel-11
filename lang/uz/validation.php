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

    'accepted' => '(uz) The :attribute field must be accepted.',
    'accepted_if' => '(uz) The :attribute field must be accepted when :other is :value.',
    'active_url' => '(uz) The :attribute field must be a valid URL.',
    'after' => '(uz) The :attribute field must be a date after :date.',
    'after_or_equal' => '(uz) The :attribute field must be a date after or equal to :date.',
    'alpha' => '(uz) The :attribute field must only contain letters.',
    'alpha_dash' => '(uz) The :attribute field must only contain letters, numbers, dashes, and underscores.',
    'alpha_num' => '(uz) The :attribute field must only contain letters and numbers.',
    'array' => '(uz) The :attribute field must be an array.',
    'ascii' => '(uz) The :attribute field must only contain single-byte alphanumeric characters and symbols.',
    'before' => '(uz) The :attribute field must be a date before :date.',
    'before_or_equal' => '(uz) The :attribute field must be a date before or equal to :date.',
    'between' => [
        'array' => '(uz) The :attribute field must have between :min and :max items.',
        'file' => '(uz) The :attribute field must be between :min and :max kilobytes.',
        'numeric' => '(uz) The :attribute field must be between :min and :max.',
        'string' => '(uz) The :attribute field must be between :min and :max characters.',
    ],
    'boolean' => '(uz) The :attribute field must be true or false.',
    'can' => '(uz) The :attribute field contains an unauthorized value.',
    'confirmed' => '(uz) The :attribute field confirmation does not match.',
    'contains' => '(uz) The :attribute field is missing a required value.',
    'current_password' => '(uz) The password is incorrect.',
    'date' => '(uz) The :attribute field must be a valid date.',
    'date_equals' => '(uz) The :attribute field must be a date equal to :date.',
    'date_format' => '(uz) The :attribute field must match the format :format.',
    'decimal' => '(uz) The :attribute field must have :decimal decimal places.',
    'declined' => '(uz) The :attribute field must be declined.',
    'declined_if' => '(uz) The :attribute field must be declined when :other is :value.',
    'different' => '(uz) The :attribute field and :other must be different.',
    'digits' => '(uz) The :attribute field must be :digits digits.',
    'digits_between' => '(uz) The :attribute field must be between :min and :max digits.',
    'dimensions' => '(uz) The :attribute field has invalid image dimensions.',
    'distinct' => '(uz) The :attribute field has a duplicate value.',
    'doesnt_end_with' => '(uz) The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => '(uz) The :attribute field must not start with one of the following: :values.',
    'email' => '(uz) The :attribute field must be a valid email address.',
    'ends_with' => '(uz) The :attribute field must end with one of the following: :values.',
    'enum' => '(uz) The selected :attribute is invalid.',
    'exists' => '(uz) The selected :attribute is invalid.',
    'extensions' => '(uz) The :attribute field must have one of the following extensions: :values.',
    'file' => '(uz) The :attribute field must be a file.',
    'filled' => '(uz) The :attribute field must have a value.',
    'gt' => [
        'array' => '(uz) The :attribute field must have more than :value items.',
        'file' => '(uz) The :attribute field must be greater than :value kilobytes.',
        'numeric' => '(uz) The :attribute field must be greater than :value.',
        'string' => '(uz) The :attribute field must be greater than :value characters.',
    ],
    'gte' => [
        'array' => '(uz) The :attribute field must have :value items or more.',
        'file' => '(uz) The :attribute field must be greater than or equal to :value kilobytes.',
        'numeric' => '(uz) The :attribute field must be greater than or equal to :value.',
        'string' => '(uz) The :attribute field must be greater than or equal to :value characters.',
    ],
    'hex_color' => '(uz) The :attribute field must be a valid hexadecimal color.',
    'image' => '(uz) The :attribute field must be an image.',
    'in' => '(uz) The selected :attribute is invalid.',
    'in_array' => '(uz) The :attribute field must exist in :other.',
    'integer' => '(uz) The :attribute field must be an integer.',
    'ip' => '(uz) The :attribute field must be a valid IP address.',
    'ipv4' => '(uz) The :attribute field must be a valid IPv4 address.',
    'ipv6' => '(uz) The :attribute field must be a valid IPv6 address.',
    'json' => '(uz) The :attribute field must be a valid JSON string.',
    'list' => '(uz) The :attribute field must be a list.',
    'lowercase' => '(uz) The :attribute field must be lowercase.',
    'lt' => [
        'array' => '(uz) The :attribute field must have less than :value items.',
        'file' => '(uz) The :attribute field must be less than :value kilobytes.',
        'numeric' => '(uz) The :attribute field must be less than :value.',
        'string' => '(uz) The :attribute field must be less than :value characters.',
    ],
    'lte' => [
        'array' => '(uz) The :attribute field must not have more than :value items.',
        'file' => '(uz) The :attribute field must be less than or equal to :value kilobytes.',
        'numeric' => '(uz) The :attribute field must be less than or equal to :value.',
        'string' => '(uz) The :attribute field must be less than or equal to :value characters.',
    ],
    'mac_address' => '(uz) The :attribute field must be a valid MAC address.',
    'max' => [
        'array' => '(uz) The :attribute field must not have more than :max items.',
        'file' => '(uz) The :attribute field must not be greater than :max kilobytes.',
        'numeric' => '(uz) The :attribute field must not be greater than :max.',
        'string' => '(uz) The :attribute field must not be greater than :max characters.',
    ],
    'max_digits' => '(uz) The :attribute field must not have more than :max digits.',
    'mimes' => '(uz) The :attribute field must be a file of type: :values.',
    'mimetypes' => '(uz) The :attribute field must be a file of type: :values.',
    'min' => [
        'array' => '(uz) The :attribute field must have at least :min items.',
        'file' => '(uz) The :attribute field must be at least :min kilobytes.',
        'numeric' => '(uz) The :attribute field must be at least :min.',
        'string' => '(uz) The :attribute field must be at least :min characters.',
    ],
    'min_digits' => '(uz) The :attribute field must have at least :min digits.',
    'missing' => '(uz) The :attribute field must be missing.',
    'missing_if' => '(uz) The :attribute field must be missing when :other is :value.',
    'missing_unless' => '(uz) The :attribute field must be missing unless :other is :value.',
    'missing_with' => '(uz) The :attribute field must be missing when :values is present.',
    'missing_with_all' => '(uz) The :attribute field must be missing when :values are present.',
    'multiple_of' => '(uz) The :attribute field must be a multiple of :value.',
    'not_in' => '(uz) The selected :attribute is invalid.',
    'not_regex' => '(uz) The :attribute field format is invalid.',
    'numeric' => '(uz) The :attribute field must be a number.',
    'password' => [
        'letters' => '(uz) The :attribute field must contain at least one letter.',
        'mixed' => '(uz) The :attribute field must contain at least one uppercase and one lowercase letter.',
        'numbers' => '(uz) The :attribute field must contain at least one number.',
        'symbols' => '(uz) The :attribute field must contain at least one symbol.',
        'uncompromised' => '(uz) The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => '(uz) The :attribute field must be present.',
    'present_if' => '(uz) The :attribute field must be present when :other is :value.',
    'present_unless' => '(uz) The :attribute field must be present unless :other is :value.',
    'present_with' => '(uz) The :attribute field must be present when :values is present.',
    'present_with_all' => '(uz) The :attribute field must be present when :values are present.',
    'prohibited' => '(uz) The :attribute field is prohibited.',
    'prohibited_if' => '(uz) The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => '(uz) The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => '(uz) The :attribute field prohibits :other from being present.',
    'regex' => '(uz) The :attribute field format is invalid.',
    'required' => '(uz) The :attribute field is required.',
    'required_array_keys' => '(uz) The :attribute field must contain entries for: :values.',
    'required_if' => '(uz) The :attribute field is required when :other is :value.',
    'required_if_accepted' => '(uz) The :attribute field is required when :other is accepted.',
    'required_if_declined' => '(uz) The :attribute field is required when :other is declined.',
    'required_unless' => '(uz) The :attribute field is required unless :other is in :values.',
    'required_with' => '(uz) The :attribute field is required when :values is present.',
    'required_with_all' => '(uz) The :attribute field is required when :values are present.',
    'required_without' => '(uz) The :attribute field is required when :values is not present.',
    'required_without_all' => '(uz) The :attribute field is required when none of :values are present.',
    'same' => '(uz) The :attribute field must match :other.',
    'size' => [
        'array' => '(uz) The :attribute field must contain :size items.',
        'file' => '(uz) The :attribute field must be :size kilobytes.',
        'numeric' => '(uz) The :attribute field must be :size.',
        'string' => '(uz) The :attribute field must be :size characters.',
    ],
    'starts_with' => '(uz) The :attribute field must start with one of the following: :values.',
    'string' => '(uz) The :attribute field must be a string.',
    'timezone' => '(uz) The :attribute field must be a valid timezone.',
    'unique' => '(uz) The :attribute has already been taken.',
    'uploaded' => '(uz) The :attribute failed to upload.',
    'uppercase' => '(uz) The :attribute field must be uppercase.',
    'url' => '(uz) The :attribute field must be a valid URL.',
    'ulid' => '(uz) The :attribute field must be a valid ULID.',
    'uuid' => '(uz) The :attribute field must be a valid UUID.',

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
            'rule-name' => '(uz) custom-message',
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
