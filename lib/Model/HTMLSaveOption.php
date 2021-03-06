<?php
/**
 * HTMLSaveOption
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
 * HTMLSaveOption Class Doc Comment
 *
 * @category Class
 * @package  Aspose\ThreeD\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HTMLSaveOption extends SaveOptions 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HTMLSaveOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'show_grid' => 'bool',
        'show_rulers' => 'bool',
        'show_ui' => 'bool',
        'orientation_box' => 'bool',
        'up_vector' => 'string',
        'far_plane' => 'double',
        'near_plane' => 'double',
        'look_at' => '\Aspose\ThreeD\Cloud\Model\Vector3',
        'camera_position' => '\Aspose\ThreeD\Cloud\Model\Vector3',
        'field_of_view' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'show_grid' => null,
        'show_rulers' => null,
        'show_ui' => null,
        'orientation_box' => null,
        'up_vector' => null,
        'far_plane' => 'double',
        'near_plane' => 'double',
        'look_at' => null,
        'camera_position' => null,
        'field_of_view' => 'double'
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
        'show_grid' => 'ShowGrid',
        'show_rulers' => 'ShowRulers',
        'show_ui' => 'ShowUI',
        'orientation_box' => 'OrientationBox',
        'up_vector' => 'UpVector',
        'far_plane' => 'FarPlane',
        'near_plane' => 'NearPlane',
        'look_at' => 'LookAt',
        'camera_position' => 'CameraPosition',
        'field_of_view' => 'FieldOfView'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'show_grid' => 'setShowGrid',
        'show_rulers' => 'setShowRulers',
        'show_ui' => 'setShowUi',
        'orientation_box' => 'setOrientationBox',
        'up_vector' => 'setUpVector',
        'far_plane' => 'setFarPlane',
        'near_plane' => 'setNearPlane',
        'look_at' => 'setLookAt',
        'camera_position' => 'setCameraPosition',
        'field_of_view' => 'setFieldOfView'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'show_grid' => 'getShowGrid',
        'show_rulers' => 'getShowRulers',
        'show_ui' => 'getShowUi',
        'orientation_box' => 'getOrientationBox',
        'up_vector' => 'getUpVector',
        'far_plane' => 'getFarPlane',
        'near_plane' => 'getNearPlane',
        'look_at' => 'getLookAt',
        'camera_position' => 'getCameraPosition',
        'field_of_view' => 'getFieldOfView'
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

        $this->container['show_grid'] = isset($data['show_grid']) ? $data['show_grid'] : null;
        $this->container['show_rulers'] = isset($data['show_rulers']) ? $data['show_rulers'] : null;
        $this->container['show_ui'] = isset($data['show_ui']) ? $data['show_ui'] : null;
        $this->container['orientation_box'] = isset($data['orientation_box']) ? $data['orientation_box'] : null;
        $this->container['up_vector'] = isset($data['up_vector']) ? $data['up_vector'] : null;
        $this->container['far_plane'] = isset($data['far_plane']) ? $data['far_plane'] : null;
        $this->container['near_plane'] = isset($data['near_plane']) ? $data['near_plane'] : null;
        $this->container['look_at'] = isset($data['look_at']) ? $data['look_at'] : null;
        $this->container['camera_position'] = isset($data['camera_position']) ? $data['camera_position'] : null;
        $this->container['field_of_view'] = isset($data['field_of_view']) ? $data['field_of_view'] : null;
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
     * Gets show_grid
     *
     * @return bool
     */
    public function getShowGrid()
    {
        return $this->container['show_grid'];
    }

    /**
     * Sets show_grid
     *
     * @param bool $show_grid Display a grid in the scene. Default value is true.
     *
     * @return $this
     */
    public function setShowGrid($show_grid)
    {
        $this->container['show_grid'] = $show_grid;

        return $this;
    }

    /**
     * Gets show_rulers
     *
     * @return bool
     */
    public function getShowRulers()
    {
        return $this->container['show_rulers'];
    }

    /**
     * Sets show_rulers
     *
     * @param bool $show_rulers Display rulers of x/y/z axises in the scene to measure the model. Default value is false
     *
     * @return $this
     */
    public function setShowRulers($show_rulers)
    {
        $this->container['show_rulers'] = $show_rulers;

        return $this;
    }

    /**
     * Gets show_ui
     *
     * @return bool
     */
    public function getShowUi()
    {
        return $this->container['show_ui'];
    }

    /**
     * Sets show_ui
     *
     * @param bool $show_ui Display a simple UI in the scene. Default value is true
     *
     * @return $this
     */
    public function setShowUi($show_ui)
    {
        $this->container['show_ui'] = $show_ui;

        return $this;
    }

    /**
     * Gets orientation_box
     *
     * @return bool
     */
    public function getOrientationBox()
    {
        return $this->container['orientation_box'];
    }

    /**
     * Sets orientation_box
     *
     * @param bool $orientation_box Display a orientation box. Default value is true.
     *
     * @return $this
     */
    public function setOrientationBox($orientation_box)
    {
        $this->container['orientation_box'] = $orientation_box;

        return $this;
    }

    /**
     * Gets up_vector
     *
     * @return string
     */
    public function getUpVector()
    {
        return $this->container['up_vector'];
    }

    /**
     * Sets up_vector
     *
     * @param string $up_vector Gets or sets the up vector, value can be \"x\"/\"y\"/\"z\", default value is \"y\".
     *
     * @return $this
     */
    public function setUpVector($up_vector)
    {
        $this->container['up_vector'] = $up_vector;

        return $this;
    }

    /**
     * Gets far_plane
     *
     * @return double
     */
    public function getFarPlane()
    {
        return $this->container['far_plane'];
    }

    /**
     * Sets far_plane
     *
     * @param double $far_plane Gets or sets the far plane of the camera, default value is 1000
     *
     * @return $this
     */
    public function setFarPlane($far_plane)
    {
        $this->container['far_plane'] = $far_plane;

        return $this;
    }

    /**
     * Gets near_plane
     *
     * @return double
     */
    public function getNearPlane()
    {
        return $this->container['near_plane'];
    }

    /**
     * Sets near_plane
     *
     * @param double $near_plane Gets or sets the near plane of the camera, default value is 1
     *
     * @return $this
     */
    public function setNearPlane($near_plane)
    {
        $this->container['near_plane'] = $near_plane;

        return $this;
    }

    /**
     * Gets look_at
     *
     * @return \Aspose\ThreeD\Cloud\Model\Vector3
     */
    public function getLookAt()
    {
        return $this->container['look_at'];
    }

    /**
     * Sets look_at
     *
     * @param \Aspose\ThreeD\Cloud\Model\Vector3 $look_at Gets or sets the default look at position, default value is (0, 0, 0)
     *
     * @return $this
     */
    public function setLookAt($look_at)
    {
        $this->container['look_at'] = $look_at;

        return $this;
    }

    /**
     * Gets camera_position
     *
     * @return \Aspose\ThreeD\Cloud\Model\Vector3
     */
    public function getCameraPosition()
    {
        return $this->container['camera_position'];
    }

    /**
     * Sets camera_position
     *
     * @param \Aspose\ThreeD\Cloud\Model\Vector3 $camera_position Gets or sets the initial position of the camera, default value is (10, 10, 10)
     *
     * @return $this
     */
    public function setCameraPosition($camera_position)
    {
        $this->container['camera_position'] = $camera_position;

        return $this;
    }

    /**
     * Gets field_of_view
     *
     * @return double
     */
    public function getFieldOfView()
    {
        return $this->container['field_of_view'];
    }

    /**
     * Sets field_of_view
     *
     * @param double $field_of_view Gets or sets the field of the view, default value is 45, measured in degree
     *
     * @return $this
     */
    public function setFieldOfView($field_of_view)
    {
        $this->container['field_of_view'] = $field_of_view;

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


