<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Issue
 * @package App\Models
 */
class Issue extends Model
{
    /** @var string $table */
    protected $table = "issues";

    /** @var string $primaryKey */
    protected $primaryKey = 'id';

    /** @var string $array */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    const STATUS_OPEN = 0;
    const STATUS_IN_PROGRESS = 1;
    const STATUS_WAITING_FOR_VERIFICATION = 2;
    const STATUS_REMAND = 3;
    const STATUS_RESOLVED = 4;
    const STATUS_CLOSED = 5;
    const STATUS_NAMES = [
        self::STATUS_OPEN => 'Open',
        self::STATUS_IN_PROGRESS => 'In Progress',
        self::STATUS_WAITING_FOR_VERIFICATION => 'Waiting for Verification',
        self::STATUS_REMAND => 'Remand',
        self::STATUS_RESOLVED => 'Resolved',
        self::STATUS_CLOSED => 'Closed',
    ];

    const TYPE_TASK = 0;
    const TYPE_REQUEST = 1;
    const TYPE_QUESTION = 2;
    const TYPE_BUG = 3;
    const TYPE_SECURITY = 4;
    const TYPE_TEST = 5;
    const TYPE_OTHER = 6;
    const TYPE_NAMES = [
        self::TYPE_TASK => 'Task',
        self::TYPE_REQUEST => 'Request',
        self::TYPE_QUESTION => 'Question',
        self::TYPE_BUG => 'Bug',
        self::TYPE_SECURITY => 'Security',
        self::TYPE_TEST => 'Test',
        self::TYPE_OTHER => 'Other',
    ];

    const RESOLUTION_FIXED = 0;
    const RESOLUTION_WONT_FIX = 1;
    const RESOLUTION_INVALID = 2;
    const RESOLUTION_DUPLICATE = 3;
    const RESOLUTION_CANNOT_REPRODUCE = 4;
    const RESOLUTION_NAMES = [
        self::RESOLUTION_FIXED => 'Fixed',
        self::RESOLUTION_WONT_FIX => 'Won\'t Fix',
        self::RESOLUTION_INVALID => 'Invalid',
        self::RESOLUTION_DUPLICATE => 'Duplicate',
        self::RESOLUTION_CANNOT_REPRODUCE => 'Cannot Reproduce',
    ];

    const PRIORITY_LOW = 0;
    const PRIORITY_MEDIUM = 1;
    const PRIORITY_HIGH = 2;
}
