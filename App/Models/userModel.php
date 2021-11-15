<?php

class userModel extends Model
{
      public function getAll()
      {
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        return $query->fetchAll();
      }
}