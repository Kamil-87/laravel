<?php

namespace App;

/*use Illuminate\Database\Eloquent\Model;*/

class News
{
    private static $news = [
        1 => [
            'id' => 1,
            'title' => 'Новость 1',
            'text' => 'Первая новость, хорошая!!!! из категории 1',
            'category_id' => 1,
            'isPrivate' => true,
        ],
        2 =>  [
            'id' => 2,
            'title' => 'Новость 2',
            'text' => 'Вторая новость, плохая!! из категории 1',
            'category_id' => 1,
            'isPrivate' => false,
        ],
        3 => [
            'id' => 3,
            'title' => 'Новость 3',
            'text' => 'Первая новость, хорошая!!!! из категории 2',
            'category_id' => 2,
            'isPrivate' => false,
        ],
        4 =>  [
            'id' => 4,
            'title' => 'Новость 4',
            'text' => 'Вторая новость, плохая!! из категории 2',
            'category_id' => 2,
            'isPrivate' => true,
        ],
    ];

    public static function getNews() {
        return static::$news;
    }

    public static function getNewsId($id) {
        return static::$news[$id];
    }

    public static function getNewsByCategoriesName($name) {
        $id = Category::getCategoryIdByName($name);
        $news = [];
        foreach (static::$news as $item) {
            if ($item['category_id'] == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }
}
