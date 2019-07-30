<?php

namespace Snowcap\Emarsys\Exception;


class ServerException extends \Exception
{
    protected $responseMessage = null;

    /**
     * Set the response message from the server
     *
     * @param string $message
     * @author David Fox <david@d3r.com>
     */
    public function setResponseMessage($message)
    {
        $this->responseMessage = $message;
    }

    /**
     * Return the response message set on this exception
     *
     * @return string
     * @author David Fox <david@d3r.com>
     */
    public function getResponseMessage()
    {
        return $this->responseMessage;
    }
}
