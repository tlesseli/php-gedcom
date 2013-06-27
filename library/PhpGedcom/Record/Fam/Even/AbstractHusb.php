<?php

namespace PhpGedcom\Record\Fam\Even;

use PhpGedcom\Record;

/**
 * Class AbstractHusb
 * @package PhpGedcom\Record\Fam\Even
 */
abstract class AbstractHusb extends Record
{
    /**
     * @var string
     */
    protected $age;

    /**
     * @param string $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }
}
