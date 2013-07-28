<?php
class PersonBeanImpl implements PersonBean
{
    private $name;
    private $gender;
    private $interests;
    private $rating;
    private $ratingCount = 0;

    public function getName ()
    {
        return $this->name;
    }

    public function getGender ()
    {
        return $this->gender;
    }

    public function getInterests ()
    {
        return $this->interests;
    }

    public function getHotOrNotRating ()
    {
        //echo "Rating = {$this->rating} RatingCount = {$this->ratingCount}";
        if ($this->ratingCount == 0) {
            return 0;
        } else {
            return $this->rating / $this->ratingCount;  
        }
    }

    public function setName ($name)
    {
        $this->name = $name;
    }

    public function setGender ($gender)
    {
        $this->gender = $gender;
    }

    public function setInterests ($interests)
    {
        $this->interests = $interests;
    }

    public function setHotOrNotRating ($rating)
    {
        $this->rating += $rating;
        $this->ratingCount++;
    }
}
