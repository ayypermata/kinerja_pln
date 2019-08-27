<?php


class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('menu_model');
    }
    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu telah ditambahkan.</div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');



        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active'),
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">SubMenu telah ditambahkan.</div>');
            redirect('menu/submenu');
        }
    }

    public function kpi()
    {
        $data['title'] = 'KPI';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['pers'] = $this->db->get('perspektif_isi')->result_array();

        $this->form_validation->set_rules('kode_perspektif', 'Kode Perspektif', 'required');
        $this->form_validation->set_rules('indikator', 'indikator', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/kpi', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kode_perspektif' => $this->input->post('kode_perspektif'),
                'indikator' => $this->input->post('indikator'),
                'polaritas' => $this->input->post('polaritas'),
                'satuan' => $this->input->post('satuan'),
                'bobot' => $this->input->post('bobot'),
                'target_tahunan' => $this->input->post('targettahunan'),
                'target_bulanan' => $this->input->post('targetbulanan'),
                'real' => $this->input->post('real'),

            ];
            $this->db->insert('perspektif_isi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Perspektif telah ditambahkan.</div>');
            redirect('menu/kpi');
        }
    }
    public function target_perspektif()
    {
        $data['title'] = 'Target Perspektif';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['target_pelanggan'] = $this->menu_model->getAllData('tbl_target_penambahan_pelanggan');

        $this->form_validation->set_rules('nama_unit', 'Nama Unit', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/target_perspektif', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_unit' => $this->input->post('nama_unit'),
                'jan' => $this->input->post('jan'),
                'feb' => $this->input->post('feb'),
                'mar' => $this->input->post('mar'),
                'apr' => $this->input->post('apr'),
                'mei' => $this->input->post('mar'),
                'jun' => $this->input->post('jun'),
                'jul' => $this->input->post('jul'),
                'agu' => $this->input->post('agu'),
                'sep' => $this->input->post('sep'),
                'okt' => $this->input->post('okt'),
                'nov' => $this->input->post('nov'),
                'des' => $this->input->post('des'),
            ];
            $this->db->insert('tbl_target_penambahan_pelanggan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Penambahan Pelanggan telah ditambahkan.</div>');
            redirect('menu/target_perspektif');
        }
    }
    public function update_data_target($id)
    {
        $data['title'] = 'Edit Data';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_pelanggan'] = $this->menu_model->getAllData('tbl_target_penambahan_pelanggan');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/edit_data_target_pelanggan', $data);
        $this->load->view('templates/footer');
    }

    public function proses_data_target()
    {
        $data = array(
            'jan' => $this->input->post('jan'),
            'feb' => $this->input->post('feb'),
            'mar' => $this->input->post('mar'),
            'apr' => $this->input->post('apr'),
            'mei' => $this->input->post('mar'),
            'jun' => $this->input->post('jun'),
            'jul' => $this->input->post('jul'),
            'agu' => $this->input->post('agu'),
            'sep' => $this->input->post('sep'),
            'okt' => $this->input->post('okt'),
            'nov' => $this->input->post('nov'),
            'des' => $this->input->post('des'),
        );

        $this->menu_model->updateData('tbl_target_penambahan_pelanggan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Penambahan Pelanggan telah diupdate.</div>');
        redirect('menu/target_perspektif');
    }
}

// 'jan' => $this->input->post('jan'),
// 'feb' => $this->input->post('feb'),
// 'mar' => $this->input->post('mar'),
// 'apr' => $this->input->post('apr'),
// 'mei' => $this->input->post('mar'),
// 'jun' => $this->input->post('jun'),
// 'jul' => $this->input->post('jul'),
// 'agu' => $this->input->post('agu'),
// 'sep' => $this->input->post('sep'),
// 'okt' => $this->input->post('okt'),
// 'nov' => $this->input->post('nov'),
// 'des' => $this->input->post('des'),
