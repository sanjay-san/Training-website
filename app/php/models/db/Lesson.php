<?php
/**
 * Created by ESL
 * Date: 3-4-2017
 * Time: 16:17
 */
namespace php\models\db;
class Lesson extends Entiteit{
    protected $id;
    protected $time;
    protected $date;
    protected $location;
    protected $max_persons;
    protected $training_id;
    protected $instructor_id;
}
