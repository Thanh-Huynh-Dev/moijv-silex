<?php

namespace Entity;

/**
 * Description of Game
 *
 * @author Etudiant
 */
class Game
{

    /**
     * id of the game
     * @var int
     */
    private $id;

    /**
     * title of the game
     * @var string 
     */
    private $title;

    /**
     * image of the game
     * @var string
     */
    private $image;

    /**
     * id of the owner
     * @var \Entity\User
     */
    private $user;

    /**
     * id of the category
     * @var \Entity\Category
     */
    private $category;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setUser(\Entity\User $user)
    {
        $this->user = $user;
    }

    public function setCategory(\Entity\Category $category)
    {
        $this->category = $category;
    }

}
