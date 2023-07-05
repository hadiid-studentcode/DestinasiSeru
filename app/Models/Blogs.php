<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blogs extends Model
{
    use HasFactory;
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'content',
        'image',
        'author',

    ];

    protected $primaryKey = 'id';



    public function saveData($data)
    {
        return Blogs::create($data);
    }

    public function getData()
    {
        $result = DB::table('blogs')
            ->select('blogs.*', 'users.first_name', 'users.last_name')
            ->join('users', 'blogs.author', '=', 'users.id')
            ->get();

        return $result;
    }

    public function deleteData($id)
    {
        return Blogs::where('id', $id)->delete();
    }

    public function getDataFirst($id)
    {
        return Blogs::where('id', $id)->first();
    }

    public function jumlah()
    {

        return Blogs::count();
    }
}
