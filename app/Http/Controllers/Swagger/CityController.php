<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *      path="/api/cities",     
 *      summary="Create City",
 *      tags={"City"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name",type="string",example="Some name"),
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
 *                  @OA\Property(property="id",type="integer",example=1),
 *                  @OA\Property(property="name",type="string",example="Some name"),
 *              ),
 *          ),
 *      ),
 * ),
 * 
 * @OA\Get(
 *      path="/api/cities",     
 *      summary="Get All Cities",
 *      tags={"City"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data",type="array", @OA\Items(
 *                  @OA\Property(property="id",type="integer",example=1),
 *                  @OA\Property(property="name",type="string",example="Some name"),
 *              )),               
 *          ),
 *      ),
 * ),
 * 
 * @OA\Get(
 *      path="/api/cities/{city}",     
 *      summary="Get Cities by param",
 *      tags={"City"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\Parameter(
 *          description="CityId",
 *          in="path",
 *          name="city",
 *          required=true,
 *          example=1
 *      ),    
 *  
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data",type="array", @OA\Items(
 *                  @OA\Property(property="id",type="integer",example=1),
 *                  @OA\Property(property="name",type="string",example="Some name"),
 *              )),               
 *          ),
 *      ),
 * ),
 * 
 * @OA\Patch(
 *      path="/api/cities/{city}",     
 *      summary="Update City by param",
 *      tags={"City"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\Parameter(
 *          description="CityId",
 *          in="path",
 *          name="city",
 *          required=true,
 *          example=1
 *      ),    
 *  
 *    @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name",type="string",example="Some name for update"),
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
 *                  @OA\Property(property="id",type="integer",example=1),
 *                  @OA\Property(property="name",type="string",example="Some title"),
 *              )),               
 *          ),
 *      ),
 * ),
 * 
 * @OA\Delete(
 *      path="/api/cities/{city}",     
 *      summary="Delete City by id",
 *      tags={"City"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\Parameter(
 *          description="PostId",
 *          in="path",
 *          name="city",
 *          required=true,
 *          example=1
 *      ),    
 *  
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="message",type="string",example="City deleted"),               
 *          ),
 *      ),
 * ),
 */
class CityController extends Controller
{
    
}
