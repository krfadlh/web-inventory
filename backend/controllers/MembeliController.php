<?php

namespace backend\controllers;

use Yii;
use common\models\Membeli\Membeli;
use common\models\Membeli\MembeliSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MembeliController implements the CRUD actions for Membeli model.
 */
class MembeliController extends Controller
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
     * Lists all Membeli models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MembeliSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Membeli model.
     * @param string $id_barang
     * @param string $id_agen
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_barang, $id_agen)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_barang, $id_agen),
        ]);
    }

    /**
     * Creates a new Membeli model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Membeli();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_barang' => $model->id_barang, 'id_agen' => $model->id_agen]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Membeli model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_barang
     * @param string $id_agen
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_barang, $id_agen)
    {
        $model = $this->findModel($id_barang, $id_agen);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_barang' => $model->id_barang, 'id_agen' => $model->id_agen]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Membeli model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_barang
     * @param string $id_agen
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_barang, $id_agen)
    {
        $this->findModel($id_barang, $id_agen)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Membeli model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_barang
     * @param string $id_agen
     * @return Membeli the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_barang, $id_agen)
    {
        if (($model = Membeli::findOne(['id_barang' => $id_barang, 'id_agen' => $id_agen])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
