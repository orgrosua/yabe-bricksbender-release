<?php

/*
 * This file is part of the Yabe package.
 *
 * (c) Joshua Gugun Siagian <suabahasa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare (strict_types=1);
namespace _YabeBricksbender;

/**
 * Plugin constants.
 *
 * @since 1.0.0
 */
class BRICKSBENDER
{
    /**
     * @var string
     */
    public const FILE = __DIR__ . '/yabe-bricksbender.php';
    /**
     * @var string
     */
    public const VERSION = '1.0.4';
    /**
     * @var int
     */
    public const VERSION_ID = 10004;
    /**
     * @var int
     */
    public const MAJOR_VERSION = 1;
    /**
     * @var int
     */
    public const MINOR_VERSION = 0;
    /**
     * @var int
     */
    public const RELEASE_VERSION = 4;
    /**
     * @var string
     */
    public const EXTRA_VERSION = '';
    /**
     * @var string
     */
    public const WP_OPTION = 'bricksbender';
    /**
     * @var string
     */
    public const DB_TABLE_PREFIX = 'bricksbender';
    /**
     * @var string
     */
    public const REST_NAMESPACE = 'yabe-bricksbender/v1';
}
/**
 * Plugin constants.
 *
 * @since 1.0.0
 */
\class_alias('_YabeBricksbender\\BRICKSBENDER', 'BRICKSBENDER', \false);
