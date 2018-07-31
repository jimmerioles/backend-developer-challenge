<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class GreetingCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    /**
     * Get additional data that should be returned with the resource array.
     *
     * @param \Illuminate\Http\Request  $request
     * @return array
     */
    public function with($request)
    {
        return [
            'meta' => [
                'author' => 'Jim Merioles',
                'email' => 'jimwisleymerioles@gmail.com',
                'github' => 'https://github.com/jimmerioles',
                'twitter' => 'https://twitter.com/jimmerioles',
                'linkedin' => 'https://linkedin.com/in/jimwisleymerioles',
                'message' => 'Thank you for checking out the source! :) #HireMe!'
            ],
        ];
    }
}
