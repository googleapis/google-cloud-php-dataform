<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1\CompilationResultAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a notebook.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.CompilationResultAction.Notebook</code>
 */
class Notebook extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of actions that this action depends on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.Target dependency_targets = 1;</code>
     */
    private $dependency_targets;
    /**
     * Whether this action is disabled (i.e. should not be run).
     *
     * Generated from protobuf field <code>bool disabled = 2;</code>
     */
    protected $disabled = false;
    /**
     * The contents of the notebook.
     *
     * Generated from protobuf field <code>string contents = 3;</code>
     */
    protected $contents = '';
    /**
     * Arbitrary, user-defined tags on this action.
     *
     * Generated from protobuf field <code>repeated string tags = 4;</code>
     */
    private $tags;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dataform\V1beta1\Target>|\Google\Protobuf\Internal\RepeatedField $dependency_targets
     *           A list of actions that this action depends on.
     *     @type bool $disabled
     *           Whether this action is disabled (i.e. should not be run).
     *     @type string $contents
     *           The contents of the notebook.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $tags
     *           Arbitrary, user-defined tags on this action.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of actions that this action depends on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.Target dependency_targets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDependencyTargets()
    {
        return $this->dependency_targets;
    }

    /**
     * A list of actions that this action depends on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.Target dependency_targets = 1;</code>
     * @param array<\Google\Cloud\Dataform\V1beta1\Target>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDependencyTargets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataform\V1beta1\Target::class);
        $this->dependency_targets = $arr;

        return $this;
    }

    /**
     * Whether this action is disabled (i.e. should not be run).
     *
     * Generated from protobuf field <code>bool disabled = 2;</code>
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Whether this action is disabled (i.e. should not be run).
     *
     * Generated from protobuf field <code>bool disabled = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->disabled = $var;

        return $this;
    }

    /**
     * The contents of the notebook.
     *
     * Generated from protobuf field <code>string contents = 3;</code>
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * The contents of the notebook.
     *
     * Generated from protobuf field <code>string contents = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContents($var)
    {
        GPBUtil::checkString($var, True);
        $this->contents = $var;

        return $this;
    }

    /**
     * Arbitrary, user-defined tags on this action.
     *
     * Generated from protobuf field <code>repeated string tags = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Arbitrary, user-defined tags on this action.
     *
     * Generated from protobuf field <code>repeated string tags = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

}


