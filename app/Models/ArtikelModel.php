<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    //
    public static function get_all()
    {
        $data = DB::table('artikel')->get();
        return $data;
    }
    public static function detail($id)
    {
        $data = DB::table('artikel')->where('artikel_id', '=', $id)->get();
        return $data;
    }
    public static function insert($data)
    {
        $slug    = str_replace(" ", "-", strtolower($data['judul']));
        $tag = str_replace(" ", "-", strtolower($data['tag']));
        $new_data = DB::table('artikel')
            ->insert([
                'artikel_judul' => $data['judul'],
                'artikel_isi' => $data['isi'],
                'artikel_tag' => $tag,
                'artikel_slug' => $slug,
                'user_id' => $data['userid'],
                'artikel_create' => now()
            ]);
        return $new_data;
    }


    public static function simpanupdate($id, $request)
    {
        $artikel = DB::table('artikel')
            ->where('id', $id)
            ->update([
                'artikel_judul' => $request['judul'],
                'artikel_isi' => $request['isi'],
                'artikel_tag' => $request['tag'],
                'artikel_update' => now()
            ]);
        return $artikel;
    }


    // public static function update($id, $request)
    // {
    //     $artikel = DB::table('artikel')
    //         ->where('id', $id)
    //         ->update([
    //             'judul' => $request['judul'],
    //             'isi' => $request['isi'],
    //             'tag' => $request['tag'],
    //             'updated_at' =>  now()
    //         ]);
    //     return $artikel;
    //     // dd($data);
    //     // $new_data = DB::table('artikel')
    //     //     ->where('artikel_id', $id)
    //     //     ->update([
    //     //         'artikel_judul' => $data['judul'],
    //     //         'artikel_isi' => $data['isi'],
    //     //         'artikel_update' => now()
    //     //     ]);
    //     // return $new_data;
    // }




    // public static function delete($id)
    // {
    //     $new_data = DB::table('artikel')->where('artikel_id', $id)->delete();
    //     return $new_data;
    // }
}
