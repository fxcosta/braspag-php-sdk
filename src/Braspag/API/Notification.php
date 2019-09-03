<?php

namespace Braspag\API;

use Braspag\API\BraspagSerializable;

class Notification implements BraspagSerializable
{
    /**
     * @var String
     */
    private $url;

    /**
     * @var array
     */
    private $headers;

    /**
    * @param \stdClass $data
    */
    public function populate(\stdClass $data)
    {
        $this->url = isset($data->url) ? $data->url : null;
        $this->headers = isset($data->headers) ? $data->headers : null;
    }

    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }

    public function setUrl($url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}
