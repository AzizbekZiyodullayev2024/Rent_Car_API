<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *      path="/api/car_photo",     
 *      summary="Create Car Photo",
 *      tags={"Car_Photo"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="car_id", type="integer", example=5),
 *                      @OA\Property(property="image_url", type="string", example="https://example.com/images/car1.jpg"),
 *                      @OA\Property(property="is_main", type="boolean", example=true),
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
 *                  @OA\Property(property="car_id", type="integer", example=5),
 *                  @OA\Property(property="image_url", type="string", example="https://example.com/images/car1.jpg"),
 *                  @OA\Property(property="is_main", type="boolean", example=true),
 *              ),
 *          ),
 *      ),
 * ),
 * 
 * @OA\Get(
 *      path="/api/car_photo",     
 *      summary="Get All Car Photos",
 *      tags={"Car_Photo"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data",type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="car_id", type="integer", example=5),
 *                  @OA\Property(property="image_url", type="string", example="https://example.com/images/car1.jpg"),
 *                  @OA\Property(property="is_main", type="boolean", example=true),
 *              )),               
 *          ),
 *      ),
 * ),
 * 
 * @OA\Get(
 *      path="/api/car_photo/{car_photo}",     
 *      summary="Get Photo by param",
 *      tags={"Car_Photo"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\Parameter(
 *          description="PostId",
 *          in="path",
 *          name="car_photo",
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
 *                  @OA\Property(property="car_id", type="integer", example=5),
 *                  @OA\Property(property="image_url", type="string", example="https://example.com/images/car1.jpg"),
 *                  @OA\Property(property="is_main", type="boolean", example=true),
 *              )),               
 *          ),
 *      ),
 * ),
 * 
 * @OA\Patch(
 *      path="/api/car_photo/{car_photo}",     
 *      summary="Update Car Photo by param",
 *      tags={"Car_Photo"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\Parameter(
 *          description="PostId",
 *          in="path",
 *          name="car_photo",
 *          required=true,
 *          example=1
 *      ),    
 *  
 *    @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="car_id", type="integer", example=5),
 *                      @OA\Property(property="image_url", type="string", example="https://example.com/images/car1.jpg"),
 *                      @OA\Property(property="is_main", type="boolean", example=true),
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
 *                  @OA\Property(property="car_id", type="integer", example=5),
 *                  @OA\Property(property="image_url", type="string", example="https://example.com/images/car1.jpg"),
 *                  @OA\Property(property="is_main", type="boolean", example=true),
 *              )),               
 *          ),
 *      ),
 * ),
 * 
 * @OA\Delete(
 *      path="/api/car_photo/{car_photo}",     
 *      summary="Delete Car_photo by id",
 *      tags={"Car_Photo"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\Parameter(
 *          description="PostId",
 *          in="path",
 *          name="car_photo",
 *          required=true,
 *          example=1
 *      ),    
 *  
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="message",type="string",example="Deleted car photo"),               
 *          ),
 *      ),
 * ),
 */
class CarPhotoController extends Controller
{
    
}
