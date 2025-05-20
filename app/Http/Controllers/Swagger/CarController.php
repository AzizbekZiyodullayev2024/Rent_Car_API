<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *      path="/api/cars",     
 *      summary="Create Car",
 *      tags={"Car"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="city_id", type="integer", example=1),
 *                      @OA\Property(property="brand", type="string", example="Chevrolet"),
 *                      @OA\Property(property="model", type="string", example="Cobalt"),
 *                      @OA\Property(property="year", type="integer", example=2020),
 *                      @OA\Property(property="engine_volume", type="string", example="1.5L"),
 *                      @OA\Property(property="fuel_consumption", type="string", example="7L/100km"),
 *                      @OA\Property(property="body_type", type="string", example="sedan"),
 *                      @OA\Property(property="transmission", type="string", example="Automatic"),
 *                      @OA\Property(property="fuel_type", type="string", example="Petrol"),
 *                      @OA\Property(property="seats", type="integer", example=5),
 *                      @OA\Property(property="doors", type="integer", example=4),
 *                      @OA\Property(property="daily_price", type="integer", example=100),
 *                      @OA\Property(property="deposit_amount", type="integer", example=500),
 *                      @OA\Property(property="insurance_type", type="string", enum={"OSAGO","CASCO"}, example="OSAGO"),
 *                      @OA\Property(property="mileage_limit", type="integer", example=300),
 *                      @OA\Property(property="is_available", type="boolean", example=true),
 *                      @OA\Property(property="description", type="string", example="Yaxshi holatda, yagona egasi")
 *                  )
 *              }
 *          )
 *      ),
 *      
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data",type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="city_id", type="integer", example=1),
 *                  @OA\Property(property="brand", type="string", example="Chevrolet"),
 *                  @OA\Property(property="model", type="string", example="Cobalt"),
 *                  @OA\Property(property="year", type="integer", example=2020),
 *                  @OA\Property(property="engine_volume", type="string", example="1.5L"),
 *                  @OA\Property(property="fuel_consumption", type="string", example="7L/100km"),
 *                  @OA\Property(property="body_type", type="string", example="sedan"),
 *                  @OA\Property(property="transmission", type="string", example="Automatic"),
 *                  @OA\Property(property="fuel_type", type="string", example="Petrol"),
 *                  @OA\Property(property="seats", type="integer", example=5),
 *                  @OA\Property(property="doors", type="integer", example=4),
 *                  @OA\Property(property="daily_price", type="integer", example=100),
 *                  @OA\Property(property="deposit_amount", type="integer", example=500),
 *                  @OA\Property(property="insurance_type", type="string", example="OSAGO"),
 *                  @OA\Property(property="mileage_limit", type="integer", example=300),
 *                  @OA\Property(property="is_available", type="boolean", example=true),
 *                  @OA\Property(property="description", type="string", example="Yaxshi holatda, yagona egasi"),
 *                  @OA\Property(property="created_at", type="string", format="date-time", example="2025-05-16T12:00:00Z"),
 *              ),
 *          ),
 *      ),
 * ),
 * 
 * @OA\Get(
 *      path="/api/cars",     
 *      summary="Get All Cars",
 *      tags={"Car"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data",type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="city_id", type="integer", example=1),
 *                  @OA\Property(property="brand", type="string", example="Chevrolet"),
 *                  @OA\Property(property="model", type="string", example="Cobalt"),
 *                  @OA\Property(property="year", type="integer", example=2020),
 *                  @OA\Property(property="engine_volume", type="string", example="1.5L"),
 *                  @OA\Property(property="fuel_consumption", type="string", example="7L/100km"),
 *                  @OA\Property(property="body_type", type="string", example="sedan"),
 *                  @OA\Property(property="transmission", type="string", example="Automatic"),
 *                  @OA\Property(property="fuel_type", type="string", example="Petrol"),
 *                  @OA\Property(property="seats", type="integer", example=5),
 *                  @OA\Property(property="doors", type="integer", example=4),
 *                  @OA\Property(property="daily_price", type="integer", example=100),
 *                  @OA\Property(property="deposit_amount", type="integer", example=500),
 *                  @OA\Property(property="insurance_type", type="string", example="OSAGO"),
 *                  @OA\Property(property="mileage_limit", type="integer", example=300),
 *                  @OA\Property(property="is_available", type="boolean", example=true),
 *                  @OA\Property(property="description", type="string", example="Yaxshi holatda, yagona egasi"),
 *                  @OA\Property(property="created_at", type="string", format="date-time", example="2025-05-16T12:00:00Z"),
 *              )),               
 *          ),
 *      ),
 * ),
 * 
 * @OA\Get(
 *      path="/api/carsModel",     
 *      summary="Get All Car Models",
 *      tags={"Car"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data",type="array", @OA\Items(
 *                  @OA\Property(property="model", type="string", example="Cobalt"),
 *              )),               
 *          ),
 *      ),
 * ),
 * 
 * @OA\Get(
 *      path="/api/cars/{car}",     
 *      summary="Get Car by param",
 *      tags={"Car"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\Parameter(
 *          description="CarId",
 *          in="path",
 *          name="car",
 *          required=true,
 *          example=1
 *      ),    
 *  
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data",type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="city_id", type="integer", example=1),
 *                  @OA\Property(property="brand", type="string", example="Chevrolet"),
 *                  @OA\Property(property="model", type="string", example="Cobalt"),
 *                  @OA\Property(property="year", type="integer", example=2020),
 *                  @OA\Property(property="engine_volume", type="string", example="1.5L"),
 *                  @OA\Property(property="fuel_consumption", type="string", example="7L/100km"),
 *                  @OA\Property(property="body_type", type="string", example="sedan"),
 *                  @OA\Property(property="transmission", type="string", example="Automatic"),
 *                  @OA\Property(property="fuel_type", type="string", example="Petrol"),
 *                  @OA\Property(property="seats", type="integer", example=5),
 *                  @OA\Property(property="doors", type="integer", example=4),
 *                  @OA\Property(property="daily_price", type="integer", example=100),
 *                  @OA\Property(property="deposit_amount", type="integer", example=500),
 *                  @OA\Property(property="insurance_type", type="string", example="OSAGO"),
 *                  @OA\Property(property="mileage_limit", type="integer", example=300),
 *                  @OA\Property(property="is_available", type="boolean", example=true),
 *                  @OA\Property(property="description", type="string", example="Yaxshi holatda, yagona egasi"),
 *                  @OA\Property(property="created_at", type="string", format="date-time", example="2025-05-16T12:00:00Z"),
 *              )),               
 *          ),
 *      ),
 * ),
 * 
 * @OA\Patch(
 *      path="/api/cars/{car}",     
 *      summary="Update Car by param",
 *      tags={"Car"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\Parameter(
 *          description="CarId",
 *          in="path",
 *          name="car",
 *          required=true,
 *          example=1
 *      ),    
 *  
 *    @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="id", type="integer", example=1),
 *                      @OA\Property(property="city_id", type="integer", example=1),
 *                      @OA\Property(property="brand", type="string", example="Chevrolet"),
 *                      @OA\Property(property="model", type="string", example="Cobalt"),
 *                      @OA\Property(property="year", type="integer", example=2020),
 *                      @OA\Property(property="engine_volume", type="string", example="1.5L"),
 *                      @OA\Property(property="fuel_consumption", type="string", example="7L/100km"),
 *                      @OA\Property(property="body_type", type="string", example="sedan"),
 *                      @OA\Property(property="transmission", type="string", example="Automatic"),
 *                      @OA\Property(property="fuel_type", type="string", example="Petrol"),
 *                      @OA\Property(property="seats", type="integer", example=5),
 *                      @OA\Property(property="doors", type="integer", example=4),
 *                      @OA\Property(property="daily_price", type="integer", example=100),
 *                      @OA\Property(property="deposit_amount", type="integer", example=500),
 *                      @OA\Property(property="insurance_type", type="string", example="OSAGO"),
 *                      @OA\Property(property="mileage_limit", type="integer", example=300),
 *                      @OA\Property(property="is_available", type="boolean", example=true),
 *                      @OA\Property(property="description", type="string", example="Yaxshi holatda, yagona egasi"),
 *                      @OA\Property(property="created_at", type="string", format="date-time", example="2025-05-16T12:00:00Z")
 *                  )
 *              }
 *          )
 *    ),
 * 
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data",type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="city_id", type="integer", example=1),
 *                  @OA\Property(property="brand", type="string", example="Chevrolet"),
 *                  @OA\Property(property="model", type="string", example="Cobalt"),
 *                  @OA\Property(property="year", type="integer", example=2020),
 *                  @OA\Property(property="engine_volume", type="string", example="1.5L"),
 *                  @OA\Property(property="fuel_consumption", type="string", example="7L/100km"),
 *                  @OA\Property(property="body_type", type="string", example="sedan"),
 *                  @OA\Property(property="transmission", type="string", example="Automatic"),
 *                  @OA\Property(property="fuel_type", type="string", example="Petrol"),
 *                  @OA\Property(property="seats", type="integer", example=5),
 *                  @OA\Property(property="doors", type="integer", example=4),
 *                  @OA\Property(property="daily_price", type="integer", example=100),
 *                  @OA\Property(property="deposit_amount", type="integer", example=500),
 *                  @OA\Property(property="insurance_type", type="string", example="OSAGO"),
 *                  @OA\Property(property="mileage_limit", type="integer", example=300),
 *                  @OA\Property(property="is_available", type="boolean", example=true),
 *                  @OA\Property(property="description", type="string", example="Yaxshi holatda, yagona egasi"),
 *                  @OA\Property(property="created_at", type="string", format="date-time", example="2025-05-16T12:00:00Z")
 *              )),               
 *          ),
 *      ),
 * ),
 * 
 * @OA\Delete(
 *      path="/api/cars/{car}",     
 *      summary="Delete Car by id",
 *      tags={"Car"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\Parameter(
 *          description="CarId",
 *          in="path",
 *          name="car",
 *          required=true,
 *          example=1
 *      ),    
 *  
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="city_id", type="integer", example=1),
 *                  @OA\Property(property="brand", type="string", example="Chevrolet"),
 *                  @OA\Property(property="model", type="string", example="Cobalt"),
 *                  @OA\Property(property="year", type="integer", example=2020),
 *                  @OA\Property(property="engine_volume", type="string", example="1.5L"),
 *                  @OA\Property(property="fuel_consumption", type="string", example="7L/100km"),
 *                  @OA\Property(property="body_type", type="string", example="sedan"),
 *                  @OA\Property(property="transmission", type="string", example="Automatic"),
 *                  @OA\Property(property="fuel_type", type="string", example="Petrol"),
 *                  @OA\Property(property="seats", type="integer", example=5),
 *                  @OA\Property(property="doors", type="integer", example=4),
 *                  @OA\Property(property="daily_price", type="integer", example=100),
 *                  @OA\Property(property="deposit_amount", type="integer", example=500),
 *                  @OA\Property(property="insurance_type", type="string", example="OSAGO"),
 *                  @OA\Property(property="mileage_limit", type="integer", example=300),
 *                  @OA\Property(property="is_available", type="boolean", example=true),
 *                  @OA\Property(property="description", type="string", example="Yaxshi holatda, yagona egasi"),
 *                  @OA\Property(property="created_at", type="string", format="date-time", example="2025-05-16T12:00:00Z")               
 *          ),
 *      ),
 * ),
 */
class CarController extends Controller
{    
}