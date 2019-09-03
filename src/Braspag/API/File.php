<?php

namespace Braspag\API;

use Braspag\API\BraspagSerializable;

class File implements BraspagSerializable
{
    /**
     * @var String
     */
    private $name;

    /**
     * @var String
     */
    private $fileType;

    /**
     * @var String
     */
    private $data;

    /**
    * @param \stdClass $data
    */
    public function populate(\stdClass $data)
    {
        $this->name = isset($data->name) ? $data->name : null;
        $this->fileType = isset($data->fileType) ? $data->fileType : null;
        $this->data = isset($data->data) ? $data->data : null;
    }

    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }

    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setFileType($fileType): self
    {
        $this->fileType = $fileType;

        return $this;
    }

    public function getFileType()
    {
        return $this->fileType;
    }

    public function setData($data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }
}
