<?php
/**
 * GLTFSaveOption
 *
 * PHP version 5
 *
 * @category Class
 * @package  Aspose\ThreeD\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Aspose.3D Cloud API Reference
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.11-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Aspose\ThreeD\Cloud\Model;
use \Aspose\ThreeD\Cloud\ObjectSerializer;

/**
 * GLTFSaveOption Class Doc Comment
 *
 * @category Class
 * @package  Aspose\ThreeD\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GLTFSaveOption extends SaveOptions 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GLTFSaveOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pretty_print' => 'bool',
        'embed_assets' => 'bool',
        'use_common_materials' => 'bool',
        'flip_tex_coord_v' => 'bool',
        'buffer_file' => 'bool',
        'save_extras' => 'bool',
        'draco_compression' => 'bool',
        'file_content_type' => '\Aspose\ThreeD\Cloud\Model\FileContentType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pretty_print' => null,
        'embed_assets' => null,
        'use_common_materials' => null,
        'flip_tex_coord_v' => null,
        'buffer_file' => null,
        'save_extras' => null,
        'draco_compression' => null,
        'file_content_type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pretty_print' => 'PrettyPrint',
        'embed_assets' => 'EmbedAssets',
        'use_common_materials' => 'UseCommonMaterials',
        'flip_tex_coord_v' => 'FlipTexCoordV',
        'buffer_file' => 'BufferFile',
        'save_extras' => 'SaveExtras',
        'draco_compression' => 'DracoCompression',
        'file_content_type' => 'FileContentType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pretty_print' => 'setPrettyPrint',
        'embed_assets' => 'setEmbedAssets',
        'use_common_materials' => 'setUseCommonMaterials',
        'flip_tex_coord_v' => 'setFlipTexCoordV',
        'buffer_file' => 'setBufferFile',
        'save_extras' => 'setSaveExtras',
        'draco_compression' => 'setDracoCompression',
        'file_content_type' => 'setFileContentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pretty_print' => 'getPrettyPrint',
        'embed_assets' => 'getEmbedAssets',
        'use_common_materials' => 'getUseCommonMaterials',
        'flip_tex_coord_v' => 'getFlipTexCoordV',
        'buffer_file' => 'getBufferFile',
        'save_extras' => 'getSaveExtras',
        'draco_compression' => 'getDracoCompression',
        'file_content_type' => 'getFileContentType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['pretty_print'] = isset($data['pretty_print']) ? $data['pretty_print'] : null;
        $this->container['embed_assets'] = isset($data['embed_assets']) ? $data['embed_assets'] : null;
        $this->container['use_common_materials'] = isset($data['use_common_materials']) ? $data['use_common_materials'] : null;
        $this->container['flip_tex_coord_v'] = isset($data['flip_tex_coord_v']) ? $data['flip_tex_coord_v'] : null;
        $this->container['buffer_file'] = isset($data['buffer_file']) ? $data['buffer_file'] : null;
        $this->container['save_extras'] = isset($data['save_extras']) ? $data['save_extras'] : null;
        $this->container['draco_compression'] = isset($data['draco_compression']) ? $data['draco_compression'] : null;
        $this->container['file_content_type'] = isset($data['file_content_type']) ? $data['file_content_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
        if (!parent::valid()) {
            return false;
        }

        return true;
    }


    /**
     * Gets pretty_print
     *
     * @return bool
     */
    public function getPrettyPrint()
    {
        return $this->container['pretty_print'];
    }

    /**
     * Sets pretty_print
     *
     * @param bool $pretty_print The JSON content of GLTF file is indented for human reading, default value is false.
     *
     * @return $this
     */
    public function setPrettyPrint($pretty_print)
    {
        $this->container['pretty_print'] = $pretty_print;

        return $this;
    }

    /**
     * Gets embed_assets
     *
     * @return bool
     */
    public function getEmbedAssets()
    {
        return $this->container['embed_assets'];
    }

    /**
     * Sets embed_assets
     *
     * @param bool $embed_assets Embed all external assets as base64 into single file in ASCII mode, default value is false.
     *
     * @return $this
     */
    public function setEmbedAssets($embed_assets)
    {
        $this->container['embed_assets'] = $embed_assets;

        return $this;
    }

    /**
     * Gets use_common_materials
     *
     * @return bool
     */
    public function getUseCommonMaterials()
    {
        return $this->container['use_common_materials'];
    }

    /**
     * Sets use_common_materials
     *
     * @param bool $use_common_materials Serialize materials using KHR common material extensions, default value is false. Set this to false will cause Aspose.3D export a set of vertex/fragment shader if Aspose.ThreeD.Formats.GLTFSaveOptions.ExportShaders
     *
     * @return $this
     */
    public function setUseCommonMaterials($use_common_materials)
    {
        $this->container['use_common_materials'] = $use_common_materials;

        return $this;
    }

    /**
     * Gets flip_tex_coord_v
     *
     * @return bool
     */
    public function getFlipTexCoordV()
    {
        return $this->container['flip_tex_coord_v'];
    }

    /**
     * Sets flip_tex_coord_v
     *
     * @param bool $flip_tex_coord_v Flip texture coordinate v(t) component, default value is true.
     *
     * @return $this
     */
    public function setFlipTexCoordV($flip_tex_coord_v)
    {
        $this->container['flip_tex_coord_v'] = $flip_tex_coord_v;

        return $this;
    }

    /**
     * Gets buffer_file
     *
     * @return bool
     */
    public function getBufferFile()
    {
        return $this->container['buffer_file'];
    }

    /**
     * Sets buffer_file
     *
     * @param bool $buffer_file The file name of the external buffer file used to store binary data. If this file is not specified, Aspose.3D will generate a name for you. This is ignored when export glTF in binary mode.
     *
     * @return $this
     */
    public function setBufferFile($buffer_file)
    {
        $this->container['buffer_file'] = $buffer_file;

        return $this;
    }

    /**
     * Gets save_extras
     *
     * @return bool
     */
    public function getSaveExtras()
    {
        return $this->container['save_extras'];
    }

    /**
     * Sets save_extras
     *
     * @param bool $save_extras Save scene object's dynamic properties into 'extra' fields in the generated glTF file. This is useful to provide application-specific data. Default value is false..
     *
     * @return $this
     */
    public function setSaveExtras($save_extras)
    {
        $this->container['save_extras'] = $save_extras;

        return $this;
    }

    /**
     * Gets draco_compression
     *
     * @return bool
     */
    public function getDracoCompression()
    {
        return $this->container['draco_compression'];
    }

    /**
     * Sets draco_compression
     *
     * @param bool $draco_compression Gets or sets whether to enable draco compression.
     *
     * @return $this
     */
    public function setDracoCompression($draco_compression)
    {
        $this->container['draco_compression'] = $draco_compression;

        return $this;
    }

    /**
     * Gets file_content_type
     *
     * @return \Aspose\ThreeD\Cloud\Model\FileContentType
     */
    public function getFileContentType()
    {
        return $this->container['file_content_type'];
    }

    /**
     * Sets file_content_type
     *
     * @param \Aspose\ThreeD\Cloud\Model\FileContentType $file_content_type Gets or sets  of the FileContent type.
     *
     * @return $this
     */
    public function setFileContentType($file_content_type)
    {
        $this->container['file_content_type'] = $file_content_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


