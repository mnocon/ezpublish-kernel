<?php
/**
 * File containing the BinaryFile Value class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\FieldType\BinaryFile;
use eZ\Publish\Core\FieldType\Value as BaseValue,
    eZ\Publish\API\Repository\IOService,
    eZ\Publish\API\Repository\Exceptions\PropertyNotFoundException;

/**
 * Value for BinaryFile field type
 *
 * @property-read string $filename The internal name of the file (generated by the system)
 * @property-read string $mimeType The MIME type of the file (for example "audio/wav").
 * @property-read string $mimeTypeCategory The MIME type category (for example "audio").
 * @property-read string $mimeTypePart The MIME type part (for example "wav").
 * @property-read int $filesize The size of the file (number of bytes).
 * @property-read string $filepath The path to the file (including the filename).
 */
class Value extends BaseValue
{
    /**
     * Path string, where the binary file is located
     *
     * @var string
     * @required
     */
    public $path;

    /**
     * Display file name
     *
     * @var string
     */
    public $fileName;

    /**
     * Size of the image file
     *
     * @var integer
     */
    public $fileSize;

    /**
     * Mime type of the file
     *
     * @var string
     */
    public $mimeType;

    /**
     * Number of times the file has been downloaded through content/download module
     *
     * @var int
     */
    public $downloadCount = 0;

    /**
     * Construct a new Value object.
     *
     * @param array $fileData
     */
    public function __construct( array $fileData = array() )
    {
        foreach ( $imageData as $key => $value )
        {
            try
            {
                $this->$key = $value;
            }
            catch ( PropertyNotFoundException $e )
            {
                throw new InvalidArgumentType(
                    sprintf( '$imageData->%s', $key ),
                    'Property not found',
                    $value
                );
            }
        }
    }

    /**
     * Creates a value only from a file path
     *
     * @param string $path
     * @return Value
     */
    public static function fromString( $path )
    {
        return new static(
            array(
                'path' => $path,
                'fileName' => basename( $path ),
                'fileSize' => filesize( $path ),
            )
        );
    }
}
