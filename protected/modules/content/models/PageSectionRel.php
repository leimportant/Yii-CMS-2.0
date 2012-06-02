<?

class PageSectionRel extends ActiveRecord
{
    const PAGE_SIZE = 20;



    public function name()
    {
        return 'PageSectionRel';
    }


    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }


    public function tableName()
    {
        return 'pages_sections_rels';
    }


    public function rules()
    {
        return array(
            array(
                'page_id, section_id',
                'required'
            ),

            array(
                '',
                'unique'
            ),
        );
    }


    public function relations()
    {
        return array(
        );
    }


    public function search()
    {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id, true);
        $criteria->compare('page_id', $this->page_id, true);
        $criteria->compare('section_id', $this->section_id, true);

        return new ActiveDataProvider(get_class($this), array(
            'criteria'   => $criteria,
            'pagination' =>array(
                'pageSize' => self::PAGE_SIZE
            )
        ));
    }


    public function getHref()
    {
        return Yii::app()->createUrl('/content/pagesectionrel/view', array('id' => $this->id));
    }


    public function uploadFiles()
    {
        return array(
        );
    }
}