<?php
class ModelToolString extends Model {
    public function editString($string) {
    $newString = mb_convert_case($string, MB_CASE_TITLE, "UTF-8");

      return $newString;
    }
}