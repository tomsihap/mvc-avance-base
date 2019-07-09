<?php


class ExamplesController {


    public function list() {

        $examples = Example::findAll();

        view('examples.list', compact('examples'));
    }

    public function add() {

        view('examples.add');
    }

    public function save() {

        $example = new Example;
        $example->setField1($_POST['field1']);
        $example->setField2($_POST['field2']);
        $example->setField3($_POST['field3']);
        $example->save();

    }

}