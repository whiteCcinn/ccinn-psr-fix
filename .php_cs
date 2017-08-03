<?php
//PhpCsFixer\Config::create()
return PhpCsFixer\Config::create()->
setRules([
        '@PSR2' => true,
        'array_syntax' => [
            'syntax' => 'long'                              // ('long','short') 数组语法是否：array => []
        ],
        'binary_operator_spaces' => [
            'align_double_arrow' => true,                   // (false,true,null) "=>" 符号 居中对齐
            'align_equals' => true                          // (false,true,null) "="  符号 居中对齐
        ],
        'blank_line_after_opening_tag' => true,             // (true,false) {要独立一行
        'blank_line_before_statement' => [                  // 在以下关键字前加一行
            'statements' => [
                'break',
                'continue',
                'declare',
                'return',
                'throw',
                'try'
            ]
        ],
        'braces' => [
            'allow_single_line_closure' => false,                    // (false,true) 允许闭包函数单行
            'position_after_anonymous_constructs' => 'same',         // ('same','next')
            'position_after_control_structures' => 'same',           // ('same','next')
            'position_after_functions_and_oop_constructs' => 'next', // ('next','same')
        ],
        'cast_spaces' => [
            'space' => 'single'                                  // ('single','none') 变量和修饰符之间应该有一个空格
        ],
        'class_definition' => [                                  // class、trait、interfaces 关键字和名称之间只能有一个空格；
            'multiLineExtendsEachSingleLine' => false,
            'singleItemSingleLine' => false,
            'singleLine' => false,
        ],
        'class_keyword_remove' => false,                          // (false,true) 移除::class关键字
        'combine_consecutive_unsets' =>true,                       // (false,true) 作用于内多个unset单一变量，统一unset多个变量
        'concat_space'=>[
            'spacing'=>'one'                                       // ('none','one') $a = 1 + 2; 1+2=>1 + 2 操作符左右加一个空格
        ],
        'declare_equal_normalize'=>[
            'space'=>'none'                                        // ('none','single')
        ],
//        'declare_strict_types'=> false,                             // (false,true) PHP_VERSOIN > 7 风险配置，强制要求严格类型
        'dir_constant'=>false,                                      // (false,true) dirname(__FILE__)表达与等效__DIR__常数
        'function_typehint_space'=>true,                             // (false,true) 函数的参数和类型之间添加空格
        'hash_to_slash_comment'=>true,                               // (false,true) 单行注释应该用//代替#号
//        'is_null'=>[
//            'use_yoda_style'=>true                                  // (true,false) 用is_null()来代替null === param
//        ]
        'lowercase_cast'=>true,
        'lowercase_constants'=>true,                                 // (true,false,null) true,false,null 要小写
        'lowercase_keywords'=>true,                                  // (true,false) 关键字小写
        'magic_constant_casing'=>true,
        'method_argument_space'=>[
            'ensure_fully_multiline'=>false,
            'keep_multiple_spaces_after_comma'=>false
        ],
        'method_separation'=>true,                                     // 方法之间需要一个空行分割，多行也会变一行
        'new_with_braces'=>true,                                       // new A; => new A();
        'no_multiline_whitespace_before_semicolons'=>true,             // 分号之前不允许多行分割
        'no_multiline_whitespace_around_double_arrow'=>true,           // =>号不允浩被多行分割
        'no_null_property_initialization'=>false,                      // 属性不允许用null初始化
        'no_short_bool_cast'=>false,                                   // !! => (bool)
        'no_singleline_whitespace_before_semicolons'=>true,            // 不允许在分号前存在单行空格
        'no_spaces_after_function_name'=>true                          // 函数定义或者调用函数的时候，不允许有空格
    ]
);
