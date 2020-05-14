<?php
/**
 * U3DSaveOption
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
 * U3DSaveOption Class Doc Comment
 *
 * @category Class
 * @package  Aspose\ThreeD\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class U3DSaveOption extends SaveOptions 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'U3DSaveOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'flip_coordinate_system' => 'bool',
        'mesh_compression' => 'bool',
        'export_normals' => 'bool',
        'export_texture_coordinates' => 'bool',
        'export_vertex_diffuse' => 'bool',
        'export_vertex_specular' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'flip_coordinate_system' => null,
        'mesh_compression' => null,
        'export_normals' => null,
        'export_texture_coordinates' => null,
        'export_vertex_diffuse' => null,
        'export_vertex_specular' => null
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
        'flip_coordinate_system' => 'FlipCoordinateSystem',
        'mesh_compression' => 'MeshCompression',
        'export_normals' => 'ExportNormals',
        'export_texture_coordinates' => 'ExportTextureCoordinates',
        'export_vertex_diffuse' => 'ExportVertexDiffuse',
        'export_vertex_specular' => 'ExportVertexSpecular'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'flip_coordinate_system' => 'setFlipCoordinateSystem',
        'mesh_compression' => 'setMeshCompression',
        'export_normals' => 'setExportNormals',
        'export_texture_coordinates' => 'setExportTextureCoordinates',
        'export_vertex_diffuse' => 'setExportVertexDiffuse',
        'export_vertex_specular' => 'setExportVertexSpecular'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'flip_coordinate_system' => 'getFlipCoordinateSystem',
        'mesh_compression' => 'getMeshCompression',
        'export_normals' => 'getExportNormals',
        'export_texture_coordinates' => 'getExportTextureCoordinates',
        'export_vertex_diffuse' => 'getExportVertexDiffuse',
        'export_vertex_specular' => 'getExportVertexSpecular'
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

        $this->container['flip_coordinate_system'] = isset($data['flip_coordinate_system']) ? $data['flip_coordinate_system'] : null;
        $this->container['mesh_compression'] = isset($data['mesh_compression']) ? $data['mesh_compression'] : null;
        $this->container['export_normals'] = isset($data['export_normals']) ? $data['export_normals'] : null;
        $this->container['export_texture_coordinates'] = isset($data['export_texture_coordinates']) ? $data['export_texture_coordinates'] : null;
        $this->container['export_vertex_diffuse'] = isset($data['export_vertex_diffuse']) ? $data['export_vertex_diffuse'] : null;
        $this->container['export_vertex_specular'] = isset($data['export_vertex_specular']) ? $data['export_vertex_specular'] : null;
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
     * Gets flip_coordinate_system
     *
     * @return bool
     */
    public function getFlipCoordinateSystem()
    {
        return $this->container['flip_coordinate_system'];
    }

    /**
     * Sets flip_coordinate_system
     *
     * @param bool $flip_coordinate_system Gets or sets whether flip coordinate system of control points/normal during importing/exporting.
     *
     * @return $this
     */
    public function setFlipCoordinateSystem($flip_coordinate_system)
    {
        $this->container['flip_coordinate_system'] = $flip_coordinate_system;

        return $this;
    }

    /**
     * Gets mesh_compression
     *
     * @return bool
     */
    public function getMeshCompression()
    {
        return $this->container['mesh_compression'];
    }

    /**
     * Sets mesh_compression
     *
     * @param bool $mesh_compression Gets or sets whether to enable mesh data compression.
     *
     * @return $this
     */
    public function setMeshCompression($mesh_compression)
    {
        $this->container['mesh_compression'] = $mesh_compression;

        return $this;
    }

    /**
     * Gets export_normals
     *
     * @return bool
     */
    public function getExportNormals()
    {
        return $this->container['export_normals'];
    }

    /**
     * Sets export_normals
     *
     * @param bool $export_normals Gets or sets whether to export normal data.
     *
     * @return $this
     */
    public function setExportNormals($export_normals)
    {
        $this->container['export_normals'] = $export_normals;

        return $this;
    }

    /**
     * Gets export_texture_coordinates
     *
     * @return bool
     */
    public function getExportTextureCoordinates()
    {
        return $this->container['export_texture_coordinates'];
    }

    /**
     * Sets export_texture_coordinates
     *
     * @param bool $export_texture_coordinates Gets or sets whether to export texture coordinates.
     *
     * @return $this
     */
    public function setExportTextureCoordinates($export_texture_coordinates)
    {
        $this->container['export_texture_coordinates'] = $export_texture_coordinates;

        return $this;
    }

    /**
     * Gets export_vertex_diffuse
     *
     * @return bool
     */
    public function getExportVertexDiffuse()
    {
        return $this->container['export_vertex_diffuse'];
    }

    /**
     * Sets export_vertex_diffuse
     *
     * @param bool $export_vertex_diffuse Gets or sets whether to export vertex's diffuse color.
     *
     * @return $this
     */
    public function setExportVertexDiffuse($export_vertex_diffuse)
    {
        $this->container['export_vertex_diffuse'] = $export_vertex_diffuse;

        return $this;
    }

    /**
     * Gets export_vertex_specular
     *
     * @return bool
     */
    public function getExportVertexSpecular()
    {
        return $this->container['export_vertex_specular'];
    }

    /**
     * Sets export_vertex_specular
     *
     * @param bool $export_vertex_specular Gets or sets whether to export vertex' specular color.
     *
     * @return $this
     */
    public function setExportVertexSpecular($export_vertex_specular)
    {
        $this->container['export_vertex_specular'] = $export_vertex_specular;

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

