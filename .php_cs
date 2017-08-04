<?php
/**
  $finder = PhpCsFixer\Finder::create()                                // 引导器
  ->exclude('somedir')                                                 // 排除这个文件
  ->in(__DIR__);                                                       // 在当前目录下
 */
return PhpCsFixer\Config::create()->
setRules([
        '@PSR2' => true,
        'array_syntax' => [
            'syntax' => 'long'                                         // ('long','short') 数组语法是否：array => []
        ],
        'binary_operator_spaces' => [
            'align_double_arrow' => true,                              // (false,true,null) "=>" 符号 居中对齐
            'align_equals' => true                                     // (false,true,null) "="  符号 居中对齐
        ],
        'blank_line_after_opening_tag' => true,                        // (true,false) {要独立一行
        'blank_line_before_statement' => [                             // 在以下关键字前加一行
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
            'allow_single_line_closure' => false,                      // (false,true) 允许闭包函数单行
            'position_after_anonymous_constructs' => 'same',           // ('same','next')
            'position_after_control_structures' => 'same',             // ('same','next')
            'position_after_functions_and_oop_constructs' => 'next',   // ('next','same')
        ],
        'cast_spaces' => [
            'space' => 'single'                                        // ('single','none') 变量和修饰符之间应该有一个空格
        ],
        'class_definition' => [                                        // class、trait、interfaces 关键字和名称之间只能有一个空格；
            'multiLineExtendsEachSingleLine' => false,
            'singleItemSingleLine' => false,
            'singleLine' => false,
        ],
        'class_keyword_remove' => false,                               // (false,true) 移除::class关键字
        'combine_consecutive_unsets' =>true,                           // (false,true) 作用于内多个unset单一变量，统一unset多个变量
        'concat_space'=>[
            'spacing'=>'one'                                           // ('none','one') $a = 1 + 2; 1+2=>1 + 2 操作符左右加一个空格
        ],
        'declare_equal_normalize'=>[
            'space'=>'none'                                            // ('none','single')
        ],
//        'declare_strict_types'=> false,                              // (false,true) PHP_VERSOIN > 7 风险配置，强制要求严格类型
        'dir_constant'=>false,                                         // (false,true) dirname(__FILE__)表达与等效__DIR__常数
        'function_typehint_space'=>true,                               // (false,true) 函数的参数和类型之间添加空格
        'hash_to_slash_comment'=>true,                                 // (false,true) 单行注释应该用//代替#号
//        'is_null'=>[
//            'use_yoda_style'=>true                                   // (true,false) 用is_null()来代替null === param
//        ]
        'lowercase_cast'=>true,
        'lowercase_constants'=>true,                                   // (true,false,null) true,false,null 要小写
        'lowercase_keywords'=>true,                                    // (true,false) 关键字小写
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
        'no_spaces_after_function_name'=>true,                         // 函数定义或者调用函数的时候，不允许有空格
//        'no_trailing_comma_in_list_call'=>true,                      // Remove trailing commas in list function calls.
        'no_trailing_comma_in_singleline_array'=>true,                 // array(1,2,3,)=>array(1,2,3)单行数组结尾不应该有逗号。
        'no_trailing_whitespace'=>true,                                // 在非空行的尾端删除多余的空格
/*       'no_unneeded_control_parentheses'=>[                          // 在以下控制符调用的时候，删除不必要的空格
            'statements'=>[
                'break',
                'clone',
                'continue',
                'echo_print',
                'return',
                'switch_case',
                'yield'
            ]
         ],*/
//      'no_unused_imports'=>true,                                  // 未使用的语句必须删除
//      'no_useless_else'=>true,                                    // 不应该存在空的else代码块
//      'no_useless_return'=>true,                                  // 不应该return 空
        'no_whitespace_before_comma_in_array'=>true,                // array(1   ,2)=> array(1, 2)数组声明的时候，逗号之前都不应该有空格
        'no_whitespace_in_blank_line'=>true,                        // 删除空白行尾随的空白
//      'normalize_index_brace'=>true,                              // 数组索引应该用方块号来写
        'object_operator_without_whitespace'=>true,                 // $obj -> func() =>$obj->func();对象操作符之间不允许留空
        'phpdoc_add_missing_param_annotation'=>[
            'only_untyped'=>true                                    // 注释确实的@param参数会自动补全
        ],
        'phpdoc_align'=>                                            // 注释居中
        [
            'tags'=>[
                'param',
                'return',
                'throws',
                'type',
                'var'
            ]
        ],
        'phpdoc_indent'=>true,                                      // 注释要和主体有一样的缩进
//      'phpdoc_annotation_without_dot'=>true,                      // 注释不能是一个完整的句子
//      'phpdoc_inline_tag'=>true,
//      'phpdoc_no_access'=>true,                                   // 注释没有@access标签
//      'phpdoc_no_empty_return'=>false,                            // return null的时候，return标签被删除
//      'phpdoc_no_package'=>true,                                  // 没有@package标签
        'phpdoc_return_self_reference'=>true,                       // 返回自身依赖 ['this' => '$this', '@this' => '$this', '$self' => 'self', '@self' => 'self', '$static' => 'static', '@static' => 'static']
        'phpdoc_separation'=>true,                                  // 不同类型的注释将会空一行@param 和@return会隔空一行
        'phpdoc_single_line_var_spacing'=>true,                     // @var    String=>@var String 类属性注释@var和和面的字符会隔一个空格
        'phpdoc_summary'=>true,                                     // 注释说明会自动补上句号结尾
//      'phpdoc_to_comment'=>false,                                 // Docblocks should only be used on structural elements.
        'phpdoc_trim'=>true,                                        // 去掉注释中前面和后面多余的行数
//      'phpdoc_types'=>true,                                       // The correct case must be used for standard PHP types in phpdoc.
         'phpdoc_var_without_name'=>true,                           // @var 标签不应该包含变量名
//      'pre_increment'=>true,                                      // Pre incrementation/decrementation should be used if possible.
//      'protected_to_private'=>true,                               // 在可能的情况下，protected 转为 private
//      'return_type_declaration'=>true,
        'single_blank_line_at_eof'=>true,                            // 在没有文件结尾的情况下，文件已一个空白行结尾
        'single_blank_line_before_namespace'=>true,                  // 命名空间前独立一行
        'single_quote'=>true,                                        // 在没有变量的情况下，把双引号转为单引号
        'space_after_semicolon'=>true,                               // 修复分号后的空白
        'standardize_not_equals'=>false,                             // 将 "<>"号转为"!="号
        'ternary_operator_spaces'=>true,                             // 在三元操作符之间加一个空格
//      'ternary_to_null_coalescing'=>true,                          // 在合适的条件下php7的条件下使用合并操作符
        'trailing_comma_in_multiline_array'=>true,                   // 在多行数组元素后面加上一个逗号
        'trim_array_spaces'=>true,                                   // array( 3 )=>array(3)
        'whitespace_after_comma_in_array'=>true                      // array(1,2)=>array(1, 2)
    ]
);
