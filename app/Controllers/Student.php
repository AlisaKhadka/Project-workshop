<?php
namespace App\controllers;
use Config\Database;
class Student extends BaseController
{
    public function index()
    {
        $db= Database::connect();
        $query= $db->query("select * from user");
        $userlist= $query->getResultArray();
        // var_dump($userlist);
        // die();
        return View('student/index',['data'=> $userlist]);
        
    }
    // {
    //     return view('student/index');
    // }
    // public function new()
    // {
    //     // if(!$_this)//
    //     return view('student/new');
    // }

    // }
// }
//    


    public function edit(){
        // try {
            $db = Database::connect();
            $id = $this->request->getGet('id');
            if(!$id) throw new \Exception("Id not provided for edit");
            $user = $db->query("Select * from user where id=".$id)->getRowObject();
            if(!$this->request->is('post')) return View('student/edit', ['user' => $user]);
            $data = $this->request->getPost();
            $db->table('user')->where('id', $id)->update($data);
            $this->_clientNotification->addSuccessMessage("Faculty updated successfully");
            return redirect()->to('/student');
        // }
        // catch (\Exception $e){
        //     var_dump($e);
        //     // $this->_clientNotification->addErrorMessage($e->getMessage());
        //     return redirect()->to('/');
        // }
    }

//     public function delete(){
//         try {
//             $db = Database::connect();
//             $id = $this->request->getGet('id');
//             if(!$id) throw new \Exception("Id not provided for delete");
//             $faculty = $db->query("Select * from faculty where id=".$id)->getRowObject();
//             if(!$faculty) throw new \Exception("Invalid id provided for delete");
//             $db->table('faculty')->where('id', $id)->delete();
//             $this->_clientNotification->addSuccessMessage("Faculty deleted successfully");
//             return redirect()->to('/faculty');
//         }
//         catch (\Exception $e){
//             var_dump($e);
//             $this->_clientNotification->addErrorMessage($e->getMessage());
//             return redirect()->to('/');
//         }
}

