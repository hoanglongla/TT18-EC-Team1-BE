<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ModelCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request
     * @return array
     */
    //public $collects = 'App\Http\Resources\User';
/*
 * "links": {
        "first": "http://econail.localhost/api/g/user?page=1",
        "last": "http://econail.localhost/api/g/user?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://econail.localhost/api/g/user?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://econail.localhost/api/g/user",
        "per_page": 10,
        "to": 3,
        "total": 3
    }
 */
    public function toArray($request)
    {
//        dd( [
//            'current_page' => $this->currentPage(),
//            'first_page_url' => $this->url(1),
//            'from' => $this->firstItem(),
//            'last_page' => $this->lastPage(),
//            'last_page_url' => $this->url($this->lastPage()),
//            'links' => $this->linkCollection()->toArray(),
//            'next_page_url' => $this->nextPageUrl(),
//            'path' => $this->path(),
//            'per_page' => $this->perPage(),
//            'prev_page_url' => $this->previousPageUrl(),
//            'to' => $this->lastItem(),
//            'total' => $this->total(),
//        ]);
        return [
            "data" => $this->collection,
            "links" => [
                "first" => $this->url(1),
                "last" => $this->url($this->lastPage()),
                "next" => $this->nextPageUrl(),
                "prev" => $this->previousPageUrl()
            ],
            "meta" => [
                "current_page" => $this->currentPage(),
                "from" => $this->firstItem(),
                "last_page" => $this->lastPage(),
                "path" => $this->path(),
                "per_page" => $this->perPage(),
                "to" => $this->lastItem(),
                "total" => $this->total(),
                "links" => $this->linkCollection()->toArray()
            ]
        ];
    }

    public function with($request)
    {
        return [
            'meta' => [
                'key' => 'value',
            ],
        ];
    }
}
