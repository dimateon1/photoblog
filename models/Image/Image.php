<?php

/**
 * Created by PhpStorm.
 * User: sett
 * Date: 27.11.15
 * Time: 21:50
 */
abstract class Image
{

    protected $categoryBehavior;

    protected $imageSize;
    protected $image;
    protected $image_type;





    public static function checkType($image) {

        $tmp = $image['tmp_name'];
        $a = getimagesize($tmp);
        $image_type = $a[2];

        if(in_array($image_type ,
            array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG , IMAGETYPE_BMP)))
        {
            return true;
        }
        throw new Exception("Неверный тип файла");
    }

    public static function checkSize($image)
    {
        $size = $image['size'];

        if($size > 2000000) {
            return false;
        }
        return true;
    }

    public static function checkImageResolution($image)
    {
        $path = $image['tmp_name'];
        $ImageSize = getimagesize($path);
        $width = $ImageSize[0];
        $height = $ImageSize[1];
        $imagesize = array();
        $imagesize[0] = $width;
        $imagesize[1] = $height;

        if($imagesize[0] > 1000 && $imagesize > 600){
            return true;
        }
        throw new Exception("Слишком низкое разрешение изображения");
    }




    public  function getCategory() {
        $this->categoryBehavior->category();

    }

    public static function prepareSave($user_id, $category) {

        $galleryPath = '/uploads/';
        $photo_save = $_FILES['image']['tmp_name'];
        $name = md5($photo_save);
        $dir = substr(md5(microtime()), mt_rand(0, 30), 2) . '/' . substr(md5(microtime()), mt_rand(0, 30), 2);
        $folder_path = ROOT . $galleryPath . $user_id . '/' . $category . '/' . $dir ;
        echo $folder_path;
        if (!is_dir($folder_path)){
        mkdir($folder_path, 0777, true);
        }
        $path =  $galleryPath . $user_id . '/' . $category . '/' . $dir ;


        return $path;

    }


    abstract public function save($path, $image);

    public static function viewBehavior($result)
    {

        $i = 0;
        while ($row = $result->fetch()) {
            $returnParams[$i]['id'] = $row['id'];
            $returnParams[$i]['linkfull'] = $row['linkfull'];
            $returnParams[$i]['linkthumb'] = $row['linkthumb'];
            $returnParams[$i]['category'] = $row['category'];
            $returnParams[$i]['id_user'] = $row['id_user'];
            $returnParams[$i]['likes'] = $row['likes'];
            $returnParams[$i]['date'] = $row['date'];
            $returnParams[$i]['views'] = $row['views'];
            $i++;
        }
        return $returnParams;
    }



}