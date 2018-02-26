<?php
  class Controller {
    protected $load;
    protected $user;

    function __construct() {
      $this->load = new Load();
      $this->user = new User();
      $this->home();
    }

    function home() {
      $data = $this->user->getName();
      $this->load->view('view.php', $data);
    }

  }
?>
