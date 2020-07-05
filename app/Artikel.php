<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Artikel extends Model
{
    public static function get_all()
    {
        $data = DB::table('artikel')->get();
        return $data;
    }
    public static function get($id)
    {
        $data = DB::table('artikel')->where('id', '=', $id)->get();
        return $data;
    }
    public static function delete($id)
    {
        $data = DB::table('artikel')->where('id', '=', $id)->delete();
        return $data;
    }
    public static function store($data)
    {
        $new_data = DB::table('artikel')->insert($data);
        return $new_data;
    }
    public static function edit($data, $id)
    {
        $data2 = DB::table('artikel')->where('id', '=', $id)->update($data);
        return $data2;
    }
}
