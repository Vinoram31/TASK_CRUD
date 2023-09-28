<?php
class Details extends CI_Controller {
    public function update(){
        extract($_POST);
        $id=$stid;
        $info=[
            'employee_name'=> $stname,
            'employee_id' => $stID,
            'employee_Department'=>$stDepartment
        ];
        $this->load->model('infoModel');
        $result = $this->infoModel->updateData($info,$id);
        if($result){
            $this->fetchdata();
        }
    }
    public function edit($id){
        $this->load->model('infoModel');
        $result['info']= $this->infoModel->editdata($id);
        $this->load->view('infodisplay',$result);
    }
    
    public function Employee(){
        $mes['msg']='EMPLYEE DETAILS';
        $this->load->view('employee_details',$mes);
    }

    public function saveData(){
        extract($_POST);
        //echo $stname.' '.$stID.' '.$stDepartment;
        $info = [
        'employee_name'=> $stname,
        'employee_id' => $stID,
        'employee_Department'=>$stDepartment
    ];

     $this->load->model('InfoModel');
    $result = $this->InfoModel->insertData($info);

    if($result){
        $res['status']='Successfully inserted';
        //redirect(base_url('register/student'));
        $this->load->view('employee_details',$res);
    }else{
        $res['status']='ERROR while inserting data';
        $this->load->view('employee_details',$res);
    } 
}
    
public function fetchdata(){
        $this->load->model('infoModel');
        $result['table'] = $this->infoModel->getRecord();
        $this->load->view('infodisplay',$result);

        


    }
}