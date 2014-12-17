<?php

namespace SlimBlog\Entity;

abstract class AbstractManager
{
    /**
     * @var \PDO
     */
    protected $db;

    /**
     * @param \PDO $db
     */
    public function __contruct(\PDO $db)
    {
        $this->db = $db;
    }
}