<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * 
 * List
 * @OA\Get(
 *      path="/api/items",
 *      summary="List",
 *      tags={"Contact"},
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property( property="data", type="array", 
 *                  @OA\Items(
 *                      @OA\Property( property="id",          type="integer",  example="1" ),
 *                      @OA\Property( property="FIO",         type="string",   example="Аханов Я. О." ),
 *                      @OA\Property( property="company",     type="string",   example="Future" ),
 *                      @OA\Property( property="phone",       type="string",   example="+375336671210" ),
 *                      @OA\Property( property="email",       type="string",   example="akhanov.yaroslav@mail.ru"),
 *                      @OA\Property( property="birthDate",   type="date",     example="2000-11-11", nullable=true ),
 *                      @OA\Property( property="img",         type="string",   example="http://127.0.0.1:8000/storage/img/0rouhfkiGe2RhUvaUTk03phA9paMMLYwgIV4Su6F.png", nullable=true ),
 *                  )
 *              )
 *          )
 *      )
 * )
 * 
 * Create
 * 
 * @OA\Post(
 *      path="/api/items",
 *      summary="Create",
 *      tags={"Contact"},
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property( property="FIO",         type="string",   example="Аханов Я. О." ),
 *                      @OA\Property( property="company",     type="string",   example="Future" ),
 *                      @OA\Property( property="phone",       type="integer",  example=375336671210 ),
 *                      @OA\Property( property="email",       type="string",   example="akhanov.yaroslav@mail.ru"),
 *                      @OA\Property( property="birthDate",   type="date",     example="2000-11-11", nullable=true ),
 *                      @OA\Property( property="img",         type="file",     example="image.png",  nullable=true ),
 *                  )
 *              }
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property( property="data", type="object",
 *                  @OA\Property( property="id",          type="integer",  example="1" ),
 *                  @OA\Property( property="FIO",         type="string",   example="Аханов Я. О." ),
 *                  @OA\Property( property="company",     type="string",   example="Future" ),
 *                  @OA\Property( property="phone",       type="string",   example="+375336671210" ),
 *                  @OA\Property( property="email",       type="string",   example="akhanov.yaroslav@mail.ru"),
 *                  @OA\Property( property="birthDate",   type="date",     example="2000-11-11", nullable=true ),
 *                  @OA\Property( property="img",         type="string",   example="http://127.0.0.1:8000/storage/img/0rouhfkiGe2RhUvaUTk03phA9paMMLYwgIV4Su6F.png", nullable=true ),
 *              )                
 *          )
 *      )
 * )
 * 
 * 
 * Single item
 * 
 * @OA\Get(
 *      path="/api/items/{item}",
 *      summary="One contact",
 *      tags={"Contact"},
 *      @OA\Parameter(
 *          description="id of item",
 *          in="path",
 *          required=true,
 *          example=2,
 *          name="contact",
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property( property="data", type="object",
 *                  @OA\Property( property="id",          type="integer",  example="1" ),
 *                  @OA\Property( property="FIO",         type="string",   example="Аханов Я. О." ),
 *                  @OA\Property( property="company",     type="string",   example="Future", nullable=true ),
 *                  @OA\Property( property="phone",       type="string",   example="+375336671210" ),
 *                  @OA\Property( property="email",       type="string",   example="akhanov.yaroslav@mail.ru"),
 *                  @OA\Property( property="birthDate",   type="date",     example="2000-11-11", nullable=true ),
 *                  @OA\Property( property="img",         type="string",   example="http://127.0.0.1:8000/storage/img/0rouhfkiGe2RhUvaUTk03phA9paMMLYwgIV4Su6F.png", nullable=true ), 
 *               )
 *          )
 *      )
 * )
 * 
 * update
 * 
 * @OA\Post(
 *      path="/api/items/{item}",
 *      summary="Update",
 *      tags={"Contact"},
 *      @OA\Parameter(
 *          description="id of item",
 *          in="path",
 *          required=true,
 *          example=2,
 *          name="contact",
 *      ),
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property( property="FIO",         type="string",   example="Аханов Я. О." ),
 *                      @OA\Property( property="company",     type="string",   example="Future" ),
 *                      @OA\Property( property="phone",       type="integer",  example=375336671210 ),
 *                      @OA\Property( property="email",       type="string",   example="akhanov.yaroslav@mail.ru"),
 *                      @OA\Property( property="birthDate",   type="date",     example="2000-11-11", nullable=true ),
 *                      @OA\Property( property="img",         type="file",     example="image.png",  nullable=true ),
 *                  )
 *              }
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property( property="data", type="object",
 *                  @OA\Property( property="id",          type="integer",  example="1" ),
 *                  @OA\Property( property="FIO",         type="string",   example="Аханов Я. О." ),
 *                  @OA\Property( property="company",     type="string",   example="Future", nullable=true ),
 *                  @OA\Property( property="phone",       type="string",   example="+375336671210" ),
 *                  @OA\Property( property="email",       type="string",   example="akhanov.yaroslav@mail.ru"),
 *                  @OA\Property( property="birthDate",   type="date",     example="2000-11-11", nullable=true ),
 *                  @OA\Property( property="img",         type="string",   example="http://127.0.0.1:8000/storage/img/0rouhfkiGe2RhUvaUTk03phA9paMMLYwgIV4Su6F.png", nullable=true ), 
 *               )
 *          )
 *      )
 * )
 * 
 * Delete
 * 
 * @OA\Delete(
 *      path="/api/items/{item}",
 *      summary="Delete contact",
 *      tags={"Contact"},
 *      @OA\Parameter(
 *          description="id of item",
 *          in="path",
 *          required=true,
 *          example=2,
 *          name="contact",
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              example="Контакт Аханов Ярослав Олегович удален" 
 *          )
 *      )
 * )
 */

class ContactController extends Controller
{

}


