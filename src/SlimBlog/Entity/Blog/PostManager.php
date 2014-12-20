<?php

namespace SlimBlog\Entity\Blog;

use SlimBlog\Entity\AbstractManager;

class PostManager extends AbstractManager
{
    /**
     * @param $id
     * @return null|Post
     */
    public function fetchById($id)
    {
        $statement = $this->db->prepare('SELECT * FROM posts WHERE id = :id');
        $statement->bindValue('id', $id);
        $statement->execute();

        $blogPost = null;
        if ($data = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $blogPost = new Post(
                $data['id'],
                $data['title'],
                $data['content'],
                new \DateTime($data['created_at']),
                new \DateTime($data['published_at']),
                $data['updated_at'] ? new \DateTime($data['updated_at']) : null,
                $data['is_active']
            );
        }
        return $blogPost;
    }

    /**
     * @param int $page
     * @return array
     */
    public function fetchByLatest($page = 1)
    {
        $statement = $this->db->prepare(
            'SELECT * FROM posts WHERE is_active = 1 ORDER BY published_at LIMIT 10 OFFSET :offset'
        );
        $statement->bindValue('offset', 10 * ($page - 1));
        $statement->execute();

        $blogPosts = [];
        foreach ($statement->fetchAll(\PDO::FETCH_ASSOC) as $data) {
            $blogPosts[] = new Post(
                $data['id'],
                $data['title'],
                $data['content'],
                new \DateTime($data['created_at']),
                new \DateTime($data['published_at']),
                $data['updated_at'] ? new \DateTime($data['updated_at']) : null,
                $data['is_active']
            );
        }

        return $blogPosts;
    }

    /**
     * @param int $id
     */
public function delete($id)
    {
        $statement = $this->db->prepare('DELETE FROM posts WHERE id = :id');
        $statement->bindValue('id', $id);
        $statement->execute();
    }
}
