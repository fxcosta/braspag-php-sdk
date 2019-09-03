<?php

namespace Braspag\API;

use Braspag\API\BraspagSerializable;

class Attachments implements BraspagSerializable
{
    /**
     * @var String
     */
    private $attachmentType;

    /**
     * @var File
     */
    private $file;

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->attachmentType = isset($data->attachmentType) ? $data->attachmentType : null;

        if (isset($data->File)) {
            $this->file = new File();
            $this->file->populate($data->File);
        }
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function setAttachmentType($attachmentType)
    {
        $this->attachmentType = $attachmentType;
    }

    public function getAttachmentType()
    {
        return $this->attachmentType;
    }

    public function setFile(File $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getFile()
    {
        return $this->file;
    }
}
