<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Template
{
    public $template_data = array();

    public function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

    public function load($template = '', $view = '', $view_data = array(), $return = FALSE)
    {
        $this->CI =& get_instance();
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
        $this->set('menu', $this->CI->load->view('layout/header', $view_data, TRUE));
        $this->set('footer', $this->CI->load->view('layout/footer', $view_data, TRUE));
        return $this->CI->load->view($template, $this->template_data, $return);
    }
}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */
