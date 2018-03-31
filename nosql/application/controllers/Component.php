<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Component extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->model('component_model');
    }

    public function index()
    {
        redirect('welcome');
    }

    public function new()
    {
        $this->load->view('component/create');
    }

    public function create()
    {
        $c_price = array(
        'p_price' => $this->input->post('c_price->p_price'),
        'p_date' => date("Y-m-d")
        );
        $c_compatibility = array('type' => $this->input->post('c_compatibility->c_type'));
        $data = array(
          'c_brand' => $this->input->post('c_brand'),
          'c_name' => $this->input->post('c_name'),
          'c_type' => $this->input->post('c_type'),
          'c_code' => $this->input->post('c_code'),
          'c_price' => $c_price,
          'c_description' => $this->input->post('c_description'),
          'c_compatibility' => $c_compatibility
        );

        $insertedId = $this->component_model->create($data);
        $this->session->set_flashdata('success', 'The component was successfully added to the database');
        redirect('welcome');
    }

    public function get_update()
    {
        $component = $this->component_model->read($this->input->post('composant_id'));
        $this->load->view('component/update', $component);
    }

    public function update()
    {
        $id = $this->input->post('_id');

        $c_price = array(
        'p_price' => $this->input->post('c_price->p_price'),
        'p_date' => date("Y-m-d")
        );
        $c_compatibility = array('type' => $this->input->post('c_compatibility->c_type'));

        $data = array(
          'c_brand' => $this->input->post('c_brand'),
          'c_name' => $this->input->post('c_name'),
          'c_type' => $this->input->post('c_type'),
          'c_code' => $this->input->post('c_code'),
          'c_price' => $c_price,
          'c_description' => $this->input->post('c_description'),
          'c_compatibility' => $c_compatibility
        );

        $this->component_model->updateOne($id, $data);
        $this->session->set_flashdata('success', 'The component was updated successfully');
        redirect('welcome');
    }

    public function delete()
    {
        $id = $this->input->post('composant_id');

        $nbdeleted = $this->component_model->deleteOne($id);
        $this->session->set_flashdata('success', 'The component was successfully removed from the database');
        redirect('welcome');
    }

    public function search()
    {
        $word = $this->input->post('search');
        $c_price = array(
      'p_price' => (int)$word
      );
        $s1 = array('c_brand' => $word );
        $data['c_brand'] = $this->component_model->getElementByKey($s1);
        $s2 = array('c_name' => $word );
        $data['c_name'] = $this->component_model->getElementByKey($s2);
        $s3 = array('c_type' => $word );
        $data['c_type'] = $this->component_model->getElementByKey($s3);
        $s4 = array('c_price' => $c_price );
        $data['c_price'] = $this->component_model->getElementByKey($s4);

        $this->load->view('component/search_result', $data);
    }
}

/* End of file Composant.php */
/* Location: ./application/controllers/Composant.php */
