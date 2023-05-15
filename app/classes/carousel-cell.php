<?php
// Needed for each section of the info carousel on the homepage

class cell{
    public $heading;
    public $subHeading;
    public $copy;
    public $image;
    public $imageAlt;

    public function __construct($props = [])
    {
        // $this: refers to the currently targeted object's respective property or method
        // -> arrow operator:Says to target the property belonging to the object stated beforehand
        // Null coalescing: In this scenario, the associated property is checked for a null value. If null, uses the value in "" instead.
        $this->heading = $props["heading"] ?? "";
        $this->subHeading = $props["heading"] ?? "";

        $this->copy = $props["copy"] ?? "";

        $this->image = $props["image"] ?? "";
        $this->imageAlt = $props["imageAlt"] ?? "";
    }
}

?>