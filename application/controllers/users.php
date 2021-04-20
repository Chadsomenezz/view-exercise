<?php


class Users extends CI_Controller
{

    public function index(){
        echo "hello users!";
    }
    public function new(){
        $this->load->view("new");
    }

    public function create(){
        $this->load->view("create");
    }

    public function count(){
        $this->load->view("count");
    }

    public function reset(){

        $this->load->view("reset");

    }

    public function say($word = "default", $num = 0){
        $data["word"] = $word;
        $data["num"] = $num;
        $this->load->view("say",$data);
    }


    public function show(){
//        $this->load->model("user_model");


        $data['results'] = $this->user_model->get_users();


        $this->load->view('user_view',$data);

//        foreach ($results as $result){
//            echo "$result->username <br>";
//        }
    }


    public function mprep()
    {
        $view_data = array(
            'name' => "Michael Choi",
            'age'  => 40,
            'location' => "Seattle, WA",
            'hobbies' => array( "Basketball", "Soccer", "Coding", "Teaching", "Kdramas")
        );
        $this->load->view('mprep', $view_data);
    }


}

?>