<?php

namespace app\modules\v1\models;

/**
 * This is the ActiveQuery class for [[EmpresaProducto]].
 *
 * @see EmpresaProducto
 */
class EmpresaProductoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return EmpresaProducto[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return EmpresaProducto|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
