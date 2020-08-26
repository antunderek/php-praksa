<?php

class SearchRequest
{
    protected $query;
    protected $limit;

    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }

    public function setLimit($limit = 100)
    {
        $this->limit = $limit;
        return $this;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function getLimit()
    {
        return $this->limit;
    }
}

class SearchService
{
    public function search(SearchRequest $request)
    {
    }
}

$service = new SearchService;
$request = new SearchRequest;

$request->setQuery('oop')->setLimit(50);
var_dump($request);
echo $request->getQuery();
echo $request->getLimit();
