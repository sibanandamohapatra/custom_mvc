<?php

    class PagesController extends Controller {
        public function __construct(){  
        }

        public function actionIndex(){
            $data = [
                'title' => 'Welcome',
            ];
            $this->view('pages/index', $data);
        }

        public function actionAbout(){
            $data = [
                'title' => 'About Us',
            ];
            $this->view('pages/index', $data);
        }
    }
