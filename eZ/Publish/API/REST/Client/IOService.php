<?php
/**
 * File containing the IOService class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\API\REST\Client;

use \eZ\Publish\API\Repository\Values\IO\BinaryFile;
use \eZ\Publish\API\Repository\Values\IO\BinaryFileCreateStruct;
use \eZ\Publish\API\Repository\Values\IO\ContentType;


/**
 * Service used to handle io operations.
 *
 * @package eZ\Publish\API\Repository
 */
class IOService implements \eZ\Publish\API\Repository\IOService
{
    /**
     * Creates a BinaryFileCreateStruct object from the uploaded file $uploadedFile
     *
     * @throws \eZ\Publish\API\Repository\Exceptions\InvalidArgumentException When given an invalid uploaded file
     *
     * @param array $uploadedFile The $_POST hash of an uploaded file
     *
     * @return \eZ\Publish\API\Repository\Values\IO\BinaryFileCreateStruct
     */
    public function newBinaryCreateStructFromUploadedFile( array $uploadedFile )
    {
        throw new \Exception( "@TODO: Implement." );
    }

    /**
     * Creates a BinaryFileCreateStruct object from $localFile
     *
     * @throws \eZ\Publish\API\Repository\Exceptions\InvalidArgumentException When given a non existing / unreadable file
     *
     * @param string $localFile Path to local file
     *
     * @return \eZ\Publish\API\Repository\Values\IO\BinaryFileCreateStruct
     */
    public function newBinaryCreateStructFromLocalFile( $localFile )
    {
        throw new \Exception( "@TODO: Implement." );
    }

    /**
     * Creates a  binary file in the the repository
     *
     * @param \eZ\Publish\API\Repository\Values\IO\BinaryFileCreateStruct $binaryFileCreateStruct
     *
     * @return \eZ\Publish\API\Repository\Values\IO\BinaryFile The created BinaryFile object
     */
    public function createBinaryFile( BinaryFileCreateStruct $binaryFileCreateStruct )
    {
        throw new \Exception( "@TODO: Implement." );
    }

    /**
     * Deletes the BinaryFile with $path
     *
     * @param \eZ\Publish\API\Repository\Values\IO\BinaryFile $binaryFile
     */
    public function deleteBinaryFile( BinaryFile $binaryFile )
    {
        throw new \Exception( "@TODO: Implement." );
    }

    /**
     * Loads the binary file with $id
     *
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException
     *
     * @param string $binaryFileid
     *
     * @return \eZ\Publish\API\Repository\Values\IO\BinaryFile
     */
    public function loadBinaryFile( $binaryFileId )
    {
        throw new \Exception( "@TODO: Implement." );
    }

    /**
     * Returns a read (mode: rb) file resource to the binary file identified by $path
     *
     * @param \eZ\Publish\API\Repository\Values\IO\BinaryFile $binaryFile
     *
     * @return resource
     */
    public function getFileInputStream( BinaryFile $binaryFile )
    {
        throw new \Exception( "@TODO: Implement." );
    }

    /**
     * Returns the content of the binary file
     *
     * @param \eZ\Publish\API\Repository\Values\IO\BinaryFile $binaryFile
     *
     * @return string
     */
    public function getFileContents( BinaryFile $binaryFile )
    {
        throw new \Exception( "@TODO: Implement." );
    }
}
