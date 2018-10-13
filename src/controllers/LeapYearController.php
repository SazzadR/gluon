<?php

namespace Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LeapYearController
{
    public function index(Request $request)
    {
        if ($this->isLeapYear($request->attributes->get('year'))) {
            return new Response('Yep, this is a leap year!');
        }

        return new Response('Nope, this is not a leap year.');
    }

    protected function isLeapYear($year)
    {
        if (null === $year) {
            $year = date('Y');
        }

        return 0 === $year % 400 || (0 === $year % 4 && 0 !== $year % 100);
    }
}
