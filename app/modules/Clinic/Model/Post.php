<?php
namespace Clinic\Model;

class Post extends \Phalcon\Mvc\Model
{
    static $StatusName = array(
            0 => 'เผยแพร่',
            1 => 'ระงับการเผยแพร่',
            2 => 'อ่านได้เท่านั้น'
    );
    /**
     *
     * @var integer
     */
    public $ID;

    /**
     *
     * @var integer
     */
    public $PersonnelID;

    /**
     *
     * @var integer
     */
    public $ReplyPostID;

    /**
     *
     * @var integer
     */
    public $HeadPostID;

    /**
     *
     * @var integer
     */
    public $ForumID;

    /**
     *
     * @var string
     */
    public $Title;

    /**
     *
     * @var string
     */
    public $Detail;

    /**
     *
     * @var string
     */
    public $PostDate;

    /**
     *
     * @var string
     */
    public $Status;

    /**
     *
     * @var string
     */
    public $Pin;

    public function initialize()
    {
 //       $this->belongsTo("PersonnelID", "Personnel", "ID", NULL);
    }

    public function getStatusName()
    {
        return Post::$StatusName[$this->Status];
    }

    public function getStatusNameById($id)
    {
        return Post::$StatusName[$id];
    }
    /**
     * Method to set the value of field ID
     *
     * @param integer $ID
     * @return $this
     */
    public function setId($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    /**
     * Method to set the value of field PersonnelID
     *
     * @param integer $PersonnelID
     * @return $this
     */
    public function setPersonnelid($PersonnelID)
    {
        //$this->PersonnelID = $PersonnelID;

        //return $this;
    }

    /**
     * Method to set the value of field ReplyPostID
     *
     * @param integer $ReplyPostID
     * @return $this
     */
    public function setReplypostid($ReplyPostID)
    {
        $this->ReplyPostID = $ReplyPostID;

        return $this;
    }

    /**
     * Method to set the value of field ForumID
     *
     * @param integer $ForumID
     * @return $this
     */
    public function setForumid($ForumID)
    {
        $this->ForumID = $ForumID;

        return $this;
    }

    /**
     * Method to set the value of field Title
     *
     * @param string $Title
     * @return $this
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;

        return $this;
    }

    /**
     * Method to set the value of field Detail
     *
     * @param string $Detail
     * @return $this
     */
    public function setDetail($Detail)
    {
        $this->Detail = $Detail;

        return $this;
    }

    /**
     * Method to set the value of field PostDate
     *
     * @param string $PostDate
     * @return $this
     */
    public function setPostdate($PostDate)
    {
        $this->PostDate = $PostDate;

        return $this;
    }

    /**
     * Method to set the value of field Status
     *
     * @param string $Status
     * @return $this
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }

    /**
     * Returns the value of field ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->ID;
    }

    /**
     * Returns the value of field PersonnelID
     *
     * @return integer
     */
    public function getPersonnelid()
    {
        //return $this->PersonnelID;
    }

    /**
     * Returns the value of field ReplyPostID
     *
     * @return integer
     */
    public function getReplypostid()
    {
        return $this->ReplyPostID;
    }

    /**
     * Returns the value of field ForumID
     *
     * @return integer
     */
    public function getForumid()
    {
        return $this->ForumID;
    }

    /**
     * Returns the value of field Title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Returns the value of field Detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->Detail;
    }

    /**
     * Returns the value of field PostDate
     *
     * @return string
     */
    public function getPostdate()
    {
        return $this->PostDate;
    }

    /**
     * Returns the value of field Status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    public function getReply($id)
    {
        $post = Post::find("ReplyPostID={$id}");
        return $post;
    }

    public function getFile($postId)
    {
        if(is_dir("./public/files/post/{$postId}")) {
            $file = scandir("./public/files/post/{$postId}",1);
            return $file[0];
        }

        return null;
    }
    
    public function isImageFromFile($filename)
    {
        $filename = explode('.', $filename);
        $filename = $filename[count($filename)-1];
        
        $supportImage = array(
            'gif',
            'jpeg',
            'jpg',
            'png',
            'bmp'
        );

        $flag = in_array($filename, $supportImage);
        
        return $flag;
    }
}
