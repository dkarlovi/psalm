<?php
namespace Psalm\Storage;

class MethodStorage extends FunctionLikeStorage
{
    /**
     * @var bool
     */
    public $is_static;

    /**
     * @var int
     */
    public $visibility;

    /**
     * @var bool
     */
    public $final;

    /**
     * @var bool
     */
    public $abstract;

    /**
     * @var bool
     */
    public $overridden_downstream = false;

    /**
     * @var bool
     */
    public $overridden_somewhere = false;

    /**
     * @var bool
     */
    public $inheritdoc = false;

    /**
     * @var bool
     */
    public $inherited_return_type = false;

    /**
     * @var string
     */
    public $defining_fqcln;

    /**
     * @var bool
     */
    public $has_docblock_param_types = false;

    /**
     * @var bool
     */
    public $external_mutation_free = false;

    /**
     * @var bool
     */
    public $mutation_free_inferred = false;

    /**
     * @var ?array<string, bool>
     */
    public $this_property_mutations = null;
}
