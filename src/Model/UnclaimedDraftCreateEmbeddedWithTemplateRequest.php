<?php
/**
 * UnclaimedDraftCreateEmbeddedWithTemplateRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 */

/**
 * HelloSign API
 *
 * HelloSign v3 API
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: apisupport@hellosign.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HelloSignSDK\Model;

use ArrayAccess;
use HelloSignSDK\ObjectSerializer;
use InvalidArgumentException;
use JsonSerializable;
use SplFileObject;

/**
 * UnclaimedDraftCreateEmbeddedWithTemplateRequest Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UnclaimedDraftCreateEmbeddedWithTemplateRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'UnclaimedDraftCreateEmbeddedWithTemplateRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'client_id' => 'string',
        'requester_email_address' => 'string',
        'template_ids' => 'string[]',
        'allow_decline' => 'bool',
        'allow_reassign' => 'bool',
        'ccs' => '\HelloSignSDK\Model\SubCC[]',
        'custom_fields' => '\HelloSignSDK\Model\SubCustomField[]',
        'editor_options' => '\HelloSignSDK\Model\SubEditorOptions',
        'field_options' => '\HelloSignSDK\Model\SubFieldOptions',
        'file' => '\SplFileObject[]',
        'file_url' => 'string[]',
        'force_signer_roles' => 'bool',
        'force_subject_message' => 'bool',
        'hold_request' => 'bool',
        'is_for_embedded_signing' => 'bool',
        'message' => 'string',
        'metadata' => 'array<string,mixed>',
        'preview_only' => 'bool',
        'requesting_redirect_url' => 'string',
        'show_preview' => 'bool',
        'show_progress_stepper' => 'bool',
        'signers' => '\HelloSignSDK\Model\SubUnclaimedDraftTemplateSigner[]',
        'signing_options' => '\HelloSignSDK\Model\SubSigningOptions',
        'signing_redirect_url' => 'string',
        'skip_me_now' => 'bool',
        'subject' => 'string',
        'test_mode' => 'bool',
        'title' => 'string',
        'populate_auto_fill_fields' => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'client_id' => null,
        'requester_email_address' => 'email',
        'template_ids' => null,
        'allow_decline' => null,
        'allow_reassign' => null,
        'ccs' => null,
        'custom_fields' => null,
        'editor_options' => null,
        'field_options' => null,
        'file' => 'binary',
        'file_url' => null,
        'force_signer_roles' => null,
        'force_subject_message' => null,
        'hold_request' => null,
        'is_for_embedded_signing' => null,
        'message' => null,
        'metadata' => null,
        'preview_only' => null,
        'requesting_redirect_url' => null,
        'show_preview' => null,
        'show_progress_stepper' => null,
        'signers' => null,
        'signing_options' => null,
        'signing_redirect_url' => null,
        'skip_me_now' => null,
        'subject' => null,
        'test_mode' => null,
        'title' => null,
        'populate_auto_fill_fields' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'client_id' => 'client_id',
        'requester_email_address' => 'requester_email_address',
        'template_ids' => 'template_ids',
        'allow_decline' => 'allow_decline',
        'allow_reassign' => 'allow_reassign',
        'ccs' => 'ccs',
        'custom_fields' => 'custom_fields',
        'editor_options' => 'editor_options',
        'field_options' => 'field_options',
        'file' => 'file',
        'file_url' => 'file_url',
        'force_signer_roles' => 'force_signer_roles',
        'force_subject_message' => 'force_subject_message',
        'hold_request' => 'hold_request',
        'is_for_embedded_signing' => 'is_for_embedded_signing',
        'message' => 'message',
        'metadata' => 'metadata',
        'preview_only' => 'preview_only',
        'requesting_redirect_url' => 'requesting_redirect_url',
        'show_preview' => 'show_preview',
        'show_progress_stepper' => 'show_progress_stepper',
        'signers' => 'signers',
        'signing_options' => 'signing_options',
        'signing_redirect_url' => 'signing_redirect_url',
        'skip_me_now' => 'skip_me_now',
        'subject' => 'subject',
        'test_mode' => 'test_mode',
        'title' => 'title',
        'populate_auto_fill_fields' => 'populate_auto_fill_fields',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_id' => 'setClientId',
        'requester_email_address' => 'setRequesterEmailAddress',
        'template_ids' => 'setTemplateIds',
        'allow_decline' => 'setAllowDecline',
        'allow_reassign' => 'setAllowReassign',
        'ccs' => 'setCcs',
        'custom_fields' => 'setCustomFields',
        'editor_options' => 'setEditorOptions',
        'field_options' => 'setFieldOptions',
        'file' => 'setFile',
        'file_url' => 'setFileUrl',
        'force_signer_roles' => 'setForceSignerRoles',
        'force_subject_message' => 'setForceSubjectMessage',
        'hold_request' => 'setHoldRequest',
        'is_for_embedded_signing' => 'setIsForEmbeddedSigning',
        'message' => 'setMessage',
        'metadata' => 'setMetadata',
        'preview_only' => 'setPreviewOnly',
        'requesting_redirect_url' => 'setRequestingRedirectUrl',
        'show_preview' => 'setShowPreview',
        'show_progress_stepper' => 'setShowProgressStepper',
        'signers' => 'setSigners',
        'signing_options' => 'setSigningOptions',
        'signing_redirect_url' => 'setSigningRedirectUrl',
        'skip_me_now' => 'setSkipMeNow',
        'subject' => 'setSubject',
        'test_mode' => 'setTestMode',
        'title' => 'setTitle',
        'populate_auto_fill_fields' => 'setPopulateAutoFillFields',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_id' => 'getClientId',
        'requester_email_address' => 'getRequesterEmailAddress',
        'template_ids' => 'getTemplateIds',
        'allow_decline' => 'getAllowDecline',
        'allow_reassign' => 'getAllowReassign',
        'ccs' => 'getCcs',
        'custom_fields' => 'getCustomFields',
        'editor_options' => 'getEditorOptions',
        'field_options' => 'getFieldOptions',
        'file' => 'getFile',
        'file_url' => 'getFileUrl',
        'force_signer_roles' => 'getForceSignerRoles',
        'force_subject_message' => 'getForceSubjectMessage',
        'hold_request' => 'getHoldRequest',
        'is_for_embedded_signing' => 'getIsForEmbeddedSigning',
        'message' => 'getMessage',
        'metadata' => 'getMetadata',
        'preview_only' => 'getPreviewOnly',
        'requesting_redirect_url' => 'getRequestingRedirectUrl',
        'show_preview' => 'getShowPreview',
        'show_progress_stepper' => 'getShowProgressStepper',
        'signers' => 'getSigners',
        'signing_options' => 'getSigningOptions',
        'signing_redirect_url' => 'getSigningRedirectUrl',
        'skip_me_now' => 'getSkipMeNow',
        'subject' => 'getSubject',
        'test_mode' => 'getTestMode',
        'title' => 'getTitle',
        'populate_auto_fill_fields' => 'getPopulateAutoFillFields',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param array|null $data Associated array of property values
     *                         initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['client_id'] = $data['client_id'] ?? null;
        $this->container['requester_email_address'] = $data['requester_email_address'] ?? null;
        $this->container['template_ids'] = $data['template_ids'] ?? null;
        $this->container['allow_decline'] = $data['allow_decline'] ?? false;
        $this->container['allow_reassign'] = $data['allow_reassign'] ?? false;
        $this->container['ccs'] = $data['ccs'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['editor_options'] = $data['editor_options'] ?? null;
        $this->container['field_options'] = $data['field_options'] ?? null;
        $this->container['file'] = $data['file'] ?? null;
        $this->container['file_url'] = $data['file_url'] ?? null;
        $this->container['force_signer_roles'] = $data['force_signer_roles'] ?? false;
        $this->container['force_subject_message'] = $data['force_subject_message'] ?? false;
        $this->container['hold_request'] = $data['hold_request'] ?? false;
        $this->container['is_for_embedded_signing'] = $data['is_for_embedded_signing'] ?? false;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['preview_only'] = $data['preview_only'] ?? false;
        $this->container['requesting_redirect_url'] = $data['requesting_redirect_url'] ?? null;
        $this->container['show_preview'] = $data['show_preview'] ?? false;
        $this->container['show_progress_stepper'] = $data['show_progress_stepper'] ?? true;
        $this->container['signers'] = $data['signers'] ?? null;
        $this->container['signing_options'] = $data['signing_options'] ?? null;
        $this->container['signing_redirect_url'] = $data['signing_redirect_url'] ?? null;
        $this->container['skip_me_now'] = $data['skip_me_now'] ?? false;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['test_mode'] = $data['test_mode'] ?? false;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['populate_auto_fill_fields'] = $data['populate_auto_fill_fields'] ?? false;
    }

    public static function fromArray(array $data): UnclaimedDraftCreateEmbeddedWithTemplateRequest
    {
        /** @var UnclaimedDraftCreateEmbeddedWithTemplateRequest $obj */
        $obj = ObjectSerializer::deserialize(
            ObjectSerializer::instantiateFiles(static::class, $data),
            UnclaimedDraftCreateEmbeddedWithTemplateRequest::class,
        );

        return $obj;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
        }
        if ($this->container['requester_email_address'] === null) {
            $invalidProperties[] = "'requester_email_address' can't be null";
        }
        if ($this->container['template_ids'] === null) {
            $invalidProperties[] = "'template_ids' can't be null";
        }
        if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 5000)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 5000.";
        }

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 255)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 255)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id Client id of the app used to create the draft. Used to apply the branding and callback url defined for the app.
     *
     * @return self
     */
    public function setClientId(string $client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets requester_email_address
     *
     * @return string
     */
    public function getRequesterEmailAddress()
    {
        return $this->container['requester_email_address'];
    }

    /**
     * Sets requester_email_address
     *
     * @param string $requester_email_address the email address of the user that should be designated as the requester of this draft
     *
     * @return self
     */
    public function setRequesterEmailAddress(string $requester_email_address)
    {
        $this->container['requester_email_address'] = $requester_email_address;

        return $this;
    }

    /**
     * Gets template_ids
     *
     * @return string[]
     */
    public function getTemplateIds()
    {
        return $this->container['template_ids'];
    }

    /**
     * Sets template_ids
     *
     * @param string[] $template_ids use `template_ids` to create a SignatureRequest from one or more templates, in the order in which the templates will be used
     *
     * @return self
     */
    public function setTemplateIds(array $template_ids)
    {
        $this->container['template_ids'] = $template_ids;

        return $this;
    }

    /**
     * Gets allow_decline
     *
     * @return bool|null
     */
    public function getAllowDecline()
    {
        return $this->container['allow_decline'];
    }

    /**
     * Sets allow_decline
     *
     * @param bool|null $allow_decline Allows signers to decline to sign a document if `true`. Defaults to `false`.
     *
     * @return self
     */
    public function setAllowDecline(?bool $allow_decline)
    {
        $this->container['allow_decline'] = $allow_decline;

        return $this;
    }

    /**
     * Gets allow_reassign
     *
     * @return bool|null
     */
    public function getAllowReassign()
    {
        return $this->container['allow_reassign'];
    }

    /**
     * Sets allow_reassign
     *
     * @param bool|null $allow_reassign Allows signers to reassign their signature requests to other signers if set to `true`. Defaults to `false`.  **Note**: Only available for Premium plan and higher.
     *
     * @return self
     */
    public function setAllowReassign(?bool $allow_reassign)
    {
        $this->container['allow_reassign'] = $allow_reassign;

        return $this;
    }

    /**
     * Gets ccs
     *
     * @return SubCC[]|null
     */
    public function getCcs()
    {
        return $this->container['ccs'];
    }

    /**
     * Sets ccs
     *
     * @param SubCC[]|null $ccs Add CC email recipients. Required when a CC role exists for the Template.
     *
     * @return self
     */
    public function setCcs(?array $ccs)
    {
        $this->container['ccs'] = $ccs;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return SubCustomField[]|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param SubCustomField[]|null $custom_fields An array defining values and options for custom fields. Required when a custom field exists in the Template.
     *
     * @return self
     */
    public function setCustomFields(?array $custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets editor_options
     *
     * @return SubEditorOptions|null
     */
    public function getEditorOptions()
    {
        return $this->container['editor_options'];
    }

    /**
     * Sets editor_options
     *
     * @param SubEditorOptions|null $editor_options editor_options
     *
     * @return self
     */
    public function setEditorOptions(?SubEditorOptions $editor_options)
    {
        $this->container['editor_options'] = $editor_options;

        return $this;
    }

    /**
     * Gets field_options
     *
     * @return SubFieldOptions|null
     */
    public function getFieldOptions()
    {
        return $this->container['field_options'];
    }

    /**
     * Sets field_options
     *
     * @param SubFieldOptions|null $field_options field_options
     *
     * @return self
     */
    public function setFieldOptions(?SubFieldOptions $field_options)
    {
        $this->container['field_options'] = $field_options;

        return $this;
    }

    /**
     * Gets file
     *
     * @return SplFileObject[]|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param SplFileObject[]|null $file Use `file[]` to append additional files to the signature request being created from the template. HelloSign will parse the files for [text tags](https://app.hellosign.com/api/textTagsWalkthrough) and append it to the signature request. Text tags for signers not on the template(s) will be ignored.  **file** or **file_url[]** is required, but not both.
     *
     * @return self
     */
    public function setFile(?array $file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets file_url
     *
     * @return string[]|null
     */
    public function getFileUrl()
    {
        return $this->container['file_url'];
    }

    /**
     * Sets file_url
     *
     * @param string[]|null $file_url Use file_url[] to append additional files to the signature request being created from the template. HelloSign will download the file, then parse it for [text tags](https://app.hellosign.com/api/textTagsWalkthrough), and append to the signature request. Text tags for signers not on the template(s) will be ignored.  **file** or **file_url[]** is required, but not both.
     *
     * @return self
     */
    public function setFileUrl(?array $file_url)
    {
        $this->container['file_url'] = $file_url;

        return $this;
    }

    /**
     * Gets force_signer_roles
     *
     * @return bool|null
     */
    public function getForceSignerRoles()
    {
        return $this->container['force_signer_roles'];
    }

    /**
     * Sets force_signer_roles
     *
     * @param bool|null $force_signer_roles provide users the ability to review/edit the template signer roles
     *
     * @return self
     */
    public function setForceSignerRoles(?bool $force_signer_roles)
    {
        $this->container['force_signer_roles'] = $force_signer_roles;

        return $this;
    }

    /**
     * Gets force_subject_message
     *
     * @return bool|null
     */
    public function getForceSubjectMessage()
    {
        return $this->container['force_subject_message'];
    }

    /**
     * Sets force_subject_message
     *
     * @param bool|null $force_subject_message provide users the ability to review/edit the template subject and message
     *
     * @return self
     */
    public function setForceSubjectMessage(?bool $force_subject_message)
    {
        $this->container['force_subject_message'] = $force_subject_message;

        return $this;
    }

    /**
     * Gets hold_request
     *
     * @return bool|null
     */
    public function getHoldRequest()
    {
        return $this->container['hold_request'];
    }

    /**
     * Sets hold_request
     *
     * @param bool|null $hold_request The request from this draft will not automatically send to signers post-claim if set to 1. Requester must [release](/api/reference/operation/signatureRequestReleaseHold/) the request from hold when ready to send. Defaults to `false`.
     *
     * @return self
     */
    public function setHoldRequest(?bool $hold_request)
    {
        $this->container['hold_request'] = $hold_request;

        return $this;
    }

    /**
     * Gets is_for_embedded_signing
     *
     * @return bool|null
     */
    public function getIsForEmbeddedSigning()
    {
        return $this->container['is_for_embedded_signing'];
    }

    /**
     * Sets is_for_embedded_signing
     *
     * @param bool|null $is_for_embedded_signing The request created from this draft will also be signable in embedded mode if set to `true`. Defaults to `false`.
     *
     * @return self
     */
    public function setIsForEmbeddedSigning(?bool $is_for_embedded_signing)
    {
        $this->container['is_for_embedded_signing'] = $is_for_embedded_signing;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message the custom message in the email that will be sent to the signers
     *
     * @return self
     */
    public function setMessage(?string $message)
    {
        if (!is_null($message) && (mb_strlen($message) > 5000)) {
            throw new InvalidArgumentException('invalid length for $message when calling UnclaimedDraftCreateEmbeddedWithTemplateRequest., must be smaller than or equal to 5000.');
        }

        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,mixed>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,mixed>|null $metadata Key-value data that should be attached to the signature request. This metadata is included in all API responses and events involving the signature request. For example, use the metadata field to store a signer's order number for look up when receiving events for the signature request.  Each request can include up to 10 metadata keys (or 50 nested metadata keys), with key names up to 40 characters long and values up to 1000 characters long.
     *
     * @return self
     */
    public function setMetadata(?array $metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets preview_only
     *
     * @return bool|null
     */
    public function getPreviewOnly()
    {
        return $this->container['preview_only'];
    }

    /**
     * Sets preview_only
     *
     * @param bool|null $preview_only This allows the requester to enable the preview experience (i.e. does not allow the requester's end user to add any additional fields via the editor).  - `preview_only=true`: Allows requesters to enable the preview only experience. - `preview_only=false`: Allows requesters to disable the preview only experience.  **Note**: This parameter overwrites `show_preview=1` (if set).
     *
     * @return self
     */
    public function setPreviewOnly(?bool $preview_only)
    {
        $this->container['preview_only'] = $preview_only;

        return $this;
    }

    /**
     * Gets requesting_redirect_url
     *
     * @return string|null
     */
    public function getRequestingRedirectUrl()
    {
        return $this->container['requesting_redirect_url'];
    }

    /**
     * Sets requesting_redirect_url
     *
     * @param string|null $requesting_redirect_url the URL you want signers redirected to after they successfully request a signature
     *
     * @return self
     */
    public function setRequestingRedirectUrl(?string $requesting_redirect_url)
    {
        $this->container['requesting_redirect_url'] = $requesting_redirect_url;

        return $this;
    }

    /**
     * Gets show_preview
     *
     * @return bool|null
     */
    public function getShowPreview()
    {
        return $this->container['show_preview'];
    }

    /**
     * Sets show_preview
     *
     * @param bool|null $show_preview This allows the requester to enable the editor/preview experience.  - `show_preview=true`: Allows requesters to enable the editor/preview experience. - `show_preview=false`: Allows requesters to disable the editor/preview experience.
     *
     * @return self
     */
    public function setShowPreview(?bool $show_preview)
    {
        $this->container['show_preview'] = $show_preview;

        return $this;
    }

    /**
     * Gets show_progress_stepper
     *
     * @return bool|null
     */
    public function getShowProgressStepper()
    {
        return $this->container['show_progress_stepper'];
    }

    /**
     * Sets show_progress_stepper
     *
     * @param bool|null $show_progress_stepper when only one step remains in the signature request process and this parameter is set to `false` then the progress stepper will be hidden
     *
     * @return self
     */
    public function setShowProgressStepper(?bool $show_progress_stepper)
    {
        $this->container['show_progress_stepper'] = $show_progress_stepper;

        return $this;
    }

    /**
     * Gets signers
     *
     * @return SubUnclaimedDraftTemplateSigner[]|null
     */
    public function getSigners()
    {
        return $this->container['signers'];
    }

    /**
     * Sets signers
     *
     * @param SubUnclaimedDraftTemplateSigner[]|null $signers add Signers to your Templated-based Signature Request
     *
     * @return self
     */
    public function setSigners(?array $signers)
    {
        $this->container['signers'] = $signers;

        return $this;
    }

    /**
     * Gets signing_options
     *
     * @return SubSigningOptions|null
     */
    public function getSigningOptions()
    {
        return $this->container['signing_options'];
    }

    /**
     * Sets signing_options
     *
     * @param SubSigningOptions|null $signing_options signing_options
     *
     * @return self
     */
    public function setSigningOptions(?SubSigningOptions $signing_options)
    {
        $this->container['signing_options'] = $signing_options;

        return $this;
    }

    /**
     * Gets signing_redirect_url
     *
     * @return string|null
     */
    public function getSigningRedirectUrl()
    {
        return $this->container['signing_redirect_url'];
    }

    /**
     * Sets signing_redirect_url
     *
     * @param string|null $signing_redirect_url the URL you want signers redirected to after they successfully sign
     *
     * @return self
     */
    public function setSigningRedirectUrl(?string $signing_redirect_url)
    {
        $this->container['signing_redirect_url'] = $signing_redirect_url;

        return $this;
    }

    /**
     * Gets skip_me_now
     *
     * @return bool|null
     */
    public function getSkipMeNow()
    {
        return $this->container['skip_me_now'];
    }

    /**
     * Sets skip_me_now
     *
     * @param bool|null $skip_me_now Disables the \"Me (Now)\" option for the person preparing the document. Does not work with type `send_document`. Defaults to `false`.
     *
     * @return self
     */
    public function setSkipMeNow(?bool $skip_me_now)
    {
        $this->container['skip_me_now'] = $skip_me_now;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject the subject in the email that will be sent to the signers
     *
     * @return self
     */
    public function setSubject(?string $subject)
    {
        if (!is_null($subject) && (mb_strlen($subject) > 255)) {
            throw new InvalidArgumentException('invalid length for $subject when calling UnclaimedDraftCreateEmbeddedWithTemplateRequest., must be smaller than or equal to 255.');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets test_mode
     *
     * @return bool|null
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     *
     * @param bool|null $test_mode Whether this is a test, the signature request created from this draft will not be legally binding if set to `true`. Defaults to `false`.
     *
     * @return self
     */
    public function setTestMode(?bool $test_mode)
    {
        $this->container['test_mode'] = $test_mode;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title the title you want to assign to the SignatureRequest
     *
     * @return self
     */
    public function setTitle(?string $title)
    {
        if (!is_null($title) && (mb_strlen($title) > 255)) {
            throw new InvalidArgumentException('invalid length for $title when calling UnclaimedDraftCreateEmbeddedWithTemplateRequest., must be smaller than or equal to 255.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets populate_auto_fill_fields
     *
     * @return bool|null
     */
    public function getPopulateAutoFillFields()
    {
        return $this->container['populate_auto_fill_fields'];
    }

    /**
     * Sets populate_auto_fill_fields
     *
     * @param bool|null $populate_auto_fill_fields Controls whether [auto fill fields](https://faq.hellosign.com/hc/en-us/articles/360051467511-Auto-Fill-Fields) can automatically populate a signer's information during signing.    ⚠️ **Note** ⚠️: Keep your signer's information safe by ensuring that the _signer on your signature request is the intended party_ before using this feature.
     *
     * @return self
     */
    public function setPopulateAutoFillFields(?bool $populate_auto_fill_fields)
    {
        $this->container['populate_auto_fill_fields'] = $populate_auto_fill_fields;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param mixed $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param mixed $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param mixed $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param mixed $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return scalar|object|array|null returns data which can be serialized by json_encode(), which is a value
     *                                  of any type other than a resource
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_UNESCAPED_SLASHES
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
