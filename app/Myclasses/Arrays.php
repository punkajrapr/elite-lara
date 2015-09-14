<?php
/**
 * Created by PhpStorm.
 * User: egorg_000
 * Date: 21.06.2015
 * Time: 13:05
 */

namespace App\Myclasses;


use App\Moderation;

class Arrays {
    public static function allStarsArray() {
        return array('A', 'F', 'G', 'K', 'M', 'B', 'AeBe', 'C', 'D', 'MS', 'L', 'T', 'TTS', 'Y', 'W', 'N', 'BH', 'O', 'S');
    }

    public static function planetTypeArray() {
        switch(\App::getLocale())
        {
            case 'ru':
                return array('Т-металлик', 'Т-водные', 'Т-каменистые', 'Землеподобные', 'Водные', 'Аммиачные');
            default:
                return array('T-high metal', 'T-water world', 'T-rocky world', 'Earth-likes', 'Water worlds', 'Ammonia worlds');
        }
    }

    public static function planetsForCabinet(){
        return array('T-HM', 'T-WW', 'T-RW', 'EL', 'WW', 'AW');
    }

    public static function sizeTypeArray() {
        return array('0', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII');
    }

    public static function stopList() {
        return array(5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18);
    }

    public static function colorList() {
        switch(\App::getLocale()) {
            case 'ru':
                return array('Т-металлик'=>'rgb(255, 107, 1)',
                    'Т-водные' =>'rgb(0, 209, 242)',
                    'Т-каменистые'=>'rgb(163, 82, 0)',
                    'Землеподобные'=>'rgb(0, 132, 0)',
                    'Водные'=>'rgb(119, 152, 191)',
                    'Аммиачные'=>'rgb(102, 51, 0)',
                    'M'=>'rgb(255, 107, 1)',
                    'K'=>'rgb(255, 204, 0)',
                    'G'=>'rgb(255, 255, 0)',
                    'F'=>'rgb(255, 255, 153)',
                    'A'=>'rgb(240, 255, 255)',
                    'редкие'=>'rgb(204, 153, 255)',
                    'аммиачные'=>'rgb(102, 51, 0)',
                    'водные не пригодные к ТФ'=>'rgb(119, 152, 191)',
                    'пригодные к ТФ без земных'=>'rgb(0, 255, 255)',
                    'земные и пригодные к ТФ'=>'rgb(102, 255, 153)',
                    'водные всех типов'=>'rgb(0,0,255)',
                    'земные'=>'rgb(0, 132, 0)');
            default:
                return array('T-high metal' => 'rgb(255, 107, 1)',
                    'T-water world' => 'rgb(0, 209, 242)',
                    'T-rocky world' => 'rgb(163, 82, 0)',
                    'Earth-likes' => 'rgb(0, 132, 0)',
                    'Water worlds' => 'rgb(119, 152, 191)',
                    'Ammonia worlds' => 'rgb(102, 51, 0)',
                    'M' => 'rgb(255, 107, 1)',
                    'K' => 'rgb(255, 204, 0)',
                    'G' => 'rgb(255, 255, 0)',
                    'F' => 'rgb(255, 255, 153)',
                    'A' => 'rgb(240, 255, 255)',
                    'редкие' => 'rgb(204, 153, 255)',
                    'аммиачные' => 'rgb(102, 51, 0)',
                    'водные не пригодные к ТФ' => 'rgb(119, 152, 191)',
                    'пригодные к ТФ без земных' => 'rgb(0, 255, 255)',
                    'Earth-likes and TF suitable' => 'rgb(102, 255, 153)',
                    'water worlds of all types' => 'rgb(0,0,255)',
                    'Earth-likes planets' => 'rgb(0, 132, 0)');
        }
    }

    public static function rankList() {
        switch(\App::getLocale())
        {
            case 'ru':
                return array('Новичок', 'Почти новичок', 'Разведчик', 'Инспектор', 'Пионер', 'Следопыт', 'Рейнджер', 'Первопроходец', 'Элита');
            default:
                return array('Aimless', 'Mostly-Aimless', 'Scout', 'Surveyor', 'Trailblazer', 'Pathfinder', 'Ranger', 'Pioneer', 'Elite');
        }

    }
    public static function rankLogo() {
        return array('Aimless.png', 'Mostly-Aimless.png', 'Scout.png', 'Surveyor.png', 'Trailblazer.png', 'Pathfinder.png', 'Ranger.png', 'Pioneer.png', 'Elite.png');

    }

    public static function moderationMarks(){
        switch(\App::getLocale())
        {
            case 'ru':
                return ['danger'=>'превышение зоны распределения', 'warning'=>'слишком мало соседей'];
            default:
                return ['danger'=>'Excesses spreading zone', 'warning'=>'Not sufficient neighbours'];
        }
    }
    public static function cabinetRouts(){
        switch(\App::getLocale())
        {
            case 'ru':
                return ['cabinet'=>'Статистика', 'discovery'=>'Журнал систем', 'usermail'=>'Почта'];
            default:
                return ['cabinet'=>'Statistics', 'discovery'=>'Discovery log', 'usermail'=>'Mail'];
        }
    }
    public static function adminRouts(){
        switch(\App::getLocale())
        {
            case 'ru':
                return ['administration'=>'Системы на модерацию', 'adminmail'=>'Почта', 'search'=>'Поиск по базе'];
            default:
                return ['administration'=>'For moderation', 'adminmail'=>'Mail', 'search'=>'Advanced Search'];
        }
    }
    public static function moderRouts(){
        switch(\App::getLocale())
        {
            case 'ru':
                return ['moderation'=>'Главная', 'recent'=>'Особые регионы', 'reader'=>'Пакетный ввод', 'roles'=>'Доступ пользователей', 'texts'=>'Тексты на сайт', 'multi'=>'Многозвездные системы'];
            default:
                return ['moderation'=>'Main', 'recent'=>'Regions', 'reader'=>'Downloads', 'roles'=>'Users', 'texts'=>'Texts', 'multi'=>'Multistars'];
        }
    }

    public static function nameStar(\App\Star $star)
    {
        $starName=self::allStarsArray();
        $sizeName=self::sizeTypeArray();

        if($star->star == 15 || $star->star==16) {
            return $starName[$star->star];
        }
        else {
            return $starName[$star->star].$star->class." ".$sizeName[$star->size];
        }
    }


    public static function translate($locale)
    {
        $en=[
                'Т-металлик'=>'T-high metal',
                'Т-водные'=>'T-water world',
                'Т-каменистые'=>'T-rocky world',
                'Землеподобные'=>'Earth-likes',
                'Водные'=>'Water worlds',
                'Аммиачные'=>'Ammonia worlds'];
        $ru=[
            'T-high metal'=>'Т-металлик',
            'T-water world'=>'Т-водные',
            'T-rocky world'=>'Т-каменистые',
            'Earth-likes'=>'Землеподобные',
            'Water worlds'=>'Водные',
            'Ammonia worlds'=>'Аммиачные'];

        switch($locale)
        {
            case 'ru':
                return $ru;
            case 'en':
                return $en;
        }
    }


}