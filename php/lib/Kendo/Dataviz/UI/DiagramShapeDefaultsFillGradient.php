<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeDefaultsFillGradient extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The type of the gradient. The supported values are: linear or radial.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsFillGradient
    */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

    /**
    * The center of the radial gradient.The coordinates are relative to the shape-bounding box. For example, [0, 0] is top left and [1, 1] is bottom right.
    * @param array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsFillGradient
    */
    public function center($value) {
        return $this->setProperty('center', $value);
    }

    /**
    * The radius of the radial gradient relative to the shape bounding box.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsFillGradient
    */
    public function radius($value) {
        return $this->setProperty('radius', $value);
    }

    /**
    * The start point of the linear gradient.Coordinates are relative to the shape bounding box. For example, [0, 0] is top left and [1, 1] is bottom right.
    * @param array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsFillGradient
    */
    public function start($value) {
        return $this->setProperty('start', $value);
    }

    /**
    * The end point of the linear gradient.Coordinates are relative to the shape bounding box. For example, [0, 0] is top left and [1, 1] is bottom right.
    * @param array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsFillGradient
    */
    public function end($value) {
        return $this->setProperty('end', $value);
    }

    /**
    * Adds DiagramShapeDefaultsFillGradientStop to the DiagramShapeDefaultsFillGradient.
    * @param \Kendo\Dataviz\UI\DiagramShapeDefaultsFillGradientStop|array,... $value one or more DiagramShapeDefaultsFillGradientStop to add.
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsFillGradient
    */
    public function addStop($value) {
        return $this->add('stops', func_get_args());
    }

//<< Properties
}

?>
