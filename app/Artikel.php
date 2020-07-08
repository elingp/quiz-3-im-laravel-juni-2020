<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Artikel extends Model
{
    public static function get_all()
    {
        $data = DB::table('artikels')->get();
        return $data;
    }
    public static function get($id)
    {
        $data = DB::table('artikels')->where('id', '=', $id)->get();
        return $data;
    }
    public static function destroy($id)
    {
        $data = DB::table('artikels')->where('id', '=', $id)->delete();
        return $data;
    }
    public static function store($data)
    {
        $new_data = DB::table('artikels')->insert($data);
        return $new_data;
    }
    public static function edit($data, $id)
    {
        $data2 = DB::table('artikels')->where('id', '=', $id)->update($data);
        return $data2;
    }
}
