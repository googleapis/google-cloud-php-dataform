<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1/dataform.proto

namespace Google\Cloud\Dataform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `QueryWorkflowInvocationActions` response message.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1.QueryWorkflowInvocationActionsResponse</code>
 */
class QueryWorkflowInvocationActionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of workflow invocation actions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1.WorkflowInvocationAction workflow_invocation_actions = 1;</code>
     */
    private $workflow_invocation_actions;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dataform\V1\WorkflowInvocationAction>|\Google\Protobuf\Internal\RepeatedField $workflow_invocation_actions
     *           List of workflow invocation actions.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * List of workflow invocation actions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1.WorkflowInvocationAction workflow_invocation_actions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWorkflowInvocationActions()
    {
        return $this->workflow_invocation_actions;
    }

    /**
     * List of workflow invocation actions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1.WorkflowInvocationAction workflow_invocation_actions = 1;</code>
     * @param array<\Google\Cloud\Dataform\V1\WorkflowInvocationAction>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWorkflowInvocationActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataform\V1\WorkflowInvocationAction::class);
        $this->workflow_invocation_actions = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

