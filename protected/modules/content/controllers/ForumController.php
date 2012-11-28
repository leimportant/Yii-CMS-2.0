<?php

/**
 * Created by JetBrains PhpStorm.
 * User: artem.ostapetc
 * Date: 26.09.12
 * Time: 15:57
 * To change this template use File | Settings | File Templates.
 */

class ForumController extends ClientController
{
    public static function actionsTitles()
    {
        return [
            'index'         => t('Главная страница форума'),
            'sectionTopics' => t('Топики раздела')
        ];
    }


    public function subMenuItems()
    {
        return [
            [
                'label' => t('Разделы форума'),
                'url'   => ['/content/forum/index']
            ],
            [
                'label' => t('Создать топик'),
                'url'   => '/'
            ]
        ];
    }


    public function actionIndex()
    {
        $this->page_title = '';

        $sections = PageSection::model()->forum()->findAll();

        $this->render('index', [
            'sections' => $sections
        ]);
    }


    public function actionSectionTopics($section_id)
    {
        $section = PageSection::model()->throw404IfNull()->findByPk($section_id);

        $criteria = new CDbCriteria();
        $criteria->compare('status', Page::STATUS_PUBLISHED);
        $criteria->compare('type', Page::TYPE_FORUM);
        $criteria->compare('sections_rels.section_id', $section->id);
        $criteria->with     = ['sections_rels'];
        $criteria->together = true;
        $criteria->order    = 'date_create DESC';

        $data_provider = new CActiveDataProvider('Page', [
            'criteria'   => $criteria,
            'pagination' => [
                'pageSize' => 15
            ]
        ]);

        $this->render('sectionTopics', [
            'pages'      => $data_provider->getData(),
            'pagination' => $data_provider->getPagination()
        ]);
    }
}
