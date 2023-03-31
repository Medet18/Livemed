<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AppointmentController extends Controller
{
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        try{

            $news = new Appointment();
            Appointment::create([
                'subadmin_id' => auth('subadmin-api')->user()->id,
                'title_of_news' => $request->title_of_news,
                'description_of_news' => $request->description_of_news,
                'photo_of_news' => $photo,
                'date_of_news' => Carbon::create($request->date_of_news)->toDateString()

            ]);


            return response()->json(['message' => 'News successfully stored!'], 200);

        } catch(\Exception $e){
//            return response()->json(['message' =>'Something went wrong!'], 500);
            return response()->json(['Exception' => $e], 500);
        }
    }

    public function update(Request $request,$lang, $id): \Illuminate\Http\JsonResponse
    {
        try{
            $news = Appointment::find($id);

            if(!$news){
                return response()->json(['message' =>  'not_found'],404);
            }
            elseif($news->subadmin_id == auth('subadmin-api')->user()->id){

                $news->title_of_news = $request->title_of_news;
                $news->description_of_news = $request->description_of_news;
                $news->date_of_news = Carbon::create($request->date_of_news)->toDateString();


                $news->save();
                return response()->json(['message' =>'News successfully updated!'], 200);
            }
            else{
                return response()->json(['message' => "U can't update! ,It's not ur's news. U can edit only urs news!"],200);
            }

        } catch(\Exception $e){
//            return response()->json([__('word.message') => __('word.s_w_wrong')],500);
            return response()->json(['message' => $e],500);
        }
    }

    public function destroy($lang, $id): \Illuminate\Http\JsonResponse
    {
        $news = Appointment::find($id);
        if(!$news){
            return response()->json(['message' =>'not_found'], 404);
        }
        elseif($news->subadmin_id == auth('subadmin-api')->user()->id){


            $news->delete();

            return response()->json(['message' =>'News successfully deleted!'], 200);
        }
        else{
            return response()->json(['message' => "U can't delete news, Delete only urs new"], 200);
        }
    }

}
