<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superuser extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		if(!$this->session->userdata('auth')){
			redirect('auth');
		}
		$this->blade->sebarno('ctrl', $this);
		$this->load->model('m_profil');
		$this->load->model('m_config');
		$this->load->model('m_header');
		$this->load->model('m_artikel');
		$this->load->model('m_kategori');
		$this->load->model('m_album');
		$this->load->model('m_gambar');
		$this->load->model('m_potensi');
		$this->load->model('m_produk');
		$this->load->model('m_pejabat');
		$this->load->model('m_slider');
		$this->load->model('m_pesan');
		$this->load->library('session');
		$this->data['npesan']			=  $this->m_pesan->detail(array('status' => '0'),'pesan')->num_rows();
		$this->data['config'] 			= $this->m_config->ambil('config',1)->row();
		$this->data['profil'] 			= $this->m_profil->ambil('profil',1)->row();
		$this->data['header'] 			= $this->m_header->ambil('header',1)->row();
	}

	public function index()
	{	
		$data 		= $this->data;
		$data['menu'] = "dashboard";
		echo $this->blade->nggambar('admin.home',$data);
	}
	
	// Start Config
	public function config ($type=null){
		$data         = $this->data;
		// $data         = $this->data;
		$data['menu'] = "config";

		if ($this->input->is_ajax_request()) {

			switch ($type) {

				case 'update':					

					$logoname 		= $data['config']->logo;
					$iconname 		= $data['config']->icon;

					if (!empty($_FILES['logo']['name'])) {
						$upload 	= $this->upload('./assets/images/website/config/logo/','logo','logo');

						if($upload['auth']	== false){
							echo goResult(false,$upload['msg']);
							return;
						}

						$logoname 	= $upload['msg']['file_name'];
						if(!empty($logoname)){remFile(base_url().'assets/images/website/config/logo/'.$data['config']->logo);}
					}

					if (!empty($_FILES['icon']['name'])) {
						$upload 	= $this->upload('./assets/images/website/config/icon/','icon','icon');
						if($upload['auth']	== false){
							echo goResult(false,$upload['msg']);
							return;
						}

						$iconname 	= $upload['msg']['file_name'];
						if(!empty($iconname)){remFile(base_url().'assets/images/website/config/icon/'.$data['config']->icon);}
					}
					
					$id             = 1;
					$name           = $this->input->post('name');
					$email          = $this->input->post('email');
					$phone          = $this->input->post('phone');
					$facebook       = $this->input->post('facebook');
					$instagram      = $this->input->post('instagram');
					$address        = $this->input->post('address');
					$description    = $this->input->post('description');
					$meta_deskripsi = $this->input->post('meta_deskripsi');
					$meta_keyword   = $this->input->post('meta_keyword');
					
					$data = array(
						'name'           => $name,
						'email'          => $email,
						'phone'          => $phone,
						'facebook'       => $facebook,
						'instagram'      => $instagram,
						'address'        => $address,
						'description'    => $description,
						'icon'           => $iconname,
						'logo'           => $logoname,
						'meta_deskripsi' => $meta_deskripsi,
						'meta_keyword'   => $meta_keyword
					);
				 
					$where = array(
						'id' => $id
					);

					if($this->m_config->update_data($where,$data,'config')){
						echo goResult(true,"Data Telah Di Perbarui");
						return;
					}

					break;
				
				default:
					echo goResult(false,"Konfigurasi Telah Di Simpan");
					return;
					break;
			}
		   return;
		}

		echo $this->blade->nggambar('admin.config.index',$data);
		return;
	}
	// End Config
	
	// Start Profil
	public function profil ($type=null){
		$data         = $this->data;
		// $data         = $this->data;
		$data['menu'] = "profil";
		$data['pejabat']  = $this->m_pejabat->tampil_data('pejabat')->result();
		if ($this->input->is_ajax_request()) {
			switch ($type) {

				case 'update':			
					$fotoname 		= $data['profil']->gambar;

					if (!empty($_FILES['foto']['name'])) {
						$upload 	= $this->upload('./assets/images/profil/','foto','profil');
						if($upload['auth']	== false){
							echo goResult(false,$upload['msg']);
							return;
						}

						$fotoname 	= $upload['msg']['file_name'];
						if(!empty($fotoname)){remFile(base_url().'assets/images/profil/'.$data['profil']->gambar);}
					}
					
					$id             = 1;
					$name           = $this->input->post('name');
					$description    = $this->input->post('description');
					
					$data = array(
						'nama_desa' => $name,
						'deskripsi' => $description,
						'gambar'    => $fotoname
					);
				 
					$where = array(
						'id_profil' => $id
					);

					if($this->m_profil->update_data($where,$data,'profil')){
						echo goResult(true,"Data Telah Di Perbarui");
						return;
					}

					break;
				
				default:
					echo goResult(false,"Konfigurasi Telah Di Simpan");
					return;
					break;
			}
		   return;
		}

		echo $this->blade->nggambar('admin.profil.index',$data);
		return;
	}
	// End Profil 
	
	// --------------------------------- Start Header
	public function header ($type=null){
		$data         = $this->data;
		$data['menu'] = "header";

		if ($this->input->is_ajax_request()) {

			switch ($type) {

				case 'update':					
					$profilname  = $data['header']->profil;
					$artikelname = $data['header']->artikel;
					$produkname  = $data['header']->produk;
					$potensiname = $data['header']->potensi;
					$galleryname = $data['header']->gallery;
					$kontakname  = $data['header']->kontak;
					
					$profil      = $data['header']->profil;
					$artikel     = $data['header']->artikel;
					$produk      = $data['header']->produk;
					$potensi     = $data['header']->potensi;
					$gallery     = $data['header']->gallery;
					$kontak      = $data['header']->kontak;

					if (!empty($_FILES['profil']['name'])) {
						$upload 	= $this->upload('./assets/images/header/','profil','profil');

						if($upload['auth']	== false){
							echo goResult(false,$upload['msg']);
							return;
						}

						$profilname 	= $upload['msg']['file_name'];
						if(!empty($profilname)){remFile('./assets/images/header/'.$data['header']->profil);}
					}

					if (!empty($_FILES['artikel']['name'])) {
						$upload 	= $this->upload('./assets/images/header/','artikel','artikel');

						if($upload['auth']	== false){
							echo goResult(false,$upload['msg']);
							return;
						}

						$artikelname 	= $upload['msg']['file_name'];
						if(!empty($artikelname)){remFile('./assets/images/header/'.$data['header']->artikel);}
					}

					if (!empty($_FILES['produk']['name'])) {
						$upload 	= $this->upload('./assets/images/header/','produk','produk');

						if($upload['auth']	== false){
							echo goResult(false,$upload['msg']);
							return;
						}

						$produkname 	= $upload['msg']['file_name'];
						if(!empty($produkname)){remFile('./assets/images/header/'.$data['header']->produk);}
					}

					if (!empty($_FILES['potensi']['name'])) {
						$upload 	= $this->upload('./assets/images/header/','potensi','potensi');

						if($upload['auth']	== false){
							echo goResult(false,$upload['msg']);
							return;
						}

						$potensiname 	= $upload['msg']['file_name'];
						if(!empty($potensiname)){remFile('./assets/images/header/'.$data['header']->potensi);}
					}

					if (!empty($_FILES['gallery']['name'])) {
						$upload 	= $this->upload('./assets/images/header/','gallery','gallery');

						if($upload['auth']	== false){
							echo goResult(false,$upload['msg']);
							return;
						}

						$galleryname 	= $upload['msg']['file_name'];
						if(!empty($galleryname)){remFile('./assets/images/header/'.$data['header']->gallery);}
					}

					if (!empty($_FILES['kontak']['name'])) {
						$upload 	= $this->upload('./assets/images/header/','kontak','kontak');

						if($upload['auth']	== false){
							echo goResult(false,$upload['msg']);
							return;
						}

						$kontakname 	= $upload['msg']['file_name'];
						if(!empty($kontakname)){remFile('./assets/images/header/'.$data['header']->kontak);}
					}
					
					$id             = 1;

					$data = array(
						'profil'  => $profilname,
						'artikel' => $artikelname,
						'produk'  => $produkname,
						'potensi' => $potensiname,
						'gallery' => $galleryname,
						'kontak'  => $kontakname
					);
				 
					$where = array(
						'id_header' => $id
					);

					if($this->m_header->update_data($where,$data,'header')){
						echo goResult(true,"Data Telah Di Perbarui");
						return;
					}

					break;
				
				default:
					echo goResult(false,"Konfigurasi Telah Di Simpan");
					return;
					break;
			}
		   return;
		}

		echo $this->blade->nggambar('admin.header.index',$data);
		return;
	}
	// --------------------------------- END Header

	// --------------------------------- Start Pesan
	public function pesan($url=null,$id=null){
		$data             = $this->data;
		$data['menu']     = "pesan";
		$data['pesan']  = $this->m_pesan->tampil_data('pesan')->result();
		if ($url=="detail") {
			$data['type']  = "update";
			$where         = array('id_pesan' => $id);
			$status		   = array('status' => '1');
			$this->m_pesan->update_data($where,$status,'pesan');
			$data['pesan'] = $this->m_pesan->detail($where,'pesan')->row();
			echo $this->blade->nggambar('admin.pesan.content',$data);
		}else if ($url=="deleted" && $id != null) {
			$where           = array('id_pesan' => $id);
			if ($this->m_pesan->hapus_data($where,'pesan')) {
			
			}
			redirect('superuser/pesan/');
		}else{
			echo $this->blade->nggambar('admin.pesan.index',$data);	
			return;
		}
	}
	// --------------------------------- END Pesan

	// --------------------------------- Start Pejabat
	public function pejabat($url=null,$id=null){
		$data             = $this->data;
		$data['menu']     = "pejabat";
		$data['pejabat']  = $this->m_pejabat->tampil_data('pejabat')->result();
		if ($url=="create") {
			$data['type']			= "create";
			echo $this->blade->nggambar('admin.profil.content',$data);	
			return;
		}else if ($url == "created" && $this->input->is_ajax_request() == true) {
			$nama      = $this->input->post('nama');
			$jabatan   = $this->input->post('jabatan');
			$cover     = time().$_FILES['foto']['name'];
			$cover     = str_replace(' ', '_', $cover);
			$prioritas = $this->input->post('prioritas');

			if (!empty($_FILES['foto']['name'])) {
					$upload 	= $this->upload('./assets/images/pejabat/','foto',$cover);
					if($upload['auth']	== false){
						echo goResult(false,$upload['msg']);
						return;
					}
				}

			$data = array(
				'nama'      => $nama,
				'jabatan'   => $jabatan,
				'foto'      => $cover,
				'prioritas' => $prioritas
			);

			if($this->m_pejabat->input_data($data,'pejabat')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="update" && $id!=null) {
			$data['type']    = "update";
			$where           = array('id_pejabat' => $id);
			$data['pejabat'] = $this->m_pejabat->detail($where,'pejabat')->row();
			echo $this->blade->nggambar('admin.profil.content',$data);
		}
		else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true) {
			$where           = array('id_pejabat' => $id);

			$nama      = $this->input->post('nama');
			$jabatan   = $this->input->post('jabatan');
			$cover     = time().$_FILES['foto']['name'];
			$cover     = str_replace(' ', '_', $cover);
			$prioritas = $this->input->post('prioritas');

			if (!empty($_FILES['foto']['name'])) {
					$upload 	= $this->upload('./assets/images/pejabat/','foto',$cover);
					if($upload['auth']	== false){
						echo goResult(false,$upload['msg']);
						return;
					}
					$data = array(
						'nama'      => $nama,
						'jabatan'   => $jabatan,
						'foto'      => $cover,
						'prioritas' => $prioritas
					);
				}else {
					$data = array(
						'nama'      => $nama,
						'jabatan'   => $jabatan,
						'prioritas' => $prioritas
					);
				}

			

			if($this->m_pejabat->update_data($where,$data,'pejabat')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}

		}
		else if ($url=="deleted" && $id != null) {
			$where           = array('id_pejabat' => $id);
			if ($this->m_pejabat->hapus_data($where,'pejabat')) {
			
			}
			redirect('superuser/pejabat/');
		}else{
			echo $this->blade->nggambar('admin.profil.index',$data);	
			return;
		}
	}
	// --------------------------------- End Pejabat
	
	// --------------------------------- Start Artikel
	public function artikel($url=null,$id=null)
	{	
		$data             = $this->data;
		$data['menu']     = "artikel";
		$data['artikel']  = $this->m_artikel->tampil_data('artikel')->result();
		$data['kategori'] = $this->m_kategori->tampil_data('kategori')->result();

		if ($url=="create") {
			$data['type']			= "create";
			echo $this->blade->nggambar('admin.artikel.content',$data);	
			return;
		}
		else if ($url == "created" && $this->input->is_ajax_request() == true) {
			
			$judul     	= $this->input->post('judul');
			$kategori 	= $this->input->post('kategori');
			$deskripsi  = $this->input->post('deskripsi');
			$cover 		= time().$_FILES['cover']['name'];
			$cover 		= str_replace(' ', '_', $cover);
			$status		= $this->input->post('status');

			if ($status==null) {
				$status = 1;
			}

			if (!empty($_FILES['cover']['name'])) {
					$upload 	= $this->upload('./assets/images/artikel/','cover',$cover);
					if($upload['auth']	== false){
						echo goResult(false,$upload['msg']);
						return;
					}
				}

			$data = array(
				'judul'       => $judul,
				'id_kategori' => $kategori,
				'deskripsi'   => $deskripsi,
				'cover'       => $cover,
				'status'      => $status
			);

			if($this->m_artikel->input_data($data,'artikel')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="update" && $id!=null) {
			$data['type']    = "update";
			$where           = array('id_artikel' => $id);
			$data['artikel'] = $this->m_artikel->detail($where,'artikel')->row();
			echo $this->blade->nggambar('admin.artikel.content',$data);
		}
		else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true) {
			$where           = array('id_artikel' => $id);

			$judul     	= $this->input->post('judul');
			$kategori 	= $this->input->post('kategori');
			$deskripsi  = $this->input->post('deskripsi');
			$cover 		= time().$_FILES['cover']['name'];
			$cover 		= str_replace(' ', '_', $cover);
			$status		= $this->input->post('status');

			if ($status==null) {
				$status = 1;
			}

			if (!empty($_FILES['cover']['name'])) {
					$upload 	= $this->upload('./assets/images/artikel/','cover',$cover);
					if($upload['auth']	== false){
						echo goResult(false,$upload['msg']);
						return;
					}
					$data = array(
						'judul'       => $judul,
						'id_kategori' => $kategori,
						'deskripsi'   => $deskripsi,
						'cover'       => $cover,
						'status'      => $status
					);
				}else{
					$data = array(
						'judul'       => $judul,
						'id_kategori' => $kategori,
						'deskripsi'   => $deskripsi,
						'status'      => $status
					);
				}

			if($this->m_artikel->update_data($where,$data,'artikel')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="deleted" && $id != null) {
			$where           = array('id_artikel' => $id);
			if ($this->m_artikel->hapus_data($where,'artikel')) {
			
			}
			redirect('superuser/artikel/');
		}
		else {
			echo $this->blade->nggambar('admin.artikel.index',$data);	
			return;
		}
	}
	// --------------------------------- End Artikel
	
	
	// --------------------------------- Start potensi
	public function potensi($url=null,$id=null)
	{	
		$data             = $this->data;
		$data['menu']     = "potensi";
		$data['potensi']  = $this->m_potensi->tampil_data('potensi')->result();

		if ($url=="create") {
			$data['type']			= "create";
			echo $this->blade->nggambar('admin.potensi.content',$data);	
			return;
		}
		else if ($url == "created" && $this->input->is_ajax_request() == true) {
			
			$judul     	= $this->input->post('judul');
			$deskripsi  = $this->input->post('deskripsi');
			$cover 		= time().$_FILES['cover']['name'];
			$cover 		= str_replace(' ', '_', $cover);

			if (!empty($_FILES['cover']['name'])) {
					$upload 	= $this->upload('./assets/images/potensi/','cover',$cover);
					if($upload['auth']	== false){
						echo goResult(false,$upload['msg']);
						return;
					}
				}

			$data = array(
				'judul'       => $judul,
				'deskripsi'   => $deskripsi,
				'cover'       => $cover,
			);

			if($this->m_potensi->input_data($data,'potensi')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="update" && $id!=null) {
			$data['type']    = "update";
			$where           = array('id_potensi' => $id);
			$data['potensi'] = $this->m_potensi->detail($where,'potensi')->row();
			echo $this->blade->nggambar('admin.potensi.content',$data);
		}
		else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true) {
			$where           = array('id_potensi' => $id);

			$judul     	= $this->input->post('judul');
			
			$deskripsi  = $this->input->post('deskripsi');
			$cover 		= time().$_FILES['cover']['name'];
			$cover 		= str_replace(' ', '_', $cover);
			

			if (!empty($_FILES['cover']['name'])) {
					$upload 	= $this->upload('./assets/images/potensi/','cover',$cover);
					if($upload['auth']	== false){
						echo goResult(false,$upload['msg']);
						return;
					}
					$data = array(
						'judul'       => $judul,
						'deskripsi'   => $deskripsi,
						'cover'       => $cover,
					);
				}else{
					$data = array(
						'judul'       => $judul,
						'deskripsi'   => $deskripsi,
					);
				}

			if($this->m_potensi->update_data($where,$data,'potensi')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="deleted" && $id != null) {
			$where           = array('id_potensi' => $id);
			if ($this->m_potensi->hapus_data($where,'potensi')) {
			
			}
			redirect('superuser/potensi/');
		}
		else {
			echo $this->blade->nggambar('admin.potensi.index',$data);	
			return;
		}
	}
	// --------------------------------- End Potensi 
	
	// --------------------------------- Start Produk
	public function produk($url=null,$id=null)
	{	
		$data           = $this->data;
		$data['menu']   = "produk";
		$data['produk'] = $this->m_produk->tampil_data('produk')->result();

		if ($url=="create") {
			$data['type']			= "create";
			echo $this->blade->nggambar('admin.produk.content',$data);	
			return;
		}
		else if ($url == "created" && $this->input->is_ajax_request() == true) {
			
			$judul     	= $this->input->post('judul');
			$deskripsi  = $this->input->post('deskripsi');
			$cover 		= time().$_FILES['cover']['name'];
			$cover 		= str_replace(' ', '_', $cover);

			if (!empty($_FILES['cover']['name'])) {
					$upload 	= $this->upload('./assets/images/produk/','cover',$cover);
					if($upload['auth']	== false){
						echo goResult(false,$upload['msg']);
						return;
					}
				}

			$data = array(
				'judul'       => $judul,
				'deskripsi'   => $deskripsi,
				'cover'       => $cover,
			);

			if($this->m_produk->input_data($data,'produk')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="update" && $id!=null) {
			$data['type']   = "update";
			$where          = array('id_produk' => $id);
			$data['produk'] = $this->m_produk->detail($where,'produk')->row();
			echo $this->blade->nggambar('admin.produk.content',$data);
		}
		else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true) {
			$where           = array('id_produk' => $id);

			$judul     	= $this->input->post('judul');
			
			$deskripsi  = $this->input->post('deskripsi');
			$cover 		= time().$_FILES['cover']['name'];
			$cover 		= str_replace(' ', '_', $cover);
			

			if (!empty($_FILES['cover']['name'])) {
					$upload 	= $this->upload('./assets/images/produk/','cover',$cover);
					if($upload['auth']	== false){
						echo goResult(false,$upload['msg']);
						return;
					}
					$data = array(
						'judul'       => $judul,
						'deskripsi'   => $deskripsi,
						'cover'       => $cover,
					);
				}else{
					$data = array(
						'judul'       => $judul,
						'deskripsi'   => $deskripsi,
					);
				}

			if($this->m_produk->update_data($where,$data,'produk')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="deleted" && $id != null) {
			$where           = array('id_produk' => $id);
			if ($this->m_produk->hapus_data($where,'produk')) {
			
			}
			redirect('superuser/produk/');
		}
		else {
			echo $this->blade->nggambar('admin.produk.index',$data);	
			return;
		}
	}
	// --------------------------------- End Produk
	

	// --------------------------------- Start Slider
	public function slider($url=null,$id=null)
	{	
		$data           = $this->data;
		$data['menu']   = "slider";
		$data['slider'] = $this->m_slider->tampil_data('slider')->result();

		if ($url=="create") {
			$data['type']			= "create";
			echo $this->blade->nggambar('admin.slider.content',$data);	
			return;
		}
		else if ($url == "created" && $this->input->is_ajax_request() == true) {
			
			$judul     	= $this->input->post('judul');
			$deskripsi  = $this->input->post('deskripsi');
			$cover 		= time().$_FILES['cover']['name'];
			$cover 		= str_replace(' ', '_', $cover);

			if (!empty($_FILES['cover']['name'])) {
					$upload 	= $this->upload('./assets/images/slider/','cover',$cover);
					if($upload['auth']	== false){
						echo goResult(false,$upload['msg']);
						return;
					}
				}

			$data = array(
				'judul'       => $judul,
				'deskripsi'   => $deskripsi,
				'cover'       => $cover,
			);

			if($this->m_slider->input_data($data,'slider')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="update" && $id!=null) {
			$data['type']   = "update";
			$where          = array('id_slider' => $id);
			$data['slider'] = $this->m_slider->detail($where,'slider')->row();
			echo $this->blade->nggambar('admin.slider.content',$data);
		}
		else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true) {
			$where           = array('id_slider' => $id);

			$judul     	= $this->input->post('judul');
			
			$deskripsi  = $this->input->post('deskripsi');
			$cover 		= time().$_FILES['cover']['name'];
			$cover 		= str_replace(' ', '_', $cover);
			

			if (!empty($_FILES['cover']['name'])) {
					$upload 	= $this->upload('./assets/images/slider/','cover',$cover);
					if($upload['auth']	== false){
						echo goResult(false,$upload['msg']);
						return;
					}
					$data = array(
						'judul'       => $judul,
						'deskripsi'   => $deskripsi,
						'cover'       => $cover,
					);
				}else{
					$data = array(
						'judul'       => $judul,
						'deskripsi'   => $deskripsi,
					);
				}

			if($this->m_slider->update_data($where,$data,'slider')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="deleted" && $id != null) {
			$where           = array('id_sldier' => $id);
			if ($this->m_slider->hapus_data($where,'slider')) {
			
			}
			redirect('superuser/slider/');
		}
		else {
			echo $this->blade->nggambar('admin.slider.index',$data);	
			return;
		}
	}
	// --------------------------------- End Slider

			
	// --------------------------------- Start KAtegori
	public function kategori($url=null,$id=null)
	{	
		$data             = $this->data;
		$data['menu']     = "kategori";
		$data['kategori'] = $this->m_kategori->tampil_data('kategori')->result();

		if ($url=="create") {
			$data['type']			= "create";
			echo $this->blade->nggambar('admin.kategori.content',$data);	
			return;
		}
		else if ($url == "created" && $this->input->is_ajax_request() == true) {
			
			$nama     	= $this->input->post('nama');
			$deskripsi  = $this->input->post('deskripsi');
		
			$data = array(
				'nama'       => $nama,
				'deskripsi_kat'   => $deskripsi,
			);

			if($this->m_kategori->input_data($data,'kategori')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="update" && $id!=null) {
			$data['type']    = "update";
			$where           = array('id_kategori' => $id);
			$data['kategori'] = $this->m_kategori->detail($where,'kategori')->row();
			echo $this->blade->nggambar('admin.kategori.content',$data);
		}
		else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true) {
			$where           = array('id_kategori' => $id);

			$nama     	= $this->input->post('nama');
			$deskripsi  = $this->input->post('deskripsi');
		
			$data = array(
				'nama'       => $nama,
				'deskripsi_kat'   => $deskripsi,
			);

			if($this->m_kategori->update_data($where,$data,'kategori')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="deleted" && $id != null) {
			$where           = array('id_kategori' => $id);
			if ($this->m_kategori->hapus_data($where,'kategori')) {
			
			}
			redirect('superuser/kategori/');
		}
		else {
			echo $this->blade->nggambar('admin.kategori.index',$data);	
			return;
		}
	}
	// --------------------------------- End KAtegori
	
	// --------------------------------- Start Gallery
	public function gallery($url=null,$id=null)
	{
		$data          = $this->data;
		$data['menu']  = "gallery";
		$data['album'] = $this->m_album->tampil_data('album')->result();

	 	if ($url=="create") {
	 		$data['type']			= "create";
			echo $this->blade->nggambar('admin.gallery.content',$data);	
			return;
	 	}else if ($url == "created" && $this->input->is_ajax_request() == true) {
	 		$nama_album     	= $this->input->post('nama');
	 		$data = array(
						'nama_album'       => $nama_album,
					);
	 		
	 		if ($id_album = $this->m_album->input_data($data,'album')) {	
					$gambar = $_FILES['image']['name'];
					
					$upload = $this->upload_files('./assets/images/gallery/',$_FILES['image']);
		 			if($upload['auth']	== false){
						echo goResult(false,$upload['msg']);
						return;
					}

		 		foreach ($gambar as $key => $value) {
		 			$value 		= str_replace(' ', '_', $value);
		 			$data = array(
						'id_album' => $id_album,
						'gambar'   => $value
					);
		 			$this->m_gambar->input_data($data,'gambar_album');
		 		}
	 		}

	 	}else if ($url=="update" && $id!=null) {
	 		
	 		$data['type']    		= "update";
			$where           		= array('id_album' => $id);
			$data['album'] 			= $this->m_album->detail($where,'album')->row();
			$data['gambar_album'] 	= $this->m_gambar->detail($where,'gambar_album')->result();
			echo $this->blade->nggambar('admin.gallery.content',$data);

	 	}else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true) {
	 		$where           	= array('id_album' => $id);
	 		$nama_album     	= $this->input->post('nama');
	 		
	 		$data = array(
						'nama_album'       => $nama_album,
			);

	 		if ($this->m_album->update_data($where,$data,'album')) {
	 			$gambar_album 	= $this->m_gambar->detail($where,'gambar_album')->result();
	 			
	 			// Recent Image Update
	 			foreach ($gambar_album as $result) {
	 				if(!$this->input->post('isimage-'.$result->id_gambar)){
						if(file_exists("./assets/images/gallery/{$result->gambar}")){
							remFile('./assets/images/gallery/'.$result->gambar);
						}
						$this->m_gambar->hapus_data(array('id_gambar' => $result->id_gambar),'gambar_album');
						continue;
					}
					if (!empty($_FILES['image-'.$result->id_gambar]['name']) && $this->isImage('image-'.$result->id_gambar)==true) {
						$gambar = $_FILES['image-'.$result->id_gambar]['name'];
						$gambar = str_replace(' ', '_', $gambar);
						$upload = $this->upload('./assets/images/gallery/','image-'.$result->id_gambar,$gambar);
						if($upload['auth']	== false){
							echo goResult(false,$upload['msg']);
							return;
						}

						if(file_exists("./assets/images/gallery/{$result->gambar}")){
							remFile('./assets/images/gallery/'.$result->gambar);
						}
						$value 		= str_replace(' ', '_', $upload['msg']['file_name']);
						$datanya = array('gambar' => $value);
						$this->m_album->update_data(array('id_gambar' => $result->id_gambar),$datanya,'gambar_album');
					}
	 			}
	 			// New Image Added
	 			if(isset($_FILES['image']['name'])){
	 				$gambar = $_FILES['image']['name'];
	 				$upload = $this->upload_files('./assets/images/gallery/',$_FILES['image']);
		 			if($upload['auth']	== false){
						foreach ($upload['msg'] as $key => $value) {
							remFile(base_url().'assets/images/gallery/'.$value['file_name']);
						}
						echo goResult(false,'Opss! Gambar Product Tidak Terupload');
						return;
					}

					foreach ($gambar as $key => $value) {
			 			$value 		= str_replace(' ', '_', $value);
			 			$data = array(
							'id_album' => $id,
							'gambar'   => $value
						);
			 			$this->m_gambar->input_data($data,'gambar_album');
		 			}
	 			}
		 		echo goResult(true,"Produk Telah Di Perbarui");
				return;
	 		}

	 	}else if ($url=="deleted" && $id != null) {
	 		$where           = array('id_album' => $id);
			
			if ($this->m_album->hapus_data($where,'album')) {
			}
			if ($this->m_gambar->hapus_data($where,'gambar_album')) {		
			}

			redirect('superuser/gallery/');
	 	}else {
			echo $this->blade->nggambar('admin.gallery.index',$data);	
			return;
		}
	} 
	// --------------------------------- End Gallery
	 

	//---------------------------------------------------------------------
	//--------------------------------------------------------fungsi global
	private function upload($dir,$name ='userfile',$filename=null){
		$config['upload_path']      = $dir;
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        $config['max_size']         = 8000;
        $config['encrypt_name'] 	= FALSE;
        $config['file_name'] 		= $filename;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload($name))
        {		
        		$data['auth'] 	= false;
                $data['msg'] 	= $this->upload->display_errors();
                return $data;
        }
        else
        {
        		$data['auth']	= true;
        		$data['msg']	= $this->upload->data();
        		return $data;
        }
	}

	private function upload_files($path,$files){
        
        $config = array(
            'upload_path'   => $path,
            'allowed_types' => 'gif|jpg|png|jpeg',
            'max_size'		=> '10000',
            'overwrite'     => false,
            'encrypt_name'  => FALSE    
        );

        $this->load->library('upload', $config);

        $images 		= array();
        $data['msg']	= array();
        $data['auth']	= false;
        foreach ($files['name'] as $key => $image) {
			$_FILES['images[]']['name']     = $files['name'][$key];
			$_FILES['images[]']['type']     = $files['type'][$key];
			$_FILES['images[]']['tmp_name'] = $files['tmp_name'][$key];
			$_FILES['images[]']['error']    = $files['error'][$key];
			$_FILES['images[]']['size']     = $files['size'][$key];

			$value 		= str_replace(' ', '_', $_FILES['images[]']['name']);
            $config['file_name'] 		= $value;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('images[]')) {
            	$data['auth']		= true;
            	array_push($data['msg'],$this->upload->data());
            } else {
            	$data['auth']		= ($data['auth']==true) ? true : false;
            	array_push($data['msg'],$this->upload->display_errors());
            }
        }

        return $data;
    }

    private function isImage($file){
		if ((($_FILES[$file]['type'] == 'image/gif') || ($_FILES[$file]['type'] == 'image/jpeg') || ($_FILES[$file]['type'] == 'image/png'))){
			return true;
		}
		else {
			return false;
		}
	} 
}
