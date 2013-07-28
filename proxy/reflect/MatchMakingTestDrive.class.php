<?php
require_once 'autoload.php';
class MatchMakingTestDrive
{
    private $datingDB = array();

    public function __construct ()
    {
        $this->initializeDatabase();
        $this->drive();
    }

    public function drive ()
    {
        $joe = $this->getPersonFromDatabase('Joe Javabean');
        $ownerProxy = $this->getOwnerProxy($joe);
        echo 'Name is ' . $ownerProxy->getName();
        echo '<br/>';
        $ownerProxy->setInterests('bowling, Go');
        echo 'Interests set from owner proxy';
        echo '<br/>';
        try {
            $ownerProxy->setHotOrNotRating(10);
        } catch (Exception $e) {
            echo "Can't set rating from owner proxy";
            echo '<br/>';
        }
        echo 'Rating is ' . $ownerProxy->getHotOrNotRating();
        echo '<br/>';

        $nonOwnerProxy = $this->getNonOwnerProxy($joe);
        echo 'Name is ' . $nonOwnerProxy->getName();
        echo '<br/>';
        try {
            $nonOwnerProxy->setInterests('bowling, Go');
        } catch (Exception $e) {
            echo "Cant't set interests from non owner proxy";
            echo '<br/>';
        }
        $nonOwnerProxy->setHotOrNotRating(3);
        echo 'Rating set from non owner proxy';
        echo '<br/>';
        echo 'Rating is ' . $nonOwnerProxy->getHotOrNotRating();
        echo '<br/>';
    }

    public function getNonOwnerProxy ($person)
    {
        return new NonOwnerInvocationHandler($person);
    }

    public function getOwnerProxy ($person)
    {
         return new OwnerInvocationHandler($person);
    }

    public function getPersonFromDatabase ($name)
    {
        return $this->datingDB[$name];
    }

    public function initializeDatabase ()
    {
        $joe = new PersonBeanImpl();
        $joe->setName('Joe Javabean');
        $joe->setInterests('cars, computers, music');
        $joe->setHotOrNotRating(7);
        $this->datingDB[$joe->getName()] = $joe;

        $kelly = new PersonBeanImpl();
        $kelly->setName('Kelly Klosure');
        $kelly->setInterests('ebay, moives, music');
        $kelly->setHotOrNotRating(6);
        $this->datingDB[$kelly->getName()] = $kelly;
    }
}

$obj = new MatchMakingTestDrive();
