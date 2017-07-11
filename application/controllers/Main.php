<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->blade->sebarno('ctrl', $this);
		$this->load->model('m_config');
		$this->load->model('m_artikel');
		$this->load->model('m_kategori');
		$this->load->model('m_album');
		$this->load->model('m_gambar');
		$this->load->model('m_potensi');
		$this->load->model('m_produk');

		$this->data['config'] 			= $this->m_config->ambil('config',1)->row();
	}

	public function index()
	{
		$data            = $this->data;
		$data['menu']    = "home";
		echo $this->blade->nggambar('main.home',$data);
	}

	public function profil()
	{
		$data         = $this->data;
		$data['menu'] = "profil";
		echo $this->blade->nggambar('main.profil',$data);
	}

	public function gallery()
	{
		$data         = $this->data;
		$data['menu'] = "gallery";
		echo $this->blade->nggambar('main.gallery',$data);
	}

	public function contact()
	{
		$data         = $this->data;
		$data['menu'] = "contact";
		echo $this->blade->nggambar('main.contact',$data);
	}

	public function artikel($id=null)
	{
		$data         = $this->data;
		$data['menu'] = "artikel";
		if ($id!=null) {
			$data['menu'] = "detail";
			echo $this->blade->nggambar('main.artikel.detail',$data);
		}
		echo $this->blade->nggambar('main.artikel.index',$data);
	}

	public function produk($id=null)
	{
		$data         = $this->data;
		$data['menu'] = "produk";
		if ($id!=null) {
			$data['menu'] = "detail";
			echo $this->blade->nggambar('main.produk.detail',$data);
		}
		echo $this->blade->nggambar('main.produk.index',$data);
	}

	public function potensi($id=null)
	{
		$data         = $this->data;
		$data['menu'] = "potensi";
		if ($id!=null) {
			$data['menu'] = "detail";
			echo $this->blade->nggambar('main.potensi.detail',$data);
		}
		echo $this->blade->nggambar('main.potensi.index',$data);
	}

	public function email($type){
		$data 		= $this->data;

		switch ($type) {
			case 'register':
				$data             	 = $this->data;
				$where = array(
					'id_member' => '2039'
				);
				$data['member']		= $this->m_member->detail($where,'member')->row();
				echo $this->blade->nggambar('email.member.register',$data);	
				break;
			default:
				exit('opps');
				break;
		}
		
	}

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */