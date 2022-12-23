<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class book extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'penulis',
        'tahun',
        'penerbit'
    ];

    public function up()
    {
        Schema::create('books', function(Blueprint $print){
            $table->id();
            $table->string('judul')->unique();
            $table->string('penulis');
            $table->year('tahun');
            $table->string('penerbit');
            $table->string('cover')->nullable();
            $table->timestamps();
        });
    }

    public static function getDatabooks()
    {
        $books = book::all();

        $books_filter = [];
        $no = 1;
        for ($i=0; $i<$books->count(); $i++)
        {
            $books_filter[$i]['no'] = $no++;
            $books_filter[$i]['judul'] = $books[$i]->judul;
            $books_filter[$i]['penulis'] = $books[$i]->penulis;
            $books_filter[$i]['tahun'] = $books[$i]->tahun;
            $books_filter[$i]['penerbit'] = $books[$i]->penerbit;
        }
        return $books_filter;
    }

    public function down()
    {  
        Schema::dropIfExists('books');
    }
    use HasFactory;
}
