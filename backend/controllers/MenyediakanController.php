<?php

namespace backend\controllers;

use Yii;
use common\models\Menyediakan\Menyediakan;
use common\models\Menyediakan\MenyediakanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MenyediakanController implements the CRUD actions for Menyediakan model.
 */
class MenyediakanController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Menyediakan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MenyediakanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Menyediakan model.
     * @param string $Id_barang
     * @param string $id_supplier
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_barang, $id_supplier)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_barang, $id_supplier),
        ]);
    }

    /**
     * Creates a new Menyediakan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Menyediakan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_barang' => $model->Id_barang, 'id_supplier' => $model->id_supplier]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Menyediakan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Id_barang
     * @param string $id_supplier
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_barang, $id_supplier)
    {
        $model = $this->findModel($Id_barang, $id_supplier);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_barang' => $model->Id_barang, 'id_supplier' => $model->id_supplier]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Menyediakan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Id_barang
     * @param string $id_supplier
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_barang, $id_supplier)
    {
        $this->findModel($Id_barang, $id_supplier)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Menyediakan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Id_barang
     * @param string $id_supplier
     * @return Menyediakan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_barang, $id_supplier)
    {
        if (($model = Menyediakan::findOne(['Id_barang' => $Id_barang, 'id_supplier' => $id_supplier])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
