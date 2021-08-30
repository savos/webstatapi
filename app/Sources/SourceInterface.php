<?php

Interface SourceInterface
{
    public function getData($resource, $filter);

    public function addData($resource, $value);

}
