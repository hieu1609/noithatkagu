<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DiscountCode extends BaseModel
{
    protected $table = 'discount_code';
    protected $fillable = [
        'id', 'code', 'description', 'values', 'expires_at',
    ];

    public static $rules = array(
        'Check_Discount_Code' => [
            'discountCode' => 'required|string',
            'totalMoney' => 'required|integer',
        ],
        'Add_Discount_Code' => [
            'description' => 'required|string',
            'code' => 'required|string',
            'values' => 'required|integer',
            'time' => 'required|integer',
        ],
        'Edit_Discount_Code' => [
            'id' => 'required|integer',
            'description' => 'required|string',
            'code' => 'required|string',
            'values' => 'required|integer',
            'time' => 'required|integer',
        ],
        'Delete_Discount_Code' => [
            'id' => 'required|integer',
        ],
    );

    public static function checkDiscount($discountCode) {
        $value = DiscountCode::where('code', $discountCode)->first();
        if($value){
            if (Carbon::parse($value->expires_at)->isPast()) {
                return 0;
            }
            else {
                return $value->values;
            }
        }
        else {
            return 0;
        }
    }
}
