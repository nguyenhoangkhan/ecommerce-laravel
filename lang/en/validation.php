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

    'accepted' => ':attribute phải được chấp nhận.',
'accepted_if' => ':attribute phải được chấp nhận khi :other là :value.',
'active_url' => ':attribute không phải là một URL hợp lệ.',
'after' => ':attribute phải là một ngày sau ngày :date.',
'after_or_equal' => ':attribute phải là một ngày sau hoặc bằng :date.',
'alpha' => ':attribute chỉ được chứa các chữ cái.',
'alpha_dash' => ':attribute chỉ được chứa chữ cái, số, dấu gạch ngang và gạch dưới.',
'alpha_num' => ':attribute chỉ được chứa chữ cái và số.',
'array' => ':attribute phải là một mảng.',
'before' => ':attribute phải là một ngày trước ngày :date.',
'before_or_equal' => ':attribute phải là một ngày trước hoặc bằng :date.',
'between' => [
'array' => ':attribute phải có từ :min đến :max mục.',
'file' => ':attribute phải có kích thước từ :min đến :max kilobytes.',
'numeric' => ':attribute phải nằm giữa :min và :max.',
'string' => ':attribute phải có từ :min đến :max ký tự.',
],
'boolean' => ':attribute phải là true hoặc false.',
'confirmed' => 'Xác nhận :attribute không khớp.',
'current_password' => 'Mật khẩu hiện tại không chính xác.',
'date' => ':attribute không phải là ngày hợp lệ.',
'date_equals' => ':attribute phải là một ngày bằng :date.',
'date_format' => ':attribute không khớp với định dạng :format.',
'declined' => ':attribute phải bị từ chối.',
'declined_if' => ':attribute phải bị từ chối khi :other là :value.',
'different' => ':attribute và :other phải khác nhau.',
'digits' => ':attribute phải có :digits chữ số.',
'digits_between' => ':attribute phải có từ :min đến :max chữ số.',
'dimensions' => ':attribute có kích thước hình ảnh không hợp lệ.',
'distinct' => ':attribute trường có giá trị trùng lặp.',
'email' => ':attribute phải là địa chỉ email hợp lệ.',
'ends_with' => ':attribute phải kết thúc bằng một trong các giá trị sau: :values.',
'enum' => ':attribute đã chọn không hợp lệ.',
'exists' => ':attribute đã chọn không hợp lệ.',
'file' => ':attribute phải là một tập tin.',
'filled' => 'Trường :attribute phải có một giá trị.',
'gt' => [
'array' => ':attribute phải có nhiều hơn :value mục.',
'file' => ':attribute phải lớn hơn :value kilobytes.',
'numeric' => ':attribute phải lớn hơn :value.',
'string' => ':attribute phải lớn hơn :value ký tự.',
],
'gte' => [
'array' => ':attribute phải có ít nhất :value mục.',
'file' => ':attribute phải lớn hơn hoặc bằng :value kilobytes.',
'numeric' => ':attribute phải lớn hơn hoặc bằng :value.',
'string' => ':attribute phải lớn hơn hoặc bằng :value ký tự.',
],
'image' => ':attribute phải là một hình ảnh.',
'in' => ':attribute đã chọn không hợp lệ.',
'in_array' => ':attribute trường không tồn tại trong :other.',
'integer' => ':attribute phải là một số nguyên.',
'ip' => ':attribute phải là một địa chỉ IP hợp lệ.',
'ipv4' => ':attribute phải là một địa chỉ IPv4 hợp lệ.',
'ipv6' => ':attribute phải là một địa chỉ IPv6 hợp lệ.',
'json' => ':attribute phải là một chuỗi JSON hợp lệ.',
'lt' => [
'array' => ':attribute phải có ít hơn :value mục.',
'file' => ':attribute phải nhỏ hơn :value kilobytes.',
'numeric' => ':attribute phải nhỏ hơn :value.',
'string' => ':attribute phải nhỏ hơn :value ký tự.',
],
'lte' => [
'array' => ':attribute không được có nhiều hơn :value mục.',
'file' => ':attribute phải nhỏ hơn hoặc bằng :value kilobytes.',
'numeric' => ':attribute phải nhỏ hơn hoặc bằng :value.',
'string' => ':attribute phải nhỏ hơn hoặc bằng :value ký tự.',
],
'mac_address' => ':attribute phải là một địa chỉ MAC hợp lệ.',
'max' => [
'array' => ':attribute không được có nhiều hơn :max mục.',
'file' => ':attribute không được lớn hơn :max kilobytes.',
'numeric' => ':attribute không được lớn hơn :max.',
'string' => ':attribute không được lớn hơn :max ký tự.',
],
'mimes' => ':attribute phải là một tệp loại: :values.',
'mimetypes' => ':attribute phải là một tệp loại: :values.',
'min' => [
'array' => ':attribute phải có ít nhất :min mục.',
'file' => ':attribute phải ít nhất :min kilobytes.',
'numeric' => ':attribute phải ít nhất :min.',
'string' => 'Phải tối thiểu :min kí tự',
],
'multiple_of' => ':attribute phải là một bội số của :value.',
'not_in' => ':attribute đã chọn không hợp lệ.',
'not_regex' => 'Định dạng :attribute không hợp lệ.',
'numeric' => ':attribute phải là một số.',
'password' => [
'letters' => ':attribute phải chứa ít nhất một chữ cái.',
'mixed' => ':attribute phải chứa ít nhất một chữ cái viết hoa và một chữ cái viết thường.',
'numbers' => ':attribute phải chứa ít nhất một số.',
'symbols' => ':attribute phải chứa ít nhất một ký tự đặc biệt.',
'uncompromised' => ':attribute đã cung cấp đã xuất hiện trong một rò rỉ dữ liệu. Vui lòng chọn một :attribute khác.',
],
'present' => 'Trường :attribute phải có mặt.',
'prohibited' => 'Trường :attribute bị cấm.',
'prohibited_if' => 'Trường :attribute bị cấm khi :other là :value.',
'prohibited_unless' => 'Trường :attribute bị cấm trừ khi :other có trong :values.',
'prohibits' => 'Trường :attribute ngăn cấm :other khỏi việc có mặt.',
'regex' => 'Định dạng :attribute không hợp lệ.',
'required' => 'Trường :attribute là bắt buộc.',
'required_array_keys' => 'Trường :attribute phải chứa các mục cho: :values.',
'required_if' => 'Trường :attribute là bắt buộc khi :other là :value.',
'required_unless' => 'Trường :attribute là bắt buộc trừ khi :other có trong :values.',
'required_with' => 'Trường :attribute là bắt buộc khi :values có mặt.',
'required_with_all' => 'Trường :attribute là bắt buộc khi :values có mặt.',
'required_without' => 'Trường :attribute là bắt buộc khi :values không có mặt.',
'required_without_all' => 'Trường :attribute là bắt buộc khi không có :values nào có mặt.',
'same' => ':attribute và :other phải khớp nhau.',
'size' => [
'array' => ':attribute phải chứa :size mục.',
'file' => ':attribute phải có kích thước :size kilobytes.',
'numeric' => ':attribute phải có kích thước :size.',
'string' => ':attribute phải có :size ký tự.',
],
'starts_with' => ':attribute phải bắt đầu bằng một trong những giá trị sau: :values.',
'doesnt_start_with' => ':attribute không được bắt đầu bằng một trong những giá trị sau: :values.',
'string' => ':attribute phải là một chuỗi.',
'timezone' => ':attribute phải là một múi giờ hợp lệ.',
'unique' => ':attribute đã được sử dụng.',
'uploaded' => ':attribute tải lên không thành công.',
'url' => ':attribute không hợp lệ.',
'uuid' => ':attribute phải là một UUID hợp lệ.',

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
