<?php
/**
 * Torus
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

use \ArrayAccess;
use \Aspose\ThreeD\Cloud\ObjectSerializer;

/**
 * Torus Class Doc Comment
 *
 * @category Class
 * @description The Torus Entity class
 * @package  Aspose\ThreeD\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Torus implements  ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Torus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'radius' => 'double',
        'tube' => 'double',
        'radial_segments' => 'int',
        'tubular_segments' => 'int',
        'arc' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'radius' => 'double',
        'tube' => 'double',
        'radial_segments' => 'int32',
        'tubular_segments' => 'int32',
        'arc' => 'double'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'Name',
        'radius' => 'Radius',
        'tube' => 'Tube',
        'radial_segments' => 'RadialSegments',
        'tubular_segments' => 'TubularSegments',
        'arc' => 'Arc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'radius' => 'setRadius',
        'tube' => 'setTube',
        'radial_segments' => 'setRadialSegments',
        'tubular_segments' => 'setTubularSegments',
        'arc' => 'setArc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'radius' => 'getRadius',
        'tube' => 'getTube',
        'radial_segments' => 'getRadialSegments',
        'tubular_segments' => 'getTubularSegments',
        'arc' => 'getArc'
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
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['radius'] = isset($data['radius']) ? $data['radius'] : null;
        $this->container['tube'] = isset($data['tube']) ? $data['tube'] : null;
        $this->container['radial_segments'] = isset($data['radial_segments']) ? $data['radial_segments'] : null;
        $this->container['tubular_segments'] = isset($data['tubular_segments']) ? $data['tubular_segments'] : null;
        $this->container['arc'] = isset($data['arc']) ? $data['arc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['radius'] === null) {
            $invalidProperties[] = "'radius' can't be null";
        }
        if ($this->container['tube'] === null) {
            $invalidProperties[] = "'tube' can't be null";
        }
        if ($this->container['radial_segments'] === null) {
            $invalidProperties[] = "'radial_segments' can't be null";
        }
        if ($this->container['tubular_segments'] === null) {
            $invalidProperties[] = "'tubular_segments' can't be null";
        }
        if ($this->container['arc'] === null) {
            $invalidProperties[] = "'arc' can't be null";
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

        if ($this->container['radius'] === null) {
            return false;
        }
        if ($this->container['tube'] === null) {
            return false;
        }
        if ($this->container['radial_segments'] === null) {
            return false;
        }
        if ($this->container['tubular_segments'] === null) {
            return false;
        }
        if ($this->container['arc'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Gets or sets the Name of the torus.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets radius
     *
     * @return double
     */
    public function getRadius()
    {
        return $this->container['radius'];
    }

    /**
     * Sets radius
     *
     * @param double $radius Gets or sets the radius of the torus.
     *
     * @return $this
     */
    public function setRadius($radius)
    {
        $this->container['radius'] = $radius;

        return $this;
    }

    /**
     * Gets tube
     *
     * @return double
     */
    public function getTube()
    {
        return $this->container['tube'];
    }

    /**
     * Sets tube
     *
     * @param double $tube Gets or sets the radius of the tube.
     *
     * @return $this
     */
    public function setTube($tube)
    {
        $this->container['tube'] = $tube;

        return $this;
    }

    /**
     * Gets radial_segments
     *
     * @return int
     */
    public function getRadialSegments()
    {
        return $this->container['radial_segments'];
    }

    /**
     * Sets radial_segments
     *
     * @param int $radial_segments Gets or sets the radial segments.
     *
     * @return $this
     */
    public function setRadialSegments($radial_segments)
    {
        $this->container['radial_segments'] = $radial_segments;

        return $this;
    }

    /**
     * Gets tubular_segments
     *
     * @return int
     */
    public function getTubularSegments()
    {
        return $this->container['tubular_segments'];
    }

    /**
     * Sets tubular_segments
     *
     * @param int $tubular_segments Gets or sets the tubular segments.
     *
     * @return $this
     */
    public function setTubularSegments($tubular_segments)
    {
        $this->container['tubular_segments'] = $tubular_segments;

        return $this;
    }

    /**
     * Gets arc
     *
     * @return double
     */
    public function getArc()
    {
        return $this->container['arc'];
    }

    /**
     * Sets arc
     *
     * @param double $arc Gets or sets the arc.
     *
     * @return $this
     */
    public function setArc($arc)
    {
        $this->container['arc'] = $arc;

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


