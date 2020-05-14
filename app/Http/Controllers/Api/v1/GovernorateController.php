<?php

namespace App\Http\Controllers\Api\v1;
use App\Http\Controllers\Controller;
use App\Governorate;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\Request;



class GovernorateController  extends Controller
{
    use ApiResponser;
 

    /**
     * Return List of Rates
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        //
        $governorates = Governorate::all();
        
        return $this->successResponse($governorates);
      
    }

    
    /**
     * get one Rate
     *
     * @return Illuminate\Http\Response
     */
    public function show($governorate)
    {
        //

        $governorate = Governorate::findOrFail($governorate);
        return $this->successResponse($governorate);
        
    }

   
}
