<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class BooksExport implements FromArray, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function Array():Array
    {
        return Book::getDataBooks();
    }

    public function headings():Array
    {
        return [
            'no',
            'Judul',
            'Penulis',
            'Tahun',
            'Penerbit'
        ];
    }
}
