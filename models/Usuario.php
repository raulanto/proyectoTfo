<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $nombre
 * @property string $appat
 * @property string $appmat
 * @property string $genero
 * @property string|null $telefono
 * @property string|null $fecha
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'appat', 'appmat', 'genero'], 'required'],
            [['fecha'], 'safe'],
            [['nombre'], 'string', 'max' => 90],
            [['appat', 'appmat'], 'string', 'max' => 60],
            [['genero'], 'string', 'max' => 1],
            [['telefono'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'appat' => 'Appat',
            'appmat' => 'Appmat',
            'genero' => 'Genero',
            'telefono' => 'Telefono',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * {@inheritdoc}
     * @return UsuarioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsuarioQuery(get_called_class());
    }
}
