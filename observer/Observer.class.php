<?php
interface Observer
{
    public function update($temperature, $humidity, $pressure);
}
