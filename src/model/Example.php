<?php

class Example extends Db {

    const TABLE_NAME = "Example";

    protected $id;
    protected $field1;
    protected $field2;
    protected $field3;


    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setField1($field1) {
        $this->field1 = $field1;
        return $this;
    }

    public function setField2($field2) {
        $this->field2 = $field2;
        return $this;
    }

    public function setField3($field3) {
        $this->field3 = $field3;
        return $this;
    }

    public function getField1() {
        return $this->field1;
    }
    public function getField2() {
        return $this->field2;
    }
    public function getField3() {
        return $this->field3;
    }

    public function save()
    {
        $data = [
            "field1"    => $this->getField1(),
            "field2"    => $this->getField2(),
            "field3"    => $this->getField3(),
        ];
        
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public static function findAll() {
        $data = Db::dbFind(self::TABLE_NAME);

        // Au lieu de retourner un array de données brutes ($data),
        // on retourne un array d'objects de type Example :

        $examples = [];

        foreach($data as $d) {
            $example = new Example;
            $example->setId($d['id']);
            $example->setField1($d['field1']);
            $example->setField2($d['field2']);
            $example->setField3($d['field3']);
            
            $examples[] = $example;
        }

        return $examples;
    }
}