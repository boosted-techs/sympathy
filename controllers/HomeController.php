<?php
class HomeController extends BaseController {
    function index() {
        $this->view->render("home");
    }

    function contactUs() {
        $this->view->render("contact");
    }
    function about() {
        $this->view->render("about");
    }
}