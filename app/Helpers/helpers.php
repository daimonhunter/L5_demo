<?php
namespace Laravel_helpers;
if(!function_exists(cacheQuery)){
    echo 'wfwef';
    function cacheQuery($sql, $timeout = 60) {
        return Cache::remember(md5($sql), $timeout, function() use ($sql) {
            return DB::select(DB::raw($sql));
        });
    }
}