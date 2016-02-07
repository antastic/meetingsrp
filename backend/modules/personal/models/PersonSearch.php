<?php

namespace backend\modules\personal\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Person;

/**
 * PersonSearch represents the model behind the search form about `common\models\Person`.
 */
class PersonSearch extends Person
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'dep_id'], 'integer'],
            [['fname', 'lname', 'addr', 'tel', 'photo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Person::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'user_id' => $this->user_id,
            'dep_id' => $this->dep_id,
        ]);

        $query->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'addr', $this->addr])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
