<?php namespace GeneaLabs\Bones\Match;

use Illuminate\Support\Facades\Facade;

class MatchFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'bones-match';
    }
}
