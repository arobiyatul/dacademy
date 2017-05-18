<?php

namespace frontend\controllers;

class KampusController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$seminar = "Membangung VOIP di Sistem Linux";
    	$data_peserta = [
    		'Isfahani','Aufa','Agung','Robiyatul',
    		'Arrohmani','Alvino','Nirmawati','Aslam'
    	];
        return $this->render('index',[
        	'judulseminar' =>$seminar,
        	'pembicara' => 'Drs. Rusmanto M.M',
        	'pesertas' => $data_peserta
        	]);
    }

}
