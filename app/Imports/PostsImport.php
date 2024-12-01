<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PostsImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $item) {
            foreach ($item as $key => $value) {
                if ($value==null)
                {
                    unset($item[$key]);
                }
            }
        }
    }

}
