<?php
namespace Ybastuerk\Weather;

class day
{

    private string $days;

    private string $how;
    function __construct($days, $how)
    {
        $this->days=$days;

        $this->how=$how;
    }
    public function getDate(): string
    {
        return $this->days;
    }
    public function getHow(): string
    {
        return $this->how;
    }
}



