<?php defined('BASEPATH') || exit('No direct script access allowed');

class Admin_Controller extends Base_Controller
{
    protected $pager;
    protected $limit;
    protected $user_data;

    public function __construct()
    {
        $this->autoload['helpers'][]   = 'form';
        $this->autoload['libraries'][] = 'Template';
        $this->autoload['libraries'][] = 'users/auth';

        parent::__construct();

        $this->load->model('identitas_model');
		$this->load->model('cabang_model');

        /*Check If user has logged in*/
        if (!$this->auth->is_login())
        {
            redirect('login');
        }
		
		 if ($this->auth->userdata()->ga_secret && !$this->session->userdata('2fa_verified')) {
            $this->session->set_flashdata('2FA belum diverifikasi. Silakan verifikasi terlebih dahulu.', 'danger');
            redirect('users/verify_2fa');
        } else if (!$this->session->userdata('2fa_verified')) {
            $message = '<h3><strong>Penting!</strong></h3>
            <p>Untuk meningkatkan keamanan akun, mulai per tanggal 1 Juli 2025 di berlakukan pengamanan <storng>Two Factor Authentication (2FA)</storng>. Untuk itu harap meng-aktifkan 2FA pada masing-masing akun. 
             <a href="' . base_url('users/confirm_setup_2fa') . '"><i class="fa fa-key" aria-hidden="true"></i> Akftikan 2FA</a> lihat  <a target="_blank" href="' . base_url('user_guide') . '"><i class="fa fa-book" aria-hidden="true"></i> Panduan</a>. </p>';

            $this->template->set_message($message, 'warning');
        }

        $idt         = $this->identitas_model->find(1);
		

        $this->user_data = $this->auth->userdata();

        $this->form_validation->set_error_delimiters('', '');

        // Pagination config
        $this->pager = array(
            'full_tag_open'     => '<ul class="pagination pull-right" style="margin: 0 0 0;">',
            'full_tag_close'    => '</ul>',
            'next_link'         => '&rarr;',
            'prev_link'         => '&larr;',
            'next_tag_open'     => '<li>',
            'next_tag_close'    => '</li>',
            'prev_tag_open'     => '<li>',
            'prev_tag_close'    => '</li>',
            'first_tag_open'    => '<li>',
            'first_tag_close'   => '</li>',
            'last_tag_open'     => '<li>',
            'last_tag_close'    => '</li>',
            'cur_tag_open'      => '<li class="active"><a href="#">',
            'cur_tag_close'     => '</a></li>',
            'num_tag_open'      => '<li>',
            'num_tag_close'     => '</li>',
        );

        // Basic setup
        $this->template->set('userData', $this->user_data);
        $kdcab          = $this->user_data->kdcab;		
		$cabang         = $this->cabang_model->find_by(array('kdcab' => $kdcab));
        $this->template->set('idt', $idt);
        $this->template->set_theme('admin');
        $this->template->set_layout('index');
		$this->template->set('cabang', $cabang);
        //Overwrite if the request is ajax
        if($this->input->is_ajax_request())
        {
            $this->template->set_layout('ajax');
        }
        
        $this->form_validation->set_error_delimiters('<p>','</p>');
    }
}
/* End of file Admin_Controller.php */
