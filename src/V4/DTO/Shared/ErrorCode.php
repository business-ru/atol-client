<?php

namespace Lamoda\AtolClient\V4\DTO\Shared;

/**
 * Constants for Atol error codes
 */
interface ErrorCode
{
    public const UNDEFINED = 0;
    public const INCOMING_CHEQUE_PROCESSING_FAILED = 1;
    public const MISSING_TOKEN = 10;
    public const EXPIRED_TOKEN = 11;
    public const WRONG_USER_OR_PASSWORD = 12;
    public const VALIDATION_EXCEPTION = 13;
    public const GROUP_CODE_AND_TOKEN_DONT_MATCH = 20;
    public const NOT_SUPPORTED_GROUP_CODE_FOR_PROTOCOL = 21;
    public const MISSING_UUID = 30;
    public const INCOMING_OPERATION_NOT_SUPPORTED = 31;
    public const INCOMING_VALIDATION_EXCEPTION = 32;
    public const INCOMING_EXTERNAL_ID_ALREADY_EXISTS = 33;
    public const STATE_CHECK_NOT_FOUND = 34;
    public const BAD_REQUEST = 40;
    public const UNSUPPORTED_MEDIA_TYPE = 41;
    public const ERROR_SERVER_CONFIGURATION = 50;
}