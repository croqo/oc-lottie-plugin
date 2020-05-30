<?php namespace Croqo\Lottie\Models;

use Model;

/**
 * Model
 */
class File extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'croqo_lottie_files';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
