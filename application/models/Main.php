<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public function postsCount()
    {
        return $this->db->column('SELECT COUNT(id) FROM posts');
    }
    public function postsList($route)
    {
        $max = 100;
        $params = [
          'max' => $max,
          'start' => (($route['page'] ?? 1) - 1) * $max,
        ];
        return $this->db->row('SELECT * FROM posts ORDER BY views DESC LIMIT :start, :max', $params);
    }
}
