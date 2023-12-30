<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherImages extends Model
{
    use HasFactory;
    private static $otherImage, $image, $imageName, $imageUrl, $directory;

    public static function getImageUrl($image)
    {
        self::$imageName = rand(5000, 10000).'.'. $image->getClientOriginalExtension();
        self::$directory = 'product-other-images/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory. self::$imageName;
        return self::$imageUrl;
    }
    public static function newOtherImage($request, $id)
    {
        foreach ($request->file('other_image') as $image)
        {
            self::$otherImage = new OtherImages();
            self::$otherImage->product_id = $id;
            self::$otherImage->image = self::getImageUrl($image);
            self::$otherImage->save();
        }
    }
    public static function updateOtherImage($request, $id)
    {
        self::$otherImage = OtherImages::where('product_id', $id)->get();
        foreach (self::$otherImage as $image)
        {
            unlink($image->image);
            $image->delete();
        }
        self::newOtherImage($request, $id);
    }
    public static function deleteOtherImage($id)
    {
        self::$otherImage = OtherImages::where('product_id', $id)->get();
        foreach (self::$otherImage as $item)
        {
            unlink($item->image);
            $item->delete();
        }
    }
}
