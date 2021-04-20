<?php



if($this->input->post('submit')){
    echo "Coming Soon!" . "<br>";
    echo $this->input->post('first_name') . "<br>";
    echo $this->input->post('last_name') . "<br>";
    echo $this->input->post('email_address') . "<br>";
}
else{
    $this->load->helper('url');


    /*Redirect the user to some site*/
    redirect('users/');
}