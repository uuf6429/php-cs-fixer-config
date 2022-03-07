<?php

declare(strict_types=1);

/**
 * Copyright (c) 2019-2022 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/php-cs-fixer-config
 */

namespace Ergebnis\PhpCsFixer\Config\RuleSet;

final class Php81 extends AbstractRuleSet implements ExplicitRuleSet
{
    protected string $name = 'ergebnis (PHP 8.1)';
    protected array $rules = [
        'align_multiline_comment' => [
            'comment_type' => 'all_multiline',
        ],
        'array_indentation' => true,
        'array_push' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'assign_null_coalescing_to_coalesce_equal' => true,
        'backtick_to_shell_exec' => true,
        'binary_operator_spaces' => [
            'default' => 'single_space',
            'operators' => [],
        ],
        'blank_line_after_namespace' => true,
        'blank_line_after_opening_tag' => true,
        'blank_line_before_statement' => [
            'statements' => [
                'break',
                'continue',
                'declare',
                'default',
                'do',
                'exit',
                'for',
                'foreach',
                'goto',
                'if',
                'include',
                'include_once',
                'require',
                'require_once',
                'return',
                'switch',
                'throw',
                'try',
                'while',
                'yield',
            ],
        ],
        'braces' => [
            'allow_single_line_anonymous_class_with_empty_body' => true,
            'allow_single_line_closure' => false,
            'position_after_anonymous_constructs' => 'same',
            'position_after_control_structures' => 'same',
            'position_after_functions_and_oop_constructs' => 'next',
        ],
        'cast_spaces' => [
            'space' => 'single',
        ],
        'class_attributes_separation' => [
            'elements' => [
                'const' => 'only_if_meta',
                'method' => 'one',
                'property' => 'only_if_meta',
                'trait_import' => 'none',
            ],
        ],
        'class_definition' => [
            'multi_line_extends_each_single_line' => false,
            'single_item_single_line' => false,
            'single_line' => false,
            'space_before_parenthesis' => false,
        ],
        'class_reference_name_casing' => true,
        'clean_namespace' => true,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'combine_nested_dirname' => true,
        'comment_to_phpdoc' => [
            'ignored_tags' => [],
        ],
        'compact_nullable_typehint' => true,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'constant_case' => [
            'case' => 'lower',
        ],
        'control_structure_continuation_position' => [
            'position' => 'same_line',
        ],
        'date_time_immutable' => true,
        'declare_equal_normalize' => [
            'space' => 'none',
        ],
        'declare_parentheses' => true,
        'declare_strict_types' => true,
        'dir_constant' => true,
        'doctrine_annotation_array_assignment' => [
            'ignored_tags' => self::DOCTRINE_IGNORED_TAGS,
            'operator' => ':',
        ],
        'doctrine_annotation_braces' => [
            'ignored_tags' => self::DOCTRINE_IGNORED_TAGS,
            'syntax' => 'without_braces',
        ],
        'doctrine_annotation_indentation' => [
            'ignored_tags' => self::DOCTRINE_IGNORED_TAGS,
            'indent_mixed_lines' => false,
        ],
        'doctrine_annotation_spaces' => [
            'after_argument_assignments' => false,
            'after_array_assignments_colon' => true,
            'after_array_assignments_equals' => false,
            'around_commas' => true,
            'around_parentheses' => true,
            'before_argument_assignments' => false,
            'before_array_assignments_colon' => false,
            'before_array_assignments_equals' => false,
            'ignored_tags' => self::DOCTRINE_IGNORED_TAGS,
        ],
        'echo_tag_syntax' => [
            'format' => 'long',
            'long_function' => 'echo',
            'shorten_simple_statements_only' => true,
        ],
        'elseif' => true,
        'empty_loop_body' => [
            'style' => 'braces',
        ],
        'empty_loop_condition' => [
            'style' => 'while',
        ],
        'encoding' => true,
        'ereg_to_preg' => true,
        'error_suppression' => [
            'mute_deprecation_error' => true,
            'noise_remaining_usages' => true,
            'noise_remaining_usages_exclude' => [],
        ],
        'escape_implicit_backslashes' => [
            'double_quoted' => true,
            'heredoc_syntax' => true,
            'single_quoted' => false,
        ],
        'explicit_indirect_variable' => true,
        'explicit_string_variable' => true,
        'final_class' => true,
        'final_internal_class' => [
            'annotation_exclude' => [
                '@Entity',
                '@final',
                '@Mapping\\Entity',
                '@ORM\\Entity',
                '@ORM\\Mapping\\Entity',
            ],
            'annotation_include' => [
                '@internal',
            ],
            'consider_absent_docblock_as_internal_class' => false,
        ],
        'final_public_method_for_abstract_class' => true,
        'fopen_flag_order' => true,
        'fopen_flags' => [
            'b_mode' => true,
        ],
        'full_opening_tag' => true,
        'fully_qualified_strict_types' => true,
        'function_declaration' => [
            'closure_function_spacing' => 'one',
        ],
        'function_to_constant' => [
            'functions' => [
                'get_called_class',
                'get_class',
                'php_sapi_name',
                'phpversion',
                'pi',
            ],
        ],
        'function_typehint_space' => true,
        'general_phpdoc_annotation_remove' => false,
        'general_phpdoc_tag_rename' => [
            'case_sensitive' => false,
            'fix_annotation' => true,
            'fix_inline' => true,
            'replacements' => [
                'inheritdoc' => 'inheritdoc',
                'inheritdocs' => 'inheritdoc',
            ],
        ],
        'get_class_to_class_keyword' => true,
        'global_namespace_import' => false,
        'group_import' => false,
        'header_comment' => false,
        'heredoc_indentation' => false,
        'heredoc_to_nowdoc' => true,
        'implode_call' => true,
        'include' => true,
        'increment_style' => [
            'style' => 'pre',
        ],
        'indentation_type' => true,
        'integer_literal_case' => true,
        'is_null' => true,
        'lambda_not_used_import' => true,
        'line_ending' => true,
        'linebreak_after_opening_tag' => true,
        'list_syntax' => [
            'syntax' => 'short',
        ],
        'logical_operators' => true,
        'lowercase_cast' => true,
        'lowercase_keywords' => true,
        'lowercase_static_reference' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'mb_str_functions' => true,
        'method_argument_space' => [
            'after_heredoc' => false,
            'keep_multiple_spaces_after_comma' => false,
            'on_multiline' => 'ensure_fully_multiline',
        ],
        'method_chaining_indentation' => true,
        'modernize_strpos' => true,
        'modernize_types_casting' => true,
        'multiline_comment_opening_closing' => true,
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'no_multi_line',
        ],
        'native_constant_invocation' => [
            'exclude' => [
                'false',
                'null',
                'true',
            ],
            'fix_built_in' => true,
            'include' => [],
            'scope' => 'all',
            'strict' => false,
        ],
        'native_function_casing' => true,
        'native_function_invocation' => [
            'exclude' => [],
            'include' => [
                '@internal',
            ],
            'scope' => 'all',
            'strict' => false,
        ],
        'native_function_type_declaration_casing' => true,
        'new_with_braces' => true,
        'no_alias_functions' => [
            'sets' => [
                '@IMAP',
                '@internal',
            ],
        ],
        'no_alias_language_construct_call' => true,
        'no_alternative_syntax' => true,
        'no_binary_string' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_blank_lines_before_namespace' => false,
        'no_break_comment' => [
            'comment_text' => 'no break',
        ],
        'no_closing_tag' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'break',
                'case',
                'continue',
                'curly_brace_block',
                'default',
                'extra',
                'parenthesis_brace_block',
                'return',
                'square_brace_block',
                'switch',
                'throw',
                'use',
            ],
        ],
        'no_homoglyph_names' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_mixed_echo_print' => [
            'use' => 'echo',
        ],
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_null_property_initialization' => true,
        'no_php4_constructor' => false,
        'no_short_bool_cast' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_space_around_double_colon' => true,
        'no_spaces_after_function_name' => true,
        'no_spaces_around_offset' => [
            'positions' => [
                'inside',
                'outside',
            ],
        ],
        'no_spaces_inside_parenthesis' => true,
        'no_superfluous_elseif' => true,
        'no_superfluous_phpdoc_tags' => [
            'allow_mixed' => true,
            'allow_unused_params' => false,
            'remove_inheritdoc' => false,
        ],
        'no_trailing_comma_in_list_call' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_trailing_comma_in_singleline_function_call' => false,
        'no_trailing_whitespace' => true,
        'no_trailing_whitespace_in_comment' => true,
        'no_trailing_whitespace_in_string' => true,
        'no_unneeded_control_parentheses' => [
            'statements' => [
                'break',
                'clone',
                'continue',
                'echo_print',
                'return',
                'switch_case',
                'yield',
            ],
        ],
        'no_unneeded_curly_braces' => [
            'namespaces' => false,
        ],
        'no_unneeded_final_method' => [
            'private_methods' => true,
        ],
        'no_unneeded_import_alias' => true,
        'no_unreachable_default_argument_value' => true,
        'no_unset_cast' => true,
        'no_unset_on_property' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'no_useless_sprintf' => true,
        'no_whitespace_before_comma_in_array' => [
            'after_heredoc' => false,
        ],
        'no_whitespace_in_blank_line' => true,
        'non_printable_character' => [
            'use_escape_sequences_in_strings' => false,
        ],
        'normalize_index_brace' => true,
        'not_operator_with_space' => false,
        'not_operator_with_successor_space' => false,
        'nullable_type_declaration_for_default_null_value' => [
            'use_nullable_type_declaration' => true,
        ],
        'object_operator_without_whitespace' => true,
        'octal_notation' => true,
        'operator_linebreak' => [
            'only_booleans' => true,
            'position' => 'beginning',
        ],
        'ordered_class_elements' => [
            'order' => [
                'use_trait',
                'constant_public',
                'constant_protected',
                'constant_private',
                'property_public',
                'property_protected',
                'property_private',
                'construct',
                'destruct',
                'magic',
                'phpunit',
                'method_public',
                'method_protected',
                'method_private',
            ],
            'sort_algorithm' => 'none',
        ],
        'ordered_imports' => [
            'imports_order' => [
                'class',
                'const',
                'function',
            ],
            'sort_algorithm' => 'alpha',
        ],
        'ordered_interfaces' => [
            'direction' => 'ascend',
            'order' => 'alpha',
        ],
        'ordered_traits' => false,
        'php_unit_construct' => [
            'assertions' => [
                'assertEquals',
                'assertNotEquals',
                'assertNotSame',
                'assertSame',
            ],
        ],
        'php_unit_dedicate_assert' => [
            'target' => 'newest',
        ],
        'php_unit_dedicate_assert_internal_type' => [
            'target' => 'newest',
        ],
        'php_unit_expectation' => [
            'target' => 'newest',
        ],
        'php_unit_fqcn_annotation' => true,
        'php_unit_internal_class' => [
            'types' => [
                'abstract',
                'final',
                'normal',
            ],
        ],
        'php_unit_method_casing' => [
            'case' => 'camel_case',
        ],
        'php_unit_mock' => [
            'target' => 'newest',
        ],
        'php_unit_mock_short_will_return' => true,
        'php_unit_namespaced' => [
            'target' => 'newest',
        ],
        'php_unit_no_expectation_annotation' => [
            'target' => 'newest',
            'use_class_const' => true,
        ],
        'php_unit_set_up_tear_down_visibility' => true,
        'php_unit_size_class' => false,
        'php_unit_strict' => false,
        'php_unit_test_annotation' => [
            'style' => 'prefix',
        ],
        'php_unit_test_case_static_method_calls' => [
            'call_type' => 'self',
            'methods' => [],
        ],
        'php_unit_test_class_requires_covers' => true,
        'phpdoc_add_missing_param_annotation' => [
            'only_untyped' => true,
        ],
        'phpdoc_align' => [
            'align' => 'vertical',
            'tags' => [
                'method',
                'param',
                'property',
                'return',
                'throws',
                'type',
                'var',
            ],
        ],
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_indent' => true,
        'phpdoc_inline_tag_normalizer' => [
            'tags' => [
                'example',
                'id',
                'inheritdoc',
                'inheritdocs',
                'internal',
                'link',
                'source',
                'toc',
                'tutorial',
            ],
        ],
        'phpdoc_line_span' => [
            'const' => 'multi',
            'method' => 'multi',
            'property' => 'multi',
        ],
        'phpdoc_no_access' => true,
        'phpdoc_no_alias_tag' => [
            'replacements' => [
                'link' => 'see',
                'property-read' => 'property',
                'property-write' => 'property',
                'type' => 'var',
            ],
        ],
        'phpdoc_no_empty_return' => true,
        'phpdoc_no_package' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_order' => true,
        'phpdoc_order_by_value' => [
            'annotations' => [
                'author',
                'covers',
                'coversNothing',
                'dataProvider',
                'depends',
                'group',
                'internal',
                'method',
                'property',
                'property-read',
                'property-write',
                'requires',
                'throws',
                'uses',
            ],
        ],
        'phpdoc_return_self_reference' => [
            'replacements' => [
                '$self' => 'self',
                '$static' => 'static',
                '@self' => 'self',
                '@static' => 'static',
                '@this' => '$this',
                'this' => '$this',
            ],
        ],
        'phpdoc_scalar' => [
            'types' => [
                'boolean',
                'callback',
                'double',
                'integer',
                'real',
                'str',
            ],
        ],
        'phpdoc_separation' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_summary' => true,
        'phpdoc_tag_casing' => [
            'tags' => [
                'inheritDoc',
            ],
        ],
        'phpdoc_tag_type' => [
            'tags' => [
                'inheritdoc' => 'inline',
            ],
        ],
        'phpdoc_to_comment' => false,
        'phpdoc_to_param_type' => false,
        'phpdoc_to_property_type' => [
            'scalar_types' => true,
        ],
        'phpdoc_to_return_type' => false,
        'phpdoc_trim' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_types' => [
            'groups' => [
                'alias',
                'meta',
                'simple',
            ],
        ],
        'phpdoc_types_order' => [
            'null_adjustment' => 'always_first',
            'sort_algorithm' => 'alpha',
        ],
        'phpdoc_var_annotation_correct_order' => true,
        'phpdoc_var_without_name' => true,
        'pow_to_exponentiation' => true,
        'protected_to_private' => true,
        'psr_autoloading' => [
            'dir' => null,
        ],
        'random_api_migration' => [
            'replacements' => [
                'getrandmax' => 'mt_getrandmax',
                'rand' => 'mt_rand',
                'srand' => 'mt_srand',
            ],
        ],
        'regular_callable_call' => true,
        'return_assignment' => true,
        'return_type_declaration' => [
            'space_before' => 'none',
        ],
        'self_accessor' => true,
        'self_static_accessor' => true,
        'semicolon_after_instruction' => true,
        'set_type_to_cast' => true,
        'short_scalar_cast' => true,
        'simple_to_complex_string_variable' => true,
        'simplified_if_return' => false,
        'simplified_null_return' => false,
        'single_blank_line_at_eof' => true,
        'single_blank_line_before_namespace' => true,
        'single_class_element_per_statement' => [
            'elements' => [
                'property',
            ],
        ],
        'single_import_per_statement' => true,
        'single_line_after_imports' => true,
        'single_line_comment_spacing' => false,
        'single_line_comment_style' => [
            'comment_types' => [
                'hash',
            ],
        ],
        'single_line_throw' => false,
        'single_quote' => [
            'strings_containing_single_quote_chars' => false,
        ],
        'single_space_after_construct' => [
            'constructs' => [
                'abstract',
                'as',
                'attribute',
                'break',
                'case',
                'catch',
                'class',
                'clone',
                'comment',
                'const',
                'const_import',
                'continue',
                'do',
                'echo',
                'else',
                'elseif',
                'extends',
                'final',
                'finally',
                'for',
                'foreach',
                'function',
                'function_import',
                'global',
                'goto',
                'if',
                'implements',
                'include',
                'include_once',
                'instanceof',
                'insteadof',
                'interface',
                'match',
                'named_argument',
                'namespace',
                'new',
                'open_tag_with_echo',
                'php_doc',
                'php_open',
                'print',
                'private',
                'protected',
                'public',
                'require',
                'require_once',
                'return',
                'static',
                'throw',
                'trait',
                'try',
                'use',
                'use_lambda',
                'use_trait',
                'var',
                'while',
                'yield',
                'yield_from',
            ],
        ],
        'single_trait_insert_per_statement' => true,
        'space_after_semicolon' => [
            'remove_in_empty_for_expressions' => false,
        ],
        'standardize_increment' => true,
        'standardize_not_equals' => true,
        'static_lambda' => true,
        'strict_comparison' => true,
        'strict_param' => true,
        'string_length_to_empty' => true,
        'string_line_ending' => true,
        'switch_case_semicolon_to_colon' => true,
        'switch_case_space' => true,
        'switch_continue_to_break' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_elvis_operator' => true,
        'ternary_to_null_coalescing' => true,
        'trailing_comma_in_multiline' => [
            'after_heredoc' => false,
            'elements' => [
                'arguments',
                'arrays',
                'parameters',
            ],
        ],
        'trim_array_spaces' => true,
        'types_spaces' => [
            'space' => 'none',
        ],
        'unary_operator_spaces' => true,
        'use_arrow_functions' => false,
        'visibility_required' => [
            'elements' => [
                'const',
                'method',
                'property',
            ],
        ],
        'void_return' => true,
        'whitespace_after_comma_in_array' => true,
        'yoda_style' => [
            'always_move_variable' => true,
            'equal' => true,
            'identical' => true,
            'less_and_greater' => true,
        ],
    ];
    protected int $targetPhpVersion = 80100;
}
