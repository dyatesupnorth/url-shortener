<?php

/**
 * Created by PhpStorm.
 * User: master-d
 * Date: 06/01/15
 * Time: 21:30
 */
class Link extends Eloquent
{

    protected $table = 'links';
    protected $fillable = array('url', 'hash');
    public $timestamps = false;


} 