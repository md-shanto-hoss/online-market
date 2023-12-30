<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    private static $unit, $image, $imageName, $imageUrl, $directory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = time().'.'. self::$image->getClientOriginalExtension();
        self::$directory = 'unit-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory. self::$imageName;
        return self::$imageUrl;
    }
    public static function newUnit($request)
    {
        self::$unit = new Unit();
        self::$unit->name = $request->name;
        self::$unit->description = $request->description;
        self::$unit->image = self::getImageUrl($request);
        self::$unit->save();
    }
    public static function updateUnit($request, $id)
    {
        self::$unit = Unit::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$unit->image))
            {
                unlink(self::$unit->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }else{
            self::$imageUrl = self::$unit->image;
        }
        self::$unit->name = $request->name;
        self::$unit->description = $request->description;
        self::$unit->image = self::$imageUrl;
        self::$unit->save();
    }
    public static function deleteUnit($id)
    {
        self::$unit = Unit::find($id);
        if (file_exists(self::$unit->image))
        {
            unlink(self::$unit->image);
        }
        self::$unit->delete();
    }
}
