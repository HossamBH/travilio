<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\HotelRequest;
use App\Http\Resources\ProviderResource;

class HotelController extends Controller
{
    /**
     * Get All Providers with the related hotels.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(HotelRequest $request)
    {
        $hotels = Provider::orderBy('name')->with('hotels', function($querry) use($request){
            $querry->where('city_id', $request->city_id)->orderBy('rate', 'DESC');
        })->get();

        return successResponse(ProviderResource::collection($hotels));

    }
}
