<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Music extends CI_Controller {

	/**
	 * index controller
	 *
	 */

	 
	function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		
		$this->load->helper('html');
		
		$this->load->model('Song_model');
	}
	 
	 
	public function index()
	{
		$song = $this->Song_model->get_song_by_random();
		$this->load->view('index',$song);
	}
	
	public function nextSong(){
		$next_song = $this->Song_model->get_next_song();
	}
	
	
	/**
	 * upload controller
	 *
	 */
	
	public function upload(){
		$this->load->helper('form');
        $this->load->database();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('artist', 'artist', 'trim|required');
		$this->form_validation->set_rules('song_name', 'song_name', 'trim|required');
		$this->form_validation->set_rules('album', 'album', 'trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('post');
		}else{
			$data['artist'] = mysql_real_escape_string($this->input->post('artist'));
			$data['song_name'] = mysql_real_escape_string($this->input->post('song_name'));
			$data['album'] = $this->input->post('album');
			if(!empty($_FILES['song_url']['name'])){
			$attachment_dir = "song/".date('Ym')."/";
			!is_dir($attachment_dir) && mkdir($attachment_dir);	
			$config['upload_path'] = $attachment_dir;
			$config['allowed_types'] = 'jpg|gif|png|mp3';
			$config['max_size'] = '';	
			$config['encrypt_name'] = TRUE;			
			$this->load->library('upload', $config);
				if (!$this->upload->do_upload('song_url')){
					$error = $this->upload->display_errors();
					show_error($error);
				} else{
					$file = $this->upload->data();	
					$data['song_url'] = $attachment_dir.$file['file_name'] ;  //上传mp3，返回mp3地址	 		 
				}
			}
			if(!empty($_FILES['album_image']['name'])){
				$attachment_dir = "song/".date('Ym')."/";
				!is_dir($attachment_dir) && mkdir($attachment_dir);	
				$config['upload_path'] = $attachment_dir;
				$config['allowed_types'] = 'gif|jpg|png|mp3';
				$config['max_size'] = '500';
				$config['max_width']  = '1000';
				$config['max_height']  = '1000';	
				$config['encrypt_name'] = TRUE;			
				$this->load->library('upload', $config);
					if (!$this->upload->do_upload('album_image')){
						$error = $this->upload->display_errors();
						show_error($error);
					} else{
						$file = $this->upload->data();	
						$data['album_image'] = $attachment_dir.$file['file_name'] ;  //上传图片，返回图片地址	 		 
					}
			}
			
			if($query = $this->Song_model->insert_Song($data))
			{
				echo "<script>alert('上传成功！');window.location.href='http://lanqy.info/music/upload'</script>";
				return true;
			}else{
				echo "<script>alert('上传异常！');";
			}
		}
		
		
	}
	
	
	public function single($id){
		
		$id = mysql_real_escape_string($this->uri->segment(3));
		
		if(isset($id)&&is_numeric($id)){
		
			$single_s = $this->Song_model->getSingleSong($id);

			if($single_s){
			
				$this->load->view('single',$single_s);
				
			} else{
			
				$this->load->view('error');
			}
		}
		else{
			$this->load->view('error');
		}
		
	}
	
	

}
