<?php

namespace App\Http\Resources;

use DateTime;
use Illuminate\Http\Resources\Json\JsonResource;
use PhpParser\Node\Stmt\Foreach_;

class HotelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // get the number of days between the start date and the end date
        $startDate = new DateTime($request->dateFrom);
        $endDate = new DateTime($request->dateTo);
        $days = $startDate->diff($endDate)->d;
        $totalPrice = $this->pricePerDay * $days * $request->adults;

        // sort the hotels accourding to the provider name
        if($this->provider->name == 'A'){
            return [
                'Hotel' => $this->name,
                'Rate' => $this->rate,
                'Fare' => $totalPrice,
                'roomAmenities' => $this->roomAmenities,
            ];
        }
        else{
            $hotels = [
                'hotelName' => $this->name,
                'Rate' => str_repeat("*", $this->rate),
                'Price' => $totalPrice,
            ];

            // check if there is a discount and calculate it
            if(!$this->discount == 0){

                $discountFactor = (100 - $this->discount)/100;
                $hotels['discount'] = $totalPrice * $discountFactor;
            }
            // split the room amenities using the ' , ' as separator
            $roomAmenities = explode(',', $this->roomAmenities);
            $hotels['amenities'] = $roomAmenities;

            return $hotels;
        }
    }
}
