<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Post extends Model
	{
		public function getById($id)
		{
			return $this->findOne("SELECT * FROM posts WHERE id=$id");
		}
		
		public function getAll()
		{
			return $this->findMany("SELECT id, title, content, date_created FROM posts");
		}
	}
