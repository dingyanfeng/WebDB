<?php

/**
 * Team：EW_WAR
 * Coding By：黄逸轩
 * 本模型为接受前台新闻评论的数据模型，接收完数据后由/common/comment.php传入数据库
 */

namespace frontend\models;

use common\models\Comment;
use yii\base\Model;

class DeleteCommentForm extends Model
{
    public $delete_id;


    public function rules()
    {
        return [
            ['delete_id', 'required'],
        ];
    }

    public function submit()
    {
        $comment = new Comment();
        $comment->setId($this->delete_id);
        
        // $comment->setNew_id($this->New_id);
        // $comment->setContent($this->content);
        // $comment->setAuthor($this->author);
        return $comment->save();
    }
}
