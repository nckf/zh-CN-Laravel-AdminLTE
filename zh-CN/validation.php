<?php

//
// By NCKF
//
//                   _ooOoo_
//                  o8888888o
//                  88" . "88
//                  (| -_- |)
//                  O\  =  /O
//               ____/`---'\____
//             .'  \\|     |//  `.
//            /  \\|||  :  |||//  \
//           /  _||||| -:- |||||-  \
//           |   | \\\  -  /// |   |
//           | \_|  ''\---/''  |   |
//            \  .-\__  `-`  ___/-. /
//          ___`. .'  /--.--\  `. . __
//       ."" '<  `.___\_<|>_/___.'  >'"".
//      | | :  `- \`.;`\ _ /`;.`/ - ` : | |
//      \  \ `-.   \_ __\ /__ _/   .-` /  /
// ======`-.____`-.___\_____/___.-`____.-'======
//                    `=---='
//         写字楼里写字间，写字间里程序员；
//         程序人员写程序，又拿程序换酒钱。
//         酒醒只在网上坐，酒醉还来网下眠；
//         酒醉酒醒日复日，网上网下年复年。
//         但愿老死电脑间，不愿鞠躬老板前；
//         奔驰宝马贵者趣，公交自行程序员。
//         别人笑我忒疯癫，我笑自己命太贱；
//         不见满街漂亮妹，哪个归得程序员？


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

    'accepted' => ':attribute 是必要的！',
    'active_url' => ':attribute 不是有效的URL！',
    'after' => ':attribute 必须是 :date 后的日期。',
    'after_or_equal' => ':attribute 必须是这个日期之后的，或等于 :date。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母、数字、破折号和下划线。',
    'alpha_num' => ':attribute 只能包含字母和数字。',
    'array' => ':attribute 必须是一个数组。',
    'before' => ':attribute 必须是日期之前 :date。',
    'before_or_equal' => ':attribute 属性必须是日期之前的日期或等于 :date。',
    'between' => [
        'numeric' => ':attribute 必须介于 :min 于 :max 之间。',
        'file' => ':attribute 必须在 :min 于 :max KB 之内。',
        'string' => ':attribute 必须在 :min 于 :max 字符之间。',
        'array' => ':attribute 之间必须有 :min 于 :max 项目。',
    ],
    'boolean' => ':attribute 字段必须为 True 或 False。',
    'confirmed' => ':attribute 确认不匹配。',
    'date' => ':attribute 不是有效日期。',
    'date_equals' => ':attribute 必须是一个日期等于 :date。',
    'date_format' => ':attribute 不符合格式 :format。',
    'different' => ':attribute 于 :other 必须不同。',
    'digits' => ':attribute 必须是 :digits 数字。',
    'digits_between' => ':attribute 必须介于 :min 于 :max 之间。',
    'dimensions' => ':attribute 图片尺寸无效。',
    'distinct' => ':attribute 字段有一个重复的值。',
    'email' => ':attribute 必须是一个有效的电子邮件地址。',
    'ends_with' => ':attribute 必须以下列之一作为结尾： :values。',
    'exists' => '选定的 :attribute 是无效的。',
    'file' => ':attribute 必须是文件。',
    'filled' => ':attribute 字段必须有一个值。',
    'gt' => [
        'numeric' => ':attribute 必须大于 :value。',
        'file' => ':attribute 必须大于 :value KB。',
        'string' => ':attribute 必须大于 :value 字符数。',
        'array' => ':attribute 必须有超过 :value 项。',
    ],
    'gte' => [
        'numeric' => ':attribute 必须大于或等于 :value。',
        'file' => ':attribute 必须大于或等于 :value KB。',
        'string' => ':attribute 必须大于或等于 :value 字符数。',
        'array' => ':attribute 必须有 :value 项或更多。',
    ],
    'image' => ':attribute 必须是图片。',
    'in' => '选择的 :attribute 无效。',
    'in_array' => ':attribute 字段不存在于 :other。',
    'integer' => ':attribute 必须是整数。',
    'ip' => ':attribute 必须是有效的 IP 地址。',
    'ipv4' => ':attribute 必须是有效的 IPv4 地址。',
    'ipv6' => ':attribute 必须是有效的 IPv6 地址。',
    'json' => ':attribute 必须是有效的 JSON 字符串。',
    'lt' => [
        'numeric' => ':attribute 必须小于 :value。',
        'file' => ':attribute 必须小于 :value KB。',
        'string' => ':attribute 必须小于 :value 字符数。',
        'array' => ':attribute 必须小于 :value 项。',
    ],
    'lte' => [
        'numeric' => ':attribute 必须小于或等于 :value。',
        'file' => ':attribute 必须小于或等于 :value KB。',
        'string' => ':attribute 必须小于或等于 :value 字符数。',
        'array' => ':attribute 不得超过 :value 项。',
    ],
    'max' => [
        'numeric' => ':attribute 不能大于 :max。',
        'file' => ':attribute 不能大于 :max KB。',
        'string' => ':attribute 不能大于 :max 字符数。',
        'array' => ':attribute 不能大于 :max 项。',
    ],
    'mimes' => ':attribute 必须是一个类型的文件： :values。',
    'mimetypes' => ':attribute 文件类型必须是：:values。',
    'min' => [
        'numeric' => ':attribute 不能小于 :min。',
        'file' => ':attribute 不能小于 :min KB。',
        'string' => ':attribute 不能小于 :min 字符数。',
        'array' => ':attribute 不能小于 :min 项。',
    ],
    'not_in' => '选择的 :attribute 是无效的。',
    'not_regex' => ':attribute 格式是无效的。',
    'numeric' => ':attribute 必须是数字。',
    'password' => 'password 是错误的。',
    'present' => ':attribute 字段必须存在。',
    'regex' => ':attribute 格式是无效的。',
    'required' => ':attribute 字段是必须的。',
    'required_if' => ':attribute 字段在 :other 是 :value 的时候是必须的。',
    'required_unless' => ':attribute 字段除非 :other 在 :values 中，否则是必须的。',
    'required_with' => ':attribute 字段在 :values 存在的时候是必须的。',
    'required_with_all' => ':attribute 字段在 :values 存在的时候是必须的。',
    'required_without' => ':attribute 字段在 :values 不存在的时候是必须的。',
    'required_without_all' => ':attribute 字段在 :values 没有的时候是必须的。',
    'same' => ':attribute 于 :other 必须一致。',
    'size' => [
        'numeric' => ':attribute 必须是 :size。',
        'file' => ':attribute 必须是 :size KB。',
        'string' => ':attribute 必须是 :size 字符数。',
        'array' => ':attribute 必须包含 :size 项。',
    ],
    'starts_with' => ':attribute 必须以以下项中之一开头 :values。',
    'string' => ':attribute 必须是字符串。',
    'timezone' => ':attribute 必须是有效区域。',
    'unique' => ':attribute 已经被取走。',
    'uploaded' => ':attribute 上传失败。',
    'url' => ':attribute 格式是无效的。',
    'uuid' => ':attribute 必须是有效的 UUID。',

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
