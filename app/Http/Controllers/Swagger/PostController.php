<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *      path="/api/posts",     
 *      summary="Create Post",
 *      tags={"Post"},
 * 
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="title",type="string",example="Some title"),
 *                      @OA\Property(property="likes",type="integer",example=20),
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
 *                  @OA\Property(property="title",type="string",example="Some title"),
 *                  @OA\Property(property="likes",type="integer",example=20),
 *              ),
 *          ),
 *      ),
 * ),
 * 
 * @OA\Get(
 *      path="/api/posts",     
 *      summary="Get All Posts",
 *      tags={"Post"},
 * 
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data",type="array", @OA\Items(
 *                  @OA\Property(property="id",type="integer",example=1),
 *                  @OA\Property(property="title",type="string",example="Some title"),
 *                  @OA\Property(property="likes",type="integer",example=20),
 *              )),               
 *          ),
 *      ),
 * ),
 * 
 * @OA\Get(
 *      path="/api/posts/{post}",     
 *      summary="Get Posts by param",
 *      tags={"Post"},
 *      @OA\Parameter(
 *          description="PostId",
 *          in="path",
 *          name="post",
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
 *                  @OA\Property(property="title",type="string",example="Some title"),
 *                  @OA\Property(property="likes",type="integer",example=20),
 *              )),               
 *          ),
 *      ),
 * ),
 * 
 * @OA\Patch(
 *      path="/api/posts/{post}",     
 *      summary="Update Posts by param",
 *      tags={"Post"},
 *      @OA\Parameter(
 *          description="PostId",
 *          in="path",
 *          name="post",
 *          required=true,
 *          example=1
 *      ),    
 *  
 *    @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="title",type="string",example="Some title for update"),
 *                      @OA\Property(property="likes",type="integer",example=21),
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
 *                  @OA\Property(property="title",type="string",example="Some title"),
 *                  @OA\Property(property="likes",type="integer",example=20),
 *              )),               
 *          ),
 *      ),
 * ),
 * 
 * @OA\Delete(
 *      path="/api/posts/{post}",     
 *      summary="Delete Post by id",
 *      tags={"Post"},
 *      @OA\Parameter(
 *          description="PostId",
 *          in="path",
 *          name="post",
 *          required=true,
 *          example=1
 *      ),    
 *  
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="message",type="string",example="Deleted post"),               
 *          ),
 *      ),
 * ),
 */
class PostController extends Controller
{
    
}
