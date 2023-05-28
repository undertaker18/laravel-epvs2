<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class XeroUsers extends Model
{
    use HasFactory;
    use Searchable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'xero_users';

    /**
     * Get the searchable configuration for the model.
     *
     * @return \Laravel\Scout\SearchableArray
     */
    public function searchableAs()
    {
        return 'xero_users_index';
    }

    /**
     * Get the searchable fields for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        return [
            'xero_account_name' => $this->xero_account_name,
        ];
    }
}
