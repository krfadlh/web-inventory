<?php

namespace backend\controllers;

use Yii;
use common\models\Menjual\Menjual;
use common\models\Menjual\MenjualSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MenjualController implements the CRUD actions for Menjual model.
 */
class MenjualController extends Controller
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
     * Lists all Menjual models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MenjualSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Menjual model.
     * @param string $id_member
     * @param string $id_barang
     * @param string $id_agen
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_member, $id_barang, $id_agen)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_member, $id_barang, $id_agen),
        ]);
    }

    /**
     * Creates a new Menjual model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Menjual();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_member' => $model->id_member, 'id_barang' => $model->id_barang, 'id_agen' => $model->id_agen]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Menjual model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_member
     * @param string $id_barang
     * @param string $id_agen
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_member, $id_barang, $id_agen)
    {
        $model = $this->findModel($id_member, $id_barang, $id_agen);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_member' => $model->id_member, 'id_barang' => $model->id_barang, 'id_agen' => $model->id_agen]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Menjual model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_member
     * @param string $id_barang
     * @param string $id_agen
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_member, $id_barang, $id_agen)
    {
        $this->findModel($id_member, $id_barang, $id_agen)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Menjual model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_member
     * @param string $id_barang
     * @param string $id_agen
     * @return Menjual the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_member, $id_barang, $id_agen)
    {
        if (($model = Menjual::findOne(['id_member' => $id_member, 'id_barang' => $id_barang, 'id_agen' => $id_agen])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
