<?php
    namespace app\Model;

    use core\Model;

    class ModuleCat extends Model {
        /**
         * @var array
         */
        protected static $fields = ['id', 'title', 'access', 'sort'];

        /**
         * @var string
         */
        protected static $table = 'module_cat';
    }