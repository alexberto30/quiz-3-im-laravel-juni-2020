<?php 

	namespace App\Models;

	use Illuminate\Support\Facades\DB;
	use Illuminate\Support\Str;

	class Artikel{
		public static function findById($id) {
	        return DB::table('artikel')->where('id', $id)->first();
	    }

	    public static function all() {
	        return DB::table('artikel')->get();
	    }

	    public static function save($data) {
	        $data['slug'] = Str::slug($data['judul']);
	        $data['created_at'] = now();

	        return DB::table('artikel')->insert($data);
	    }

	    public static function update($id, $data) {
	        $data['slug'] = Str::slug($data['judul']);

	        return DB::table('artikel')->where('id', $id)->update($data);
	    }

	    public static function delete($id) {
	        return DB::table('artikel')->where('id', $id)->delete();
	    }
	}