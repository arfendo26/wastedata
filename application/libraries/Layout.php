<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Template : untuk meng-handle layout aplikasi
 */
class Layout {

    /**
     * instance dari CodeIgniter
     * @var object
     */
    private $CI;

    /**
     * template data untuk memuat data yang akan ditampilkan di layout
     * @var array
     */
    private $template_data = array();

    /**
     * list file js yang akan di-load ke layout
     * @var array
     */
    protected $list_js = array();

    /**
     * list file css yang akan di-load ke layout
     * @var array
     */
    protected $list_css = array();

    /**
     * nama menu modul yang akan di muat ke template
     * default-nya menu dashboard
     * @var string
     */
    protected $dashboard_menu = 'dashboard';

    /**
     * konstruktor class Template
     */
    public function __construct()
    {
        $this->CI = get_instance();

        // $this->init_list_css();
        // $this->init_list_js();
    }

    /**
     * fungsi untuk memasukkan value ke dalam suatu bagian layout
     * @param string $content_area  nama content area
     * @param mixed  $value         value yang akan ditampilkan
     */
    public function set($content_area, $value)
    {
        $this->template_data[$content_area] = $value;
    }

    /**
     * fungsi untuk menampilkan layout
     * @param  string  $view_name nama view sesuai dengan method yang dipanggil
     * @param  string  $template  nama template yang akan dimuat
     * @param  array   $view_data data yang akan ditampilkan pada view
     * @param  string  $name      nama bagian layout yang akan ditempati view
     */
    public function view($view_name, array $view_data, $template = 'back', $content_area = 'content')
    {
        if ($template == 'back') {

            $this->set('list_css', $this->list_css);
            $this->set('list_js', $this->list_js);
        }

        $this->set($content_area, $this->CI->load->view($view_name, $view_data, TRUE));

        $this->CI->load->view('layout/'.$template, $this->template_data);
    }


    /**
     * menambahkan css baru untuk di-load ke layout
     */
    public function add_css($url_css)
    {
        $this->list_css[] = $url_css;
    }

    /**
     * menambahkan js baru untuk di-load ke layout
     * @param [type] $url_js [description]
     */
    public function add_js($url_js)
    {
        $this->list_js[] = $url_js;
    }

    /**
     * mendapatkan list css default
     * @return array list css default layout
     */
    public function init_list_css()
    {
        // ini default css
        $this->list_css = array(
            base_url('assets/css/bootstrap.css'),        );
    }

    /**
     * mendapatkan list js default layout
     * @return array list js default layout
     */
    public function init_list_js()
    {
        // init default js
        $this->list_js = array(
            base_url('assets/js/Chart.min.js'),
            base_url('assets/js/jquery-3.4.1.min.js'),
            base_url('assets/js/bootstrap.bundle.min.js'),
            base_url('assets/js/contact.js'),
            base_url('assets/js/countdown.js'),
            base_url('assets/js/jquery.ajaxchimp.min.js'),
            base_url('assets/js/jquery.form.js'),
            base_url('assets/js/jquery.magnific-popup.min.js'),
            base_url('assets/js/jquery.validate.min.js'),
            base_url('assets/js/jquery-3.4.1.min.js'),
            base_url('assets/js/mail-script.js'),
            base_url('assets/js/main.js'),
            base_url('assets/js/skrollr.min.js'),
        );
    }
}
