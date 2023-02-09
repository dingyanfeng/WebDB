<?php

/**
 * Team: EW_WAR
 * Coding by: 黄逸轩
 * 评论 model
*/

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\widgets\ContentDecorator;
use common\models\news;

/**
 * Class Comments
 *
 * @property int    $id         评论ID
 * @property int    $New_id     新闻ID
 * @property string $content    评论内容
 * @property string $author     评论人
 */
class Comment extends ActiveRecord
{
    public static function tableName()
    {
        return "{{%Comment}}";
    }

    // basic setters
    public function setId($id) { $this->id = $id; }
    public function setNew_id($New_id) { $this->New_id = $New_id; }
    public function setContent($content) { $this->content = $content; }
    public function setAuthor($author) { $this->author = $author; }

    // basic getters
    public function getId() { return $this->id; }
    public function getNewId() { return $this->New_id; }
    public function getContent() { return $this->content; }
    public function getAuthor() { return $this->author; }

    // 联表查询（Comments x News）
    public function getNews() {
        return $this->hasOne(news::className(), ['id' => 'New_id']);
    }
}
