<?php

class Song_model extends CI_Model {

    var $id   = '';
    var $artist   = '';
    var $song_name = '';
    var $song_url    = '';
    var $album    = '';
    var $album_image    = '';
    var $date    = '';

    function __construct()
    {
       
        parent::__construct();
    }
    
	/**
	 * get song by random
	 *
	*/
	
    function get_song_by_random()
    {	
        $query = $this->db->query("SELECT * FROM  `song` ORDER BY RAND() LIMIT 1");
		
        $db_row = $query->row(); 

        $this->id   = $db_row->id;
        $this->artist   = $db_row->artist;
        $this->song_name = $db_row->song_name; 
        $this->song_url    = $db_row->song_url;
        $this->album    = $db_row->album;
        $this->album_image    = $db_row->album_image;
        $this->date    = $db_row->date;

        return $this;
    }
	
	
	function get_next_song()
	{
		$sql = "SELECT * FROM  `song` ORDER BY RAND() LIMIT 1";
		$query = $this->db->query($sql);
		echo json_encode($query->result());
	}
	
    function insert_Song($data)
    {
		$insert = $this->db->insert('song', $data);
			return $insert;
    }
	
	function getSingleSong($id){
		$this->db->select('*');
		$this->db->from('song');
		$this->db->where('id',$id);
		$q = $this->db->get();
		$db_row = $q->row();            
        $this->id   = $db_row->id;
        $this->artist   = $db_row->artist;
        $this->song_name = $db_row->song_name;  
        $this->song_url    = $db_row->song_url;
        $this->album    = $db_row->album;
        $this->album_image    = $db_row->album_image;
        $this->date    = $db_row->date;

        return $this;

	}
	
	
    function update_Song()
    {
        $this->artist   = $_POST['artist']; 
        $this->song_name = $_POST['song_name'];
        $this->song_url = $_POST['song_url'];
        $this->album = $_POST['album'];
        $this->album_image = $_POST['album_image'];
        $this->date    = time();

        $this->db->update('song', $this, array('id' => $_POST['id']));
    }

}
