<?php

namespace App\Repositories;

use App\Models\MyClients;
use App\Repositories\BaseRepository;

/**
 * Class MyClientsRepository
 * @package App\Repositories
 * @version July 2, 2020, 9:52 pm UTC
*/

class MyClientsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'phone',
        'mail',
        'comments'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MyClients::class;
    }
}
