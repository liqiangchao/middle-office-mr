<?php

namespace Gupo\MiddleOfficeMr\App;


use Gupo\MiddleOffice\Clients\Client;
use Gupo\MiddleOffice\Config\Config;
use Gupo\MiddleOffice\Exception\ClientException;
use Gupo\MiddleOffice\VO\RequestHeader;
use GuzzleHttp\Exception\GuzzleException;

class MrCenterClient extends Client
{

    public function __construct()
    {
        parent::__construct(new Config());
    }


    /**
     * 获得检验检查项目列表
     * @param $body
     * @param $endpoint
     * @param $headerEx
     * @return mixed
     * @throws ClientException
     * @throws GuzzleException
     */
    public function getProjectList($body, $endpoint ,$headerEx = [])
    {
        $header = new RequestHeader($this->config, $body, $this->config->appId);

        return $this->callApiPost($header->getHeader($headerEx), $body, $endpoint . '/openapi/project/list');
    }

}