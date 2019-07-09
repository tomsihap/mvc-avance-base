# Projet de base : MVC avancé

## Eléments à ajouter par rapport au model Example existant :

- méthode findOne($id)
- méthode update()
- méthode delete()

### findOne($id)

```php
public static function findOne(int $id) {
    $request = [
        ['id', '=', $id]
    ];
    $data = Db::dbFind(self::TABLE_NAME, $request);
    if (count($data) > 0) $data = $data[0];
    else return;

    $example = new Example;
    $example->setId($data['id']);
    $example->setField1($data['field1']);
    $example->setField2($data['field2']);
    $example->setField3($data['field3']);
    return $example;
}
```

### update()

```php
public function update() {
    if ($this->getId() > 0) {
        $data = [
            "field1"   => $this->getField1(),
            "field2"   => $this->getField2()
            "field3"   => $this->getField3()
        ];
        Db::dbUpdate(self::TABLE_NAME, $data);
        return $this;
    }
    return;
}
```

### delete()

```php
public function delete() {
    $data = [
        'id' => $this->getId(),
    ];
    Db::dbDelete(self::TABLE_NAME, $data);
    return;
}
```




    