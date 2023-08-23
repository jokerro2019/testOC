<?php
class ControllerExtensionModuleTestModule extends Controller {
    public function index($setting) {

        //#4
        $this->load->model('tool/string');

        echo $this->model_tool_string->editString('');

        if ($this->customer->getId()) {
            $registration = true;
        } else {
            $registration = false;
        }

        $data['registration'] = $registration;

        $link = mysqli_connect('localhost', 'root', '', 'testoc');

        if (mysqli_connect_error()) {
            echo 'ОШИБКА ('.mysqli_connect_errno().')';
            exit();
        }

        date_default_timezone_set('Europe/Kiev');

        $time = date("H:i:s");
        $date = date('Y-m-d');
        $maketemp = "INSERT INTO oc_test_time (time,date) VALUES('$time', '$date')";

        mysqli_query($link, $maketemp);

        mysqli_close($link);

            $data['heading_title'] = html_entity_decode($setting['name'], ENT_QUOTES, 'UTF-8');
            $data['text'] = html_entity_decode($setting['text'], ENT_QUOTES, 'UTF-8');

            return $this->load->view('extension/module/test_module', $data);
    }
}