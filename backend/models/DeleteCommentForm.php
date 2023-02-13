<?php



namespace backend\models;

use common\models\Comment;
use yii\base\Model;

class DeleteCommentForm extends Model
{
    public $id;


    public function rules()
    {
        return [
            ['id', 'required'],
        ];
    }

    public function submit()
    {
        $comment = new Comment();
        $comment->setId($this->id);
        
        // $comment->setNew_id($this->New_id);
        // $comment->setContent($this->content);
        // $comment->setAuthor($this->author);
        return $comment->save();
    }
}
