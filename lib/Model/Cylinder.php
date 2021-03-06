<?php
/**
 * Cylinder
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
 * Cylinder Class Doc Comment
 *
 * @category Class
 * @package  Aspose\ThreeD\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Cylinder implements  ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Cylinder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'radius_top' => 'double',
        'radius_bottom' => 'double',
        'height' => 'double',
        'radial_segments' => 'int',
        'height_segments' => 'int',
        'open_ended' => 'bool',
        'theta_start' => 'double',
        'theta_length' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'radius_top' => 'double',
        'radius_bottom' => 'double',
        'height' => 'double',
        'radial_segments' => 'int32',
        'height_segments' => 'int32',
        'open_ended' => null,
        'theta_start' => 'double',
        'theta_length' => 'double'
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
        'radius_top' => 'RadiusTop',
        'radius_bottom' => 'RadiusBottom',
        'height' => 'Height',
        'radial_segments' => 'RadialSegments',
        'height_segments' => 'HeightSegments',
        'open_ended' => 'OpenEnded',
        'theta_start' => 'ThetaStart',
        'theta_length' => 'ThetaLength'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'radius_top' => 'setRadiusTop',
        'radius_bottom' => 'setRadiusBottom',
        'height' => 'setHeight',
        'radial_segments' => 'setRadialSegments',
        'height_segments' => 'setHeightSegments',
        'open_ended' => 'setOpenEnded',
        'theta_start' => 'setThetaStart',
        'theta_length' => 'setThetaLength'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'radius_top' => 'getRadiusTop',
        'radius_bottom' => 'getRadiusBottom',
        'height' => 'getHeight',
        'radial_segments' => 'getRadialSegments',
        'height_segments' => 'getHeightSegments',
        'open_ended' => 'getOpenEnded',
        'theta_start' => 'getThetaStart',
        'theta_length' => 'getThetaLength'
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
        $this->container['radius_top'] = isset($data['radius_top']) ? $data['radius_top'] : null;
        $this->container['radius_bottom'] = isset($data['radius_bottom']) ? $data['radius_bottom'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['radial_segments'] = isset($data['radial_segments']) ? $data['radial_segments'] : null;
        $this->container['height_segments'] = isset($data['height_segments']) ? $data['height_segments'] : null;
        $this->container['open_ended'] = isset($data['open_ended']) ? $data['open_ended'] : null;
        $this->container['theta_start'] = isset($data['theta_start']) ? $data['theta_start'] : null;
        $this->container['theta_length'] = isset($data['theta_length']) ? $data['theta_length'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['radius_top'] === null) {
            $invalidProperties[] = "'radius_top' can't be null";
        }
        if ($this->container['radius_bottom'] === null) {
            $invalidProperties[] = "'radius_bottom' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['radial_segments'] === null) {
            $invalidProperties[] = "'radial_segments' can't be null";
        }
        if ($this->container['height_segments'] === null) {
            $invalidProperties[] = "'height_segments' can't be null";
        }
        if ($this->container['open_ended'] === null) {
            $invalidProperties[] = "'open_ended' can't be null";
        }
        if ($this->container['theta_start'] === null) {
            $invalidProperties[] = "'theta_start' can't be null";
        }
        if ($this->container['theta_length'] === null) {
            $invalidProperties[] = "'theta_length' can't be null";
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

        if ($this->container['radius_top'] === null) {
            return false;
        }
        if ($this->container['radius_bottom'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['radial_segments'] === null) {
            return false;
        }
        if ($this->container['height_segments'] === null) {
            return false;
        }
        if ($this->container['open_ended'] === null) {
            return false;
        }
        if ($this->container['theta_start'] === null) {
            return false;
        }
        if ($this->container['theta_length'] === null) {
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
     * @param string $name Gets or sets the name of the cylinder
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets radius_top
     *
     * @return double
     */
    public function getRadiusTop()
    {
        return $this->container['radius_top'];
    }

    /**
     * Sets radius_top
     *
     * @param double $radius_top Gets or sets the radius of cylinder's top cap.
     *
     * @return $this
     */
    public function setRadiusTop($radius_top)
    {
        $this->container['radius_top'] = $radius_top;

        return $this;
    }

    /**
     * Gets radius_bottom
     *
     * @return double
     */
    public function getRadiusBottom()
    {
        return $this->container['radius_bottom'];
    }

    /**
     * Sets radius_bottom
     *
     * @param double $radius_bottom Gets or sets the radius bottoof cylinder's bottom cap.
     *
     * @return $this
     */
    public function setRadiusBottom($radius_bottom)
    {
        $this->container['radius_bottom'] = $radius_bottom;

        return $this;
    }

    /**
     * Gets height
     *
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param double $height Gets or sets the height of the cylinder.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

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
     * Gets height_segments
     *
     * @return int
     */
    public function getHeightSegments()
    {
        return $this->container['height_segments'];
    }

    /**
     * Sets height_segments
     *
     * @param int $height_segments Gets or sets the height segments.
     *
     * @return $this
     */
    public function setHeightSegments($height_segments)
    {
        $this->container['height_segments'] = $height_segments;

        return $this;
    }

    /**
     * Gets open_ended
     *
     * @return bool
     */
    public function getOpenEnded()
    {
        return $this->container['open_ended'];
    }

    /**
     * Sets open_ended
     *
     * @param bool $open_ended Gets or sets a value indicating whether this Aspose.ThreeD.Entities.Cylinder open ended. The default value is false.
     *
     * @return $this
     */
    public function setOpenEnded($open_ended)
    {
        $this->container['open_ended'] = $open_ended;

        return $this;
    }

    /**
     * Gets theta_start
     *
     * @return double
     */
    public function getThetaStart()
    {
        return $this->container['theta_start'];
    }

    /**
     * Sets theta_start
     *
     * @param double $theta_start Gets or sets the theta start. The default value is 0.
     *
     * @return $this
     */
    public function setThetaStart($theta_start)
    {
        $this->container['theta_start'] = $theta_start;

        return $this;
    }

    /**
     * Gets theta_length
     *
     * @return double
     */
    public function getThetaLength()
    {
        return $this->container['theta_length'];
    }

    /**
     * Sets theta_length
     *
     * @param double $theta_length Gets or sets the length of the theta. The default value is 2p.
     *
     * @return $this
     */
    public function setThetaLength($theta_length)
    {
        $this->container['theta_length'] = $theta_length;

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


